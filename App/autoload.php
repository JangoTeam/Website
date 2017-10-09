<?php

function __autoload($class) {
  $path = __DIR__ . "/class/";
  if(file_exists($path . $class . ".php")){
    require $path . $class . ".php";
  } else {
    echo "Error: Class: '$class' not found in $path";
  }
}
