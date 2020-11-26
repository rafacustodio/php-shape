<?php declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use Polymorph\Circle;
use Polymorph\Rectangle;
use Polymorph\Shape;

final class TestShapes extends TestCase
{
    public function testShapeArea(): void
    {
        $length = (float) rand(1, 100);
        $width = (float) rand(1, 100);
        $shape = new Shape($length, $width);
        $this->assertSame($shape->getArea(), $length * $width);
    }

    public function testRectArea(): void
    {
        $length = (float) rand(1, 100);
        $width = (float) rand(1, 100);
        $rect = new Rectangle($length, $width);
        $this->assertSame($rect->getArea(), $length * $width);
    }

    public function testCircleArea(): void
    {
        $radius = (float) rand(1, 100);
        $circle = new Circle($radius);
        $this->assertSame($circle->getArea(), pi() * pow($radius, 2));
    }

    public function testShapeType(): void
    {
        $this->assertSame(Shape::getShapeType(), 1);
        $this->assertSame(Rectangle::getShapeType(), 2);
        $this->assertSame(Circle::getShapeType(), 3);
    }

    public function testCircleMock(): void
    {
        $radius = (float) rand(1, 100);

        $mock = $this->getMockBuilder(Circle::class)
            ->setConstructorArgs([$radius])
            ->setMethods(["getArea"])
            ->getMock();

        $mock->expects($this->once())
            ->method("getArea")
            ->will($this->returnValue((float) pi() * pow($radius, 2)));

        $mock->getArea();
    }

    public function testRectMock(): void
    {
        $length = (float) rand(1, 100);
        $width = (float) rand(1, 100);

        $mock = $this->getMockBuilder(Rectangle::class)
            ->setConstructorArgs([$length, $width])
            ->setMethods(["getArea"])
            ->getMock();

        $mock->expects($this->once())
            ->method("getArea")
            ->will($this->returnValue((float) $length * $width));

        $mock->getArea();
    }

    public function testShapeMock(): void
    {
        $length = (float) rand(1, 100);
        $width = (float) rand(1, 100);

        $mock = $this->getMockBuilder(Shape::class)
            ->setConstructorArgs([$length, $width])
            ->setMethods(["getArea"])
            ->getMock();

        $mock->expects($this->once())
            ->method("getArea")
            ->will($this->returnValue((float) $length * $width));

        $mock->getArea();
    }
}