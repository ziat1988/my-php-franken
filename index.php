<?php
require __DIR__ . "/vendor/autoload.php";
use Dang\DemoFranken\Person;

$p = new Person(name: "dang", age: 36); // name parameter in php 8

$p->greeting();
//echo $p->age . PHP_EOL;
//echo $p->test;
