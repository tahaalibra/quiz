<?php

class RWConfig
{
  public static function write($file,$array)
  {
    file_put_contents(ROOT.DS.'extensions'.DS.$file,json_encode($array));
  }

  public static function read($file)
  {
    return json_decode(file_get_contents(ROOT.DS.'extensions'.DS.$file), true);
  }
}
