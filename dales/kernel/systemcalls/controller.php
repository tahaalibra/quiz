<?php namespace app\controller;


/**
 * @param null $view
 * @param null $data
 * @return null
 */
function view($view = null, $data = null) {
    \dales\view\View::render($view, $data);
    return null;
}

