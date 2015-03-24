<?php

class HTML
{
    public function includeJs($fileName)
    {    //echo file_get_contents(ROOT.DS.'app'.DS.'views'.DS.THEME.DS.'js'.DS.$fileName.'.js');
         echo '<script src="'.BASE_PATH.'js/'.$fileName.'.js"></script>';
    }

    public function includeCss($fileName)
    {    //echo file_get_contents(ROOT.DS.'app'.DS.'views'.DS.THEME.DS.'css'.DS.$fileName.'.css');
         echo '<link rel="stylesheet" type="text/css" href="'.BASE_PATH.'css/'.$fileName.'.css">';
    }
    
     public function js($fileName)
    {    //echo file_get_contents(ROOT.DS.'app'.DS.'views'.DS.THEME.DS.'js'.DS.$fileName.'.js');
         echo '<script src="'.BASE_PATH.'/'.$fileName.'.js"></script>';
    }

    public function css($fileName)
    {    //echo file_get_contents(ROOT.DS.'app'.DS.'views'.DS.THEME.DS.'css'.DS.$fileName.'.css');
         echo '<link rel="stylesheet" type="text/css" href="'.BASE_PATH.'/'.$fileName.'.css">';
    }

}
