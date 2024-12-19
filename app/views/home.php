<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=1280, initial-scale=1">
    <title><?php echo $pageTitle ?></title>
    <?php
      require_once __DIR__ . "/../layouts/head.php";
    ?>
    <style>
      <style>
      
        /* 

        

        #canvas {
          background-color: #2b3138; 
        }

        .canvas-container {
          display: grid;
          place-items: center;
          position: relative;
        }

        .overlay {

        } */

        body {
          overflow: hidden;
        }
  
        .navbar {
          position: fixed;
          left: 0;
          right: 0;
          color: #fff;
        }

        .app {
          padding: 0;
          display: flex;
          position: relative;
          align-items: center;
          justify-content: center;
          height: 100vh;
          background-color: var(--pf-primary);
          color: #fff;
        }

        .header {
          position: absolute;
          background-color: transparent;
        }

        .popup {
          animation: item-popup 1s;
        }

        @keyframes item-popup {
          from {
            transform: translate3d(-100%, -100%, 10px) scale(0);
          }
          to {
            transform: translate3d(0) scale(1);
          }
        }
      </style>
    </style>
  </head>
  <body>
    <?php
      require_once __DIR__ . "/../layouts/navbar.php";
    ?>
    <main class="app">
      <header class="header">
        <img width="200" src="https://www.theeducationmarketing.co.uk/wp-content/uploads/2023/03/Websites-Header.png" class="popup" />
        <h1>
          Hola, me llamo Anthony Valenzo!
        </h1>

        <h2>
          I'm a college student and aspiring fullstack developer.
        </h2>

        <a class="btn btn-primary btn-prominent btn-outline btn-xl" href="/projects">
          Check out my projects!
        </a>
      </header>

      <canvas id="canvas"></canvas>
      <script src="/assets/vendor/quadtree-js/dist/quadtree.js"></script>
      <script src="/assets/js/canvas.js"></script>
    </main>
  </body>
</html>