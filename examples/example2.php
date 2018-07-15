<?php

/*Log example with array argument */

require_once('../PHPLog.php');

/*Params*/
$name = 'example2';
$data= ['test', 'with', 'array'];

/*Usage*/
PHPLog::$PATH = dirname(__FILE__).'/logs';
PHPLog::getLogger($name)->log($data,"123","456");
