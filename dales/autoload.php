<?php

spl_autoload_register("autoload");

function autoload($className)
{
    $className=explode('\\',$className);
    $count = count($className);
    $path = ROOT;
    $i=0;
    while($i<$count){
      $path = $path.DS.$className[$i];
      $i++;
    }
    $path = $path.'.php';

    if (file_exists($path)) {
      require_once $path;
    }
}