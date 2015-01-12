<?php
 /*
  * Configuration Setting File
  * 
  * Todo:
  * support for redis database
  * 
  * move url defination and other define declaration here from index.php
  */


//Development Enviourment Setting
define ('DEVELOPMENT_ENVIRONMENT',true);
 
//Sql Database Setting
define('DB_NAME', 'android_quiz');
define('DB_USER', 'root');
define('DB_PASSWORD', 'toor');
define('DB_HOST', 'localhost');
define('DB_PREFIX','BV');

//define default theme
define('THEME','sentient');

//BASE PATH
define('BASE_PATH',"http://" . $_SERVER['SERVER_NAME'].INSTALL_FOLDER );

//paginate limit
define('PAGINATE_LIMIT', '5');

//Quiz Configuration
define('QUESTION_LIMIT', '5');
define('RESULT_DISPLAY', true);
define('TIME_LIMIT', '1800');
