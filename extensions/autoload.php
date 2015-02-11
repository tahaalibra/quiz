<?php

spl_autoload_register("autoloadExtensions");

function autoloadExtensions($className) {
if (file_exists(ROOT.DS.'extensions'.DS.$className.DS.$className.'.Extension.php')) {
        require_once ROOT.DS.'extensions'.DS.$className.DS.$className.'.Extension.php';
    }
}
