<?php

namespace App;

use Dotenv\Dotenv;

class Application
{
  public function run()
  {
    $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
    require_once __DIR__ . '/../routes/web.php';

  }
}