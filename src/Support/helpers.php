<?php

use App\Router;

function isAction($action){
  if (Router::hasAction($action)) {
    return true;
  }

  return false;
}