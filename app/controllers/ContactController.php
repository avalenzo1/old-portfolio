<?php
class ContactController
{
  public function index()
  {
    // This method handles the request for the home page.

    // You can include any necessary logic and data retrieval here.
    $pageTitle = 'Contact';

    // Load the view (HTML template) for the home page.
    require_once __DIR__ . '/../views/contact.php';
  }
}
?>
