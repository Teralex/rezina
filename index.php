<?php

if ( defined('STDIN') ) die("This script should be run by server\n");
if ( get_magic_quotes_gpc() ) die('<b>ERROR:</b> magic_quotes_gpc must be disabled');
if ( empty($_SERVER['REQUEST_METHOD']) || !in_array($_SERVER['REQUEST_METHOD'], array('GET', 'POST')) ) exit;

define('PATH_ROOT', dirname(__FILE__).'/');
define('PATH_LOG', PATH_ROOT.'var/log/');

require_once PATH_ROOT.'conf.php';
require_once PATH_ROOT.'lib/Core.php';
include PATH_LIB.'Controllers.php';

function D($var, $exit = 0)
{
    print '<div style="background-color: #ffffff; padding: 3px; z-index: 1000;"><pre style="text-align: left; font: normal 10px Courier; color: #000000;">';
    if ( is_array($var) || is_object($var) ) print_r($var);
    else var_dump($var);
    print '</pre></div>';
    if ( $exit ) exit;
}

$result = new Controllers();
$result ->URL();
$result ->Data();
$result ->View();
