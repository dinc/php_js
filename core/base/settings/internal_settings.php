<?php

defined('VG_ACCESS') or die('Access denied');

const  TEMPLATE = 'templates/default/';
const ADMIN_TEMPLATE = 'core/admin/views/';

const COKIE_VERSION = '1.0.0';
const CRYPT_KEY = '';
const COOKE_TIME = 60;
const BLOCK_TIME = 3;

const QTY = 8;
const QTY_LINKS = 3;

const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => []
];

const USER_CSS_JS = [
    'styles' => [],
    'scripts' => []
];


//use core\base\exceptions\RouteException;     // Will the file be used in its own?

function autoloadMainClasses($class_name)
{
//    $class_name = str_replace('\\', '/', $class_name);   // need or not
    if (!@include_once $class_name . '.php') {
        throw new RouteException('invalid filename to connect - ' . $class_name);
    }
}

spl_autoload_register('autoloadMainClasses');