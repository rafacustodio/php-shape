<?php namespace Polymorph;

class Shape
{
    const SHAPE_TYPE = 1;
    private string $id;
    public string $name;
    protected float $length;
    protected float $width;

    public function __construct(float $length, float $width)
    {
        $this->id = uniqid();
        $this->length = $length;
        $this->width = $width;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getArea() : float
    {
        return $this->length * $this->width;
    }

    public function toString(): string
    {
        return sprintf(
            "id: %s - name: %s - length %.2f - width %.2f",
            $this->id,
            $this->name,
            $this->length,
            $this->width
        );
    }

    public static function getShapeType()
    {
        return static::SHAPE_TYPE;
    }
}