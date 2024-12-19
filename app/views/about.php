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

    <main class="app">
      <p>
        Hey! On my free time I like to code, make beats, listen to chill music.
        I also workout at the rec and am currently cutting.
      </p>
    </main>

    <?php
      require_once __DIR__ . "/../layouts/footer.php";
    ?>
  </body>
</html>