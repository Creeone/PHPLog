<?php

/*Log example with more than one argument */

require_once('../PHPLog.php');

/*Params*/
$name = 'example1';
$data= 'my first log';

/*Usage*/
PHPLog::$PATH = dirname(__FILE__).'/logs';
PHPLog::getLogger($name)->log($data,"123","456");
