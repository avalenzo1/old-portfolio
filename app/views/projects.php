<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=1280, initial-scale=1">
    <title><?php echo $pageTitle ?></title>
    <?php
      require_once __DIR__ . "/../layouts/head.php";
    ?>
    <style>
      .projects-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 2rem;
      }
    </style>
  </head>
  <body>
    <?php
      require_once __DIR__ . "/../layouts/navbar.php";
      require_once __DIR__ . "/../layouts/header.php";
    ?>

    <main class="app">
      <h2>Highlights</h2>
      
      
      <h2>"The Stack"</h2>
      <p>These are some projects that I worked on, check 'em out!</p>
      <section class="projects-container">
        <?php
          for ($i = 0; $i < 8; $i++) {
            echo <<<HTML
              <div class="card">
                <div class="card-cover placeholder-glow">
                  <span class="placeholder" style="aspect-ratio: 1;"></span>
                </div>
                <div class="card-body">
                  <h3 class="card-title placeholder-glow">
                    <span class="placeholder"></span>
                  </h3>
                  <div class="card-text placeholder-glow">
                    <span class="placeholder"></span>
                    <span class="placeholder"></span>
                  </div>
                  <div class="card-actions">
                    <a class="btn btn-primary btn-prominent placeholder-glow" style="flex: 1;">
                      <span class="placeholder"></span>
                    </a>
                    <a class="btn btn-primary placeholder-glow">
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="placeholder"></span>
                    </a>
                  </div>
                </div>
              </div>
            HTML;
          }
        ?>
      </section>
    </main>

    <script type="text/javascript">
      async function fetchProjects()
      {
        const projects = document.querySelector(".projects-container");

        const response = await fetch("/api/projects");
        const data = await response.json();

        projects.innerHTML = '';
        
        data.projects.forEach(project => {
          projects.insertAdjacentHTML("beforeend", `
            <div class="card">
              <div class="card-cover">
                <img alt="${project.name}" src="${project.image}" loading="lazy" />
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  ${project.name}
                </h3>
                <div class="card-text">
                  ${project.description}
                </div>
                <div class="card-actions">
                  <a class="btn btn-primary btn-prominent" href="${project.site}" target="_blank" style="flex: 1;">
                    View Site
                    <span class="material-symbols-outlined">
                      open_in_new
                    </span>
                  </a>
                  <a class="btn btn-primary" href="${project.repo}">
                    Repo

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          `);
        });
      }

      fetchProjects();
    </script>

    <?php
      require_once __DIR__ . "/../layouts/footer.php";
    ?>
  </body>
</html>