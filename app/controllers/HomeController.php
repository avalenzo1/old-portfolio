<?php
class HomeController
{
  public function index()
  {
    // This method handles the request for the home page.

    // You can include any necessary logic and data retrieval here.
    $pageTitle = 'Home';

    // Load the view (HTML template) for the home page.
    require_once __DIR__ . '/../views/home.php';
  }
}
?>
