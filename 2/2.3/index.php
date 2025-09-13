<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');

interface Drawable
{
    public function draw(): void;
}

abstract class Shape implements Drawable
{
    abstract public function getArea(): int|float;
}

class Rectangle extends Shape
{
    private int|float $width;
    private int|float $height;

    public function __construct(int|float $width, int|float $height)
    {
        $this->width  = $width;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return round($this->width * $this->height, 2);
    }

    public function draw(): void
    {
        var_dump("Рисую прямоугольник шириной $this->width и высотой $this->height");
    }
}

class Circle extends Shape
{
    private int|float $radius;

    public function __construct(int|float $radius)
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return round(M_PI * ($this->radius * $this->radius), 2);
    }

    public function draw(): void
    {
        var_dump("Рисую круг радиусом $this->radius");
    }
}

// ###############
// ## Задание 1:
// ###############

// $rect = new Rectangle(10, 5);
// var_dump($rect->getArea()); // ✅ 50

// $circle = new Circle(7);
// var_dump($circle->getArea()); // ✅ 153.94 (пример для π * r²)

// ###############
// ## Задание 2:
// ###############

// $rect = new Rectangle(10, 5);
// $rect->draw(); // ✅ "Рисую прямоугольник шириной 10 и высотой 5"

// $circle = new Circle(7);
// $circle->draw(); // ✅ "Рисую круг радиусом 7"

// ###############
// ## Задание 3:
// ###############

function renderShape(Shape $shape)
{
    $shape->draw();
    var_dump("Площадь: {$shape->getArea()}");
}

// renderShape(new Rectangle(5, 5));  
// // ✅ "Рисую прямоугольник шириной 5 и высотой 5"
// // ✅ "Площадь: 25"

// renderShape(new Circle(3));  
// // ✅ "Рисую круг радиусом 3"
// // ✅ "Площадь: 28.27"

// ###############
// ## Задание 4:
// ###############

interface Fuelable
{
    public function refuel(): void;
}

abstract class Vehicle
{
    abstract public function move(): void;
}

class Car extends Vehicle implements Fuelable
{
    public function move(): void
    {
        var_dump('Машина едет');
    }

    public function refuel(): void
    {
        var_dump('Машина заправлена');
    }
}

class Bike extends Vehicle
{
    public function move(): void
    {
        var_dump('Велосипед едет');
    }
}

// $car = new Car();
// $car->move();   // ✅ "Машина едет"
// $car->refuel(); // ✅ "Машина заправлена"

// $bike = new Bike();
// $bike->move(); // ✅ "Велосипед едет"
