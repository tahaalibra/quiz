<?php
/*
 * Initialize website
 *
 */


/*
 * Require Routing which then calls the hooks
 */
require_once ROOT.DS.'boot'.DS.'routing.php';
require_once ROOT.DS.'boot'.DS.'autoload.php';
require_once ROOT.DS.'boot'.DS.'checks.php';

//start session;
Auth::startSession();

routing($url);
