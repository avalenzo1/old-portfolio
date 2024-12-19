<?php
session_start();

// Handle the request, route it to the appropriate controller and action

$path = strtolower(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($path === '/') {
  // Handle the homepage
  require_once './app/controllers/HomeController.php';

  $controller = new HomeController();
  $controller->index();
} elseif ($path === '/projects') {
  // Handle the login page
  require_once './app/controllers/ProjectsController.php';

  $controller = new ProjectsController();
  $controller->index();
} elseif ($path === '/about') {
  // Handle the login page
  require_once './app/controllers/AboutController.php';

  $controller = new AboutController();
  $controller->index();
} elseif ($path === '/contact') {
  // Handle the login page
  require_once './app/controllers/ContactController.php';

  $controller = new ContactController();
  $controller->index();
} elseif ($path === '/guide') {
  // Handle the login page
  require_once './app/controllers/GuideController.php';

  $controller = new GuideController();
  $controller->index();
} elseif ($path === '/api/projects') {
  require_once './app/models/ProjectModel.php';
  
  header('Content-Type: application/json; charset=utf-8');

  $model = new ProjectModel();
  $data = array(
    'projects' => $model->getProjects()
  );
  echo json_encode($data, JSON_PRETTY_PRINT);
} else {
  // Handle 404 or other error responses
  header('HTTP/1.0 404 Not Found');
}
