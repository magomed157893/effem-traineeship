<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');

interface Movable
{
    public function move();
}

class Bicycle implements Movable
{
    public function move(): string
    {
        return 'Велосипед движется';
    }
}

trait Loggable
{
    public function log(string $message): void
    {
        var_dump("[LOG]: $message");
    }
}

class Car implements Movable
{
    use Loggable;

    private string $brand;
    private string $model;
    private int    $year;

    public function __construct(string $brand, string $model, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year  = $year;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getCarInfo(): string
    {
        return "$this->brand $this->model, $this->year";
    }

    public function move()
    {
        return 'Машина едет';
    }
}

class ElectricCar extends Car
{
    private int $batteryCapacity;

    public function __construct(string $brand, string $model, int $year, int $batteryCapacity)
    {
        parent::__construct($brand, $model, $year);

        $this->batteryCapacity = $batteryCapacity;
    }

    public function getBatteryInfo(): string
    {
        return "Батарея: $this->batteryCapacity kWh";
    }
}

// ###############
// ## Задание 1:
// ###############

// $car = new Car('Toyota', 'Camry', 2020);
// var_dump($car->getCarInfo()); // ✅ "Toyota Camry, 2020"

// ###############
// ## Задание 2:
// ###############

// $car = new Car('Toyota', 'Camry', 2020);
// $car->setYear(2022);
// var_dump($car->getYear()); // ✅ 2022

// ###############
// ## Задание 3:
// ###############

// $tesla = new ElectricCar('Tesla', 'Model S', 2021, 100);
// var_dump($tesla->getCarInfo()); // ✅ "Батарея: 100 kWh"

// ###############
// ## Задание 4:
// ###############

// $car = new Car('Ford', 'Focus', 2019);
// var_dump($car->move()); // ✅ "Машина едет"

// $bike = new Bicycle();
// var_dump($bike->move()); // ✅ "Велосипед движется"

// ###############
// ## Задание 5:
// ###############

// $car = new Car('Ford', 'Focus', 2019);
// $car->log('Запущен двигатель'); // ✅ "[LOG]: Запущен двигатель"
