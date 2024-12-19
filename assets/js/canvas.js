const dpr = window.devicePixelRatio || 1;
const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");

let CANVAS_WIDTH = canvas.width;
let CANVAS_HEIGHT = canvas.height;
let CANVAS_CENTER_X = CANVAS_WIDTH / 2;
let CANVAS_CENTER_Y = CANVAS_HEIGHT / 2;

let cursorX = 0;
let cursorY = 0;

class Vector2
{
  constructor(x, y)
  {
    this.x = x || 0;
    this.y = y || 0;
  }
}

const Time = {};
const Physics = {};

Time.previousTime = Date.now();
Time.currentTime = 0;
Time.deltaTime = 0;


Physics.gravity = 98;
Physics.objects = new Array();
Physics.Object = class {
  constructor(x, y, mass, radius, color)
  {
    this.friction = 0.98;
    this.radius = radius || 1;
    this.width = this.radius * 2;
    this.height = this.radius * 2;
    this.pos = new Vector2(x,y);
    this.vel = new Vector2(5,0);
    this.mass = mass || 1;
    this.color = color || 'black';
  }

  update()
  {
    // Fg = gm
    this.vel.y = Physics.gravity * Time.deltaTime;

    // If the object is in contact of ground, account for Fn = ma
    if (Math.abs(this.pos.y - (CANVAS_HEIGHT - this.radius)) <= 0)
    {
      this.vel.x *= Math.pow(this.friction, Time.deltaTime);
      this.vel.y *= Math.pow(this.friction, Time.deltaTime);
    }

    this.pos.x += this.vel.x * Time.deltaTime;
    this.pos.y += this.vel.y * Time.deltaTime;
  }
}

Physics.resolveCollisions = function()
{ 
  // Sets boundaries for box
  Physics.objects.forEach((object) => {
    if (object.pos.y >= CANVAS_HEIGHT - object.radius)
    {
      object.pos.y = CANVAS_HEIGHT - object.radius;
      object.vel.y *= object.friction;
      object.vel.y *= -1;
    }

    if (object.pos.x <= object.radius)
    {
      object.pos.x = object.radius;
      object.vel.x *= object.friction;
      object.vel.x *= -1;
    }

    if (object.pos.x >= CANVAS_WIDTH - object.radius)
    {
      object.pos.x = CANVAS_WIDTH - object.radius;
      object.vel.x *= object.friction;
      object.vel.x *= -1;
    }

    for (let a = 0; a < Physics.objects.length; a++)
    {
      const object1 = Physics.objects[a];

      for (let b = 0; b < Physics.objects.length; b++)
      {
        const object2 = Physics.objects[b];

        if (object1 !== object2)
        {
          const dx = object2.pos.x - object1.pos.x;
          const dy = object2.pos.y - object1.pos.y;

          // d	=	distance
          // (x1, y1)	=	coordinates of the first point
          // (x2, y2)	=	coordinates of the second point
          const distance = Math.sqrt(dx ** 2 + dy ** 2);

          if (distance <= object1.radius + object2.radius)
          {
            const angle = Math.atan2(dy, dx);
            const overlap = object1.radius + object2.radius - distance;
            
            const impulseX = (object1.mass * object2.mass + (object1.vel.x - object2.vel.x)) / (object1.mass + object2.mass) * Math.cos(angle);
            const impulseY = (object1.mass * object2.mass + (object1.vel.y - object2.vel.y)) / (object1.mass + object2.mass) * Math.sin(angle);

            // Apply the impulses to the objects to change their velocities
            object1.vel.x -= impulseX;
            object1.vel.y -= impulseY;
            
            object2.vel.x += impulseX;
            object2.vel.y += impulseY;

            object1.pos.x -= (Math.cos(angle) * overlap) / 2;
            object1.pos.y -= (Math.sin(angle) * overlap) / 2 ;

            object2.pos.x += (Math.cos(angle) * overlap) / 2;
            object2.pos.y += (Math.sin(angle) * overlap) / 2;
          }
        }
      }
    }
  });
}
Physics.update = function()
{
  Physics.objects.forEach((object) => { object.update(); });

  Physics.resolveCollisions();
}

function drawCircle(circlePositionX, circlePositionY, circleRadius, circleColor)
{
  ctx.fillStyle = circleColor;
  ctx.beginPath();
  ctx.arc(circlePositionX, circlePositionY, circleRadius, 0, 2 * Math.PI);
  ctx.fill();
}

function canvasViewportInit()
{
  for (let i = 0; i < 20; i++)
  {
    Physics.objects.push(new Physics.Object(Math.random() * 1000, Math.random() * 1000, 1, 50, "black"));
  }
}

function canvasViewportLoop()
{
  Time.currentTime = Date.now();
  Time.deltaTime = (Time.currentTime - Time.previousTime) / 1000;
  Time.previousTime = Time.currentTime;
  
  // Physics
  Physics.update();

  // Clears Screen
  ctx.clearRect(0,0,CANVAS_WIDTH, CANVAS_HEIGHT);

  // Draws circle for all physics objects
  Physics.objects.forEach((object) => {
    drawCircle(object.pos.x, object.pos.y, object.radius, object.color);
  });

  ctx.fillText(Time.deltaTime, CANVAS_WIDTH / 2 , CANVAS_HEIGHT / 2);

  window.requestAnimationFrame(canvasViewportLoop);
}

function canvasViewportResize()
{
  // Sets canvas width to window dimensions times device pixel ratio
  // This accounts for blurry canvas display
  canvas.width = document.documentElement.clientWidth;
  canvas.height = document.documentElement.clientHeight;

  // Sets canvas constants
  CANVAS_WIDTH = canvas.width;
  CANVAS_HEIGHT = canvas.height;
  CANVAS_CENTER_X = CANVAS_WIDTH / 2;
  CANVAS_CENTER_Y = CANVAS_HEIGHT / 2;
}

function mouseMove(event)
{
  cursorX = event.clientX * dpr - canvas.getBoundingClientRect().left * dpr;
  cursorY = event.clientY * dpr - canvas.getBoundingClientRect().top * dpr;
}

let gyroscope = new Gyroscope({ frequency: 60 });

gyroscope.addEventListener("reading", (e) => {
  Physics.gravity = gyroscope.x;
});

gyroscope.start();

window.requestAnimationFrame(canvasViewportLoop);
window.addEventListener("DOMContentLoaded", canvasViewportInit);
window.addEventListener("DOMContentLoaded", canvasViewportResize);
window.addEventListener("resize", canvasViewportResize);
document.addEventListener("mousemove", mouseMove);