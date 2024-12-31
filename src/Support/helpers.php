<?php

use App\Application;
use App\Router;

function isAction($action){
  if (Router::hasAction($action)) {
    return true;
  }

  return false;
}
function app(){
  return new Application;
}