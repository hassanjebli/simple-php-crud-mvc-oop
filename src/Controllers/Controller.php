<?php

namespace App\Controllers;

class Controller
{
  protected function render($view, $data = [])
  {
    extract($data);
    
    ob_start();
    include "../src/Views/$view.php";
    $content = ob_get_clean();

    include "../src/Views/layouts/main.php";
  }
}