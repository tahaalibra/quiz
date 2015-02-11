<?php

class HTML
{
    private $js = array();

    public function sanitize($data)
    {
        return mysql_real_escape_string($data);
    }

    public function link($text, $path, $prompt = false, $confirmMessage = "Are you sure?")
    {
        $path = str_replace(' ', '-', $path);
        if ($prompt) {
            $data = '<a href="javascript:void(0);" onclick="javascript:jumpTo(\''.BASE_PATH.'/'.$path.'\',\''.$confirmMessage.'\')">'.$text.'</a>';
        } else {
            $data = '<a href="'.BASE_PATH.'/'.$path.'">'.$text.'</a>';
        }

        return $data;
    }

    public function includeJs($fileName)
    {    //echo file_get_contents(ROOT.DS.'app'.DS.'views'.DS.THEME.DS.'js'.DS.$fileName.'.js');
         echo '<script src="'.BASE_PATH.'js/'.$fileName.'.js"></script>';
    }

    public function includeCss($fileName)
    {    //echo file_get_contents(ROOT.DS.'app'.DS.'views'.DS.THEME.DS.'css'.DS.$fileName.'.css');
         echo '<link rel="stylesheet" type="text/css" href="'.BASE_PATH.'css/'.$fileName.'.css">';
    }

    public function getDataURI($image, $mime = '')
    { //under developed area
      // Read image path, convert to base64 encoding
      $imageData = base64_encode(file_get_contents($image));

      // Format the image SRC:  data:{mime};base64,{data};
      $src = 'data: '.mime_content_type($image).';base64,'.$imageData;

      // Echo out a sample image
      //echo '<img src="', $src, '">';
      //return 'data: '.(function_exists('mime_content_type') ? mime_content_type($image) : $mime).';base64,'.base64_encode(file_get_contents($image));

    }

}
