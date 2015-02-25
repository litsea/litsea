<?php

error_reporting(-1);

define('LITSEA_DEBUG', true);

$_SERVER['SCRIPT_NAME'] = '/' . __DIR__;
$_SERVER['SCRIPT_FILENAME'] = __FILE__;

require_once(__DIR__ . '/../../vendor/autoload.php');