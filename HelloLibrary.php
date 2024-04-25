<?php

require_once __DIR__ . "/vendor/autoload.php";

$customer = new \Christian\Belajar\Customer("Christian");

$customer->sayHello("Michael");
echo PHP_EOL;
$customer->sayHello();