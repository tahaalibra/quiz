<?php

class Template
{
    protected $controller;
    protected $action;
    protected $vars = array();

    public function set($key, $value)
    {
        $this->vars[$key] = $value;
    }

    public function __construct($controller, $action)
    {
        $this->controller = $controller;
        $this->action = $action;
    }

    public function parse_variables($input, $array)
    {
        $search = preg_match_all('/\${{.*?}}/', $input, $matches);

        for($i = 0; $i < $search; $i++){
            $matches[0][$i] = str_replace(array('$','{', '}'), null, $matches[0][$i]);
        }

        foreach($matches[0] as $value){
            if(isset($array[$value])){
                $input = str_replace('${{' . $value . '}}', $array[$value], $input);
            }else
                $input = str_replace('${{' . $value . '}}', '' , $input);
        }
        return $input;
    }


    public function render($doNotRenderHeader = 0)
    {
        $html = new HTML();
        //extract($this->vars);
        ob_start();
        if ($doNotRenderHeader == 0) {
            if (file_exists(VIEW.DS.THEME.DS.$this->controller.DS.'header.php')) {
                require_once VIEW.DS.THEME.DS.$this->controller.DS.'header.php';
            } else {
                require_once VIEW.DS.THEME.DS.'header.php';
            }
        }


        if (file_exists(VIEW.DS.THEME.DS.strtolower($this->controller).DS.strtolower($this->action).'.php')) {
            require_once VIEW.DS.THEME.DS.strtolower($this->controller).DS.strtolower($this->action).'.php';
            } else {
                require_once VIEW.DS.THEME.DS.strtolower($this->controller).'.php';
            }

        if ($doNotRenderHeader == 0) {
            if (file_exists(VIEW.DS.THEME.DS.strtolower($this->controller).DS.'sidebar.php')) {
                require_once VIEW.DS.THEME.DS.strtolower($this->controller).DS.'sidebar.php';
            } else {
                require_once VIEW.DS.THEME.DS.'sidebar.php';
            }
        }

        if ($doNotRenderHeader == 0) {
            if (file_exists(VIEW.DS.THEME.DS.$this->controller.DS.'footer.php')) {
                require_once VIEW.DS.THEME.DS.$this->controller.DS.'footer.php';
            } else {
                require_once ROOT.DS.'app'.DS.'views'.DS.THEME.DS.'footer.php';
            }
        }
        $applied_template = ob_get_contents();
        $applied_template = $this->parse_variables($applied_template, $this->vars);
        ob_end_clean();
        echo $applied_template;
    }
    public function __destruct()
    {
    }
}
