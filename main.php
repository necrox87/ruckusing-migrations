<?php

define('RUCKUSING_BASE', dirname(__FILE__));

//requirements
require RUCKUSING_BASE . '/lib/classes/util/class.Ruckusing_Logger.php';
require RUCKUSING_BASE . '/config/database.inc.php';
require RUCKUSING_BASE . '/lib/classes/class.Ruckusing_FrameworkRunner.php';

$console_env = false;

for ($i = 2; $i < $num_args; $i++) {

    $arg = $argv[$i];

    if (strpos($arg, '=') !== false) {

        list($key, $value) = explode("=", $arg);

        if ($key == 'ENV' && !empty($value)) {

            $console_env = true;
        }
    }
}

//Ignore "APPLICATION_ENV" if "console_env" is set
if ($console_env === false) {

    $argv[] = 'ENV=' . APPLICATION_ENV;
}

$main = new Ruckusing_FrameworkRunner($ruckusing_db_config, $argv);
$main->execute();

?>