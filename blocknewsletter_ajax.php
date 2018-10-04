<?php

require_once(dirname(__FILE__).'/../../config/config.inc.php');

/** @var BlockNewsletter $module */
$module = Module::getInstanceByName('blocknewsletter');

$response = array(
    'status' => 0,
);

if ($module && method_exists($module, 'ajaxProcessRegistration')) {
    $response = $module->ajaxProcessRegistration();
}

header('Content-Type: application/json');
die(Tools::jsonEncode($response));
