<?php

require_once("../vendor/autoload.php");

$visitor = new \App\Visitor();
$visitor->visit();
$developer = new \App\Developer("Jeff", 20, [5, 4, 5, 4]);
$developer->work();
$developer->setPosition("Генерал");
var_dump($developer);

print_r($developer->getPosition()."\n");
$developer->rest();

print_r(\App\Salary::count($developer->hours));
print(\App\Salary::$totalHours."\n");

$s = new \App\Salary();
$s::$totalHours += 1000;
print($s::$totalHours."\n");

print_r((string)$developer);

$developer->draw(50);
$developer->draw();

var_dump(serialize($developer));
var_dump(unserialize(serialize($developer)));

$developer(13);
var_dump($developer);

$developer2 = clone $developer;
$developer = null;

var_dump(method_exists($developer2, "work"));
var_dump(property_exists($developer2, "hours"));
var_dump(class_exists('App\Robot'));
var_dump(get_class_vars('App\Developer'));
