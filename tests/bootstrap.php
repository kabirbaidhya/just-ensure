<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

define('TEST_PATH', __DIR__ . '/');

$loader = require TEST_PATH . '/../vendor/autoload.php';
$loader->addPsr4('Test\\Just\\Ensure\\', TEST_PATH . '/Ensure');
