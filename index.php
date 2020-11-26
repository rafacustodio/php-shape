<?php
require_once __DIR__ . '/vendor/autoload.php';

use Polymorph\Circle;
use Polymorph\Rectangle;
use Polymorph\Shape;

if (isset($argv[1]) && isset($argv[2]) && isset($argv[3]) && isset($argv[4])) {
    switch ($argv[1])
    {
        case "rectangle":
            if (!is_numeric($argv[3]) || !is_numeric($argv[4])) {
                echo "Length/Width must be a float" . PHP_EOL;
                exit;
            }
            $rect = new Rectangle($argv[3], $argv[4]);
            $rect->setName($argv[2]);
            echo $rect->toString() . PHP_EOL;
            echo "Type: " . Rectangle::getShapeType() . PHP_EOL;
            echo "Area: " . $rect->getArea() . PHP_EOL;
            break;

        case "shape":
            if (!is_numeric($argv[3]) || !is_numeric($argv[4])) {
                echo "Length/Width must be a float" . PHP_EOL;
                exit;
            }
            $rect = new Shape($argv[3], $argv[4]);
            $rect->setName($argv[2]);
            echo $rect->toString() . PHP_EOL;
            echo "Type: " . Shape::getShapeType() . PHP_EOL;
            echo "Area: " . $rect->getArea() . PHP_EOL;
            break;
    }
} else if (isset($argv[1]) && isset($argv[2]) && isset($argv[3])) {
    switch ($argv[1])
    {
        case "circle":
            if (!is_numeric($argv[3])) {
                echo "Radius must be a float" . PHP_EOL;
                exit;
            }
            $rect = new Circle($argv[3]);
            $rect->setName($argv[2]);
            echo $rect->toString() . PHP_EOL;
            echo "Type: " . Circle::getShapeType() . PHP_EOL;
            echo "Area: " . $rect->getArea() . PHP_EOL;
            break;
    }
} else {
    echo "Available form of use \"php index.php shape[rectangle/shape] name length width\" or \"php index.php shape[circle] radius\"" . PHP_EOL;
}