<?php

/**
 * Setup autoloading
 */
require_once __DIR__ . '/../vendor/autoload.php';

//set_include_path(get_include_path() . PATH_SEPARATOR . realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . ".." ));

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'integration/TestData/TestCreditCard.php');
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'integration/TestData/TestCardHolder.php');
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'integration/TestData/TestServicesConfig.php');
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'integration/TestData/TestCheck.php');
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'integration/TestData/TestGiftCard.php');
