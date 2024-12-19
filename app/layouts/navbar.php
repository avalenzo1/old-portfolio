<?php
  $paths = array(
    array(
      "path" => "/",
      "name" => "Home",
      "icon" => "home"
    ),
    array(
      "path" => "/projects",
      "name" => "Projects",
      "icon" => "tactic"
    ),
    array(
      "path" => "/about",
      "name" => "About",
      "icon" => "face"
    ),
    array(
      "path" => "/contact",
      "name" => "Contact",
      "icon" => "contacts"
    )
  );
  $path = strtolower(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
?>

<noscript>
  <div class="alert alert-warning alert-prominent">
    You currently have Javascript disabled, so some functionality may be broken.
  </div>
</noscript>

<nav class="navbar" id="navbar">
  <div class="navbar-container">
    <button class="btn btn-primary btn-prominent btn-round navbar-toggler">
      <span class="material-symbols-outlined">
        menu
      </span>
    </button>
    
    <!-- <a class="navbar-logo" href="/">
      <img src="https://cdn-icons-png.flaticon.com/512/8168/8168118.png" width="40" alt="logo">
    </a> -->
  
    <button class="btn btn-primary btn-prominent btn-round mode-toggler">
      <span class="material-symbols-outlined">
        hourglass
      </span>
    </button>

    <ul class="navbar-nav navbar-collapse">
      <?php
        foreach($paths as $index => $metadata) {

        $active = ($path == $metadata["path"]) ? 'active' : '';
      ?>
      <li class="nav-item">
        <a class="btn btn-primary btn-prominent nav-link <?= $active ?>" aria-current="page" href="<?= $metadata["path"] ?>">
          <span class="material-symbols-outlined">
            <?= $metadata["icon"] ?>
          </span>
          <?= $metadata["name"] ?>
        </a>
      </li>
      <?php
        }
      ?>
    </ul>
  </div>
</nav>