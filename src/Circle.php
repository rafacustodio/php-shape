<?php namespace Polymorph;

class Circle extends Shape
{
    const SHAPE_TYPE = 3;

    protected float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getArea() : float
    {
        return pi() * pow($this->radius, 2);
    }

    public function toString(): string
    {
        return sprintf(
            "id: %s - name: %s - radius %.4f",
            $this->id,
            $this->name,
            $this->radius
        );
    }
}