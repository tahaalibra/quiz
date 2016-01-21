<?php namespace dales\view;

use dales\view\HTML;

class View
{
    public static function render($view=null,  $data=null)
    {
        if ($view) {
            if($data){
                extract($data);
            }
            $view = str_replace(".",DS,$view);
            if (file_exists(VIEW . DS . $view . '.php')) {
                ob_start();
                require_once VIEW.DS.$view.".php";
                $applied_template = ob_get_contents();
                $applied_template = HTML::parse_variables($applied_template, $data);
                ob_end_clean();

                echo $applied_template;
            }
        } elseif ($data) {
            echo json_encode($data);
        }
    }
}