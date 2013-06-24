<?php

defined('APPLICATION_ENV')
    || define('APPLICATION_ENV',
              (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV')
                                         : 'development')) ;

//----------------------------
// DATABASE CONFIGURATION
//----------------------------
$ruckusing_db_config = array(
    'development' => array(
        'type' => 'mysql',
        'host' => 'localhost',
        'port' => 3306,
        'database' => 'ruckusing_migrations',
        'user' => 'root',
        'password' => 'change_me'
    )
);
?>