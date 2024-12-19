<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=1280, initial-scale=1">
    <title><?php echo $pageTitle ?></title>
    <?php
      require_once __DIR__ . "/../layouts/head.php";
    ?>
  </head>
  <body>
<?php
  require_once __DIR__ . "/../layouts/navbar.php";
  require_once __DIR__ . "/../layouts/header.php";
?>

    <main class="app" style="text-align: center;">
      <h2>What's Up.</h2>
      <p>Let's cut to the chase:</p>
      <a class="btn btn-secondary btn-lg" href="https://www.linkedin.com/in/avalenzo/" target="_blank">LinkedIn</a>
      <a class="btn btn-primary btn-lg btn-prominent" href="mailto:anthonyvalenzo4@gmail.com" target="_blank">
        <span class="material-symbols-outlined">
        mail
        </span>
        Email
      </a>
      <a class="btn btn-secondary btn-lg" href="https://www.github.com/avalenzo1">Github</a>
    </main>

    <?php
      require_once __DIR__ . "/../layouts/footer.php";
    ?>
  </body>
</html>