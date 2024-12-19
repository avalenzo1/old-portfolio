console.log(
  `
  ,-~~-.___.
 / |  '     \         
(  )         0  
 \_/-, ,----'            
    ====           // 
   /  \-'~;    /~~~(O)
  /  __/~|   /       |     
=(  _____| (_________|

Snoopy was here!
`
);

// Navbar elements
let navbar = document.getElementById("navbar");
let navbarToggler = document.querySelector(".navbar-toggler");
let navbarToggleIcon = navbarToggler.querySelector(".material-symbols-outlined");
let navbarCollapse = document.querySelector(".navbar-collapse");

// Handles toggle event for menu
navbarToggler.addEventListener("click", function() {
  const visible = navbarCollapse.classList.contains("show");
  
  navbarToggleIcon.innerHTML = visible ? "menu" : "close";
  navbarCollapse.classList.toggle("show");
  navbar.classList.toggle("collapsed");
  navbar.style.top = "0";
});

(function() {
  let prevScrollY = window.scrollY
  
  document.addEventListener("scroll", function(e) {
    let boundingClientRect = navbar.getBoundingClientRect();
    let scrollY = window.scrollY;

    navbar.style.top = boundingClientRect.top - (scrollY - prevScrollY) + "px";

    if (prevScrollY > scrollY) {
      if (boundingClientRect.top >= 0) {
        navbar.style.top = 0 + "px";
      }
    } else {
      if (boundingClientRect.top <= -boundingClientRect.height) {
        navbar.style.top = -boundingClientRect.height + "px";
      }
    }

    prevScrollY = scrollY;
  });
})();

// Handles theme preferences
(function() {
  let stylesheet = document.getElementById("dark-mode-stylesheet");
  let modeToggler = document.querySelector(".mode-toggler");
  let modeTogglerIcon = modeToggler.querySelector(".material-symbols-outlined");
  
  let valid = ["tonality", "light_mode", "dark_mode"];

  /** 
  * Gets preferred theme of user (dark mode or light mode);
  * @return {boolean} 
  */
  function prefersDarkMode()
  {
    return window.matchMedia("(prefers-color-scheme: dark)").matches;
  }

  /** 
  * Gets current mode of user
  * @return {string}
  */
  function getMode()
  {
    let mode = localStorage.getItem("pf-mode");

    if (!valid.includes(mode))
    {
      // If mode is empty or malformed, set mode to the prefered theme
      mode = "tonality";
      console.warn("You're new here? I won't let that slide 💀💀💀");

      setMode(mode);
    }

    return mode;
  }

  /** 
  * Gets next index in list of valid modes
  * @return {string}
  */
  function getNextMode()
  {
    let mode = getMode();
    let index = valid.indexOf(mode);
    let next = valid[(index + 1) % valid.length]; // We learned this is CS111; basically gets remainder by dividing index by length of list

    return next;
  }

  /** 
  * Sets preferred mode of user
  * @param {string} mode
  */
  function setMode(mode)
  {
    if (valid.includes(mode))
    {
      // Sets mode into localStorage for further use
      localStorage.setItem("pf-mode", mode);

      toggleStylesheet();
    }
  }

  /** 
  * Increments mode of user
  * @return {string} next
  */
  function toggleMode()
  {
    // Set mode to next index of list.
    let next = getNextMode();

    setMode(next);

    return next;
  }
  
  function toggleStylesheet()
  {
    let mode = getMode();

    if (mode == 'dark_mode' || (mode == 'tonality' && prefersDarkMode()))
    {
      stylesheet.setAttribute("href", "assets/css/styles.dark.css")
    }
    else
    {
      stylesheet.removeAttribute("href");
    }

  }

  function initialize()
  {
    let mode = getMode();

    setMode(mode);

    modeTogglerIcon.innerHTML = getNextMode(mode);

    modeToggler.addEventListener("click", function() {
      mode = toggleMode();

      modeTogglerIcon.innerHTML = getNextMode(mode);
    });

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
      setMode(mode);
    });
  }

  initialize();
})();
