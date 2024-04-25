<?php

require_once __DIR__ . "/vendor/autoload.php";

use Christian\Data\People;

$people = new People("Christian");

echo $people->sayHello("Budi") . PHP_EOL;