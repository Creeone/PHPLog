<?php

/*Log example with more than one argument and create yourself .log file*/

require_once('../PHPLog.php');

/*Params*/
$name = 'example3';
$file = 'my.log';
$data= ['test', 'with', 'array'];

/*Usage*/
PHPLog::$PATH = dirname(__FILE__).'/logs';
PHPLog::getLogger($name,$file)->log($data,"123","456");
