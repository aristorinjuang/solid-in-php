<?php

namespace main;

spl_autoload_register(function($className) {
	require_once __DIR__ . '/' . str_replace("\\", DIRECTORY_SEPARATOR, $className) . '.php';
});

use Shape\Equilateral\Circle;
use Shape\Equilateral\Non\Rectangle;
use Shape\Equilateral\Square;
use User\Memory\Memory;
use User\Guest;
use User\Premium\Member;

$s1 = new Circle();
$s1->setA(5);
echo '$s1->area() ' . $s1->area() . PHP_EOL;

$s2 = new Square();
$s2->setA(4);
echo '$s2->area() ' . $s2->area() . PHP_EOL;

$db = new Memory();

$u1 = new Guest($db);
$u1->addShape($s1);
$u1->addShape($s2);

echo '$u1->averageShapeArea() ' . $u1->averageShapeArea() . PHP_EOL;
echo '$u1->shapeAreas() ' . $u1->shapeAreas() . PHP_EOL;

$s3 = new Rectangle();
$s3->setA(6);
$s3->setB(7);
echo '$s3->area() ' . $s3->area() . PHP_EOL;
echo '$s3->perimeter() ' . $s3->perimeter() . PHP_EOL;

$u2 = new Member($db);
$u2->addShape($s1);
$u2->addShape($s2);
$u2->addShape($s3);

echo '$u2->averageShapeArea() ' . $u2->averageShapeArea() . PHP_EOL;
echo '$u2->shapeAreas() ' . $u2->shapeAreas() . PHP_EOL;
echo '$u2->averageShapePerimeter() ' . $u2->averageShapePerimeter() . PHP_EOL;
echo '$u2->shapePerimeters() ' . $u2->shapePerimeters() . PHP_EOL;
