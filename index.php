<?php

define('VG_ACCESS', true);

header('Content-Type:text/html;charset=utf-8');
session_start();

require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';
class D {
   public $a = 5;
}
use xxxcc\RouteException;
$k = new D;
$c = 1;
$a = new RouteException();
$b = 1;
try {
    (new A());
} catch (RouteException $e) {
    exit($e->getMessage());
}

class A
{
    public function __construct()
    {
        (new B());
    }
}

class B
{
    public function __construct()
    {
        (new C());
    }
}

class C
{
     public function __construct()
    {
        throw new RouteException('error');
    }
}


