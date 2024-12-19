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
    ?>
    <main class="app">
      <h1>Style Guide</h1>
      <p>Below are the components this website uses. If you somehow found this, hello!</p>
      
      <h1>Heading 1</h1>
      <h2>Heading 2</h2>
      <h3>Heading 3</h3>
      <h4>Heading 4</h4>
      <h5>Heading 5</h5>
      <h6>Heading 6</h6>

      <div style="display: grid; gap: 0.5rem;">
        <div>
          <button class="btn btn-prominent btn-xl">Base</button>
          <button class="btn btn-primary btn-prominent btn-xl">Primary</button>
          <button class="btn btn-secondary btn-prominent btn-xl">Secondary</button>
          <button class="btn btn-success btn-prominent btn-xl">Success</button>
          <button class="btn btn-warning btn-prominent btn-xl">Warning</button>
          <button class="btn btn-danger btn-prominent btn-xl">Danger</button>
        </div>
        
        <div>
          <button class="btn btn-prominent btn-lg">Base</button>
          <button class="btn btn-primary btn-prominent btn-lg">Primary</button>
          <button class="btn btn-secondary btn-prominent btn-lg">Secondary</button>
          <button class="btn btn-success btn-prominent btn-lg">Success</button>
          <button class="btn btn-warning btn-prominent btn-lg">Warning</button>
          <button class="btn btn-danger btn-prominent btn-lg">Danger</button>
        </div>
        
        <div>
          <button class="btn btn-prominent">Base</button>
          <button class="btn btn-prominent btn-primary">Primary</button>
          <button class="btn btn-prominent btn-secondary">Secondary</button>
          <button class="btn btn-prominent btn-success">Success</button>
          <button class="btn btn-prominent btn-warning">Warning</button>
          <button class="btn btn-prominent btn-danger">Danger</button>
        </div>
      
        <div>
          <button class="btn btn-prominent btn-sm">Base</button>
          <button class="btn btn-primary btn-prominent btn-sm">Primary</button>
          <button class="btn btn-secondary btn-prominent btn-sm">Secondary</button>
          <button class="btn btn-success btn-prominent btn-sm">Success</button>
          <button class="btn btn-warning btn-prominent btn-sm">Warning</button>
          <button class="btn btn-danger btn-prominent btn-sm">Danger</button>
        </div>

        <div>
          <button class="btn">Base</button>
          <button class="btn btn-primary">Primary</button>
          <button class="btn btn-secondary">Secondary</button>
          <button class="btn btn-success">Success</button>
          <button class="btn btn-warning">Warning</button>
          <button class="btn btn-danger">Danger</button>
        </div>

        <div>
          <div class="card" style="width: 250px">
            <div class="card-cover">
              <img alt="placeholder" src="https://placehold.co/400x400/EEE/31343C" />
            </div>
            <div class="card-body">
              <h3 class="card-title placeholder-glow">
                Title
              </h3>
              <div class="card-text placeholder-glow">
                Lorem ipsum.
              </div>
              <div class="card-actions">
                <a class="btn btn-primary btn-prominent">
                  Button
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>