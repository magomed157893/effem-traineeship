<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// ###############
// ## Задание 1:
// ###############

function checkNumber(int $number): string
{
    if ($number > 0) {
        return 'Положительное';
    }
    if ($number < 0) {
        return 'Отрицательное';
    }

    return 'Ноль';
}

// echo checkNumber(10); // ✅ "Положительное"
// echo checkNumber(-5); // ✅ "Отрицательное"
// echo checkNumber(0);  // ✅ "Ноль"

// ###############
// ## Задание 2:
// ###############

function getAgeCategory(int $age): string
{
    return match (true) {
        $age <= 12 => 'Ребенок',
        $age <= 17 => 'Подросток',
        $age <= 64 => 'Взрослый',
        default    => 'Пожилой'
    };
}

// echo getAgeCategory(8);  // ✅ "Ребенок"
// echo getAgeCategory(15); // ✅ "Подросток"
// echo getAgeCategory(30); // ✅ "Взрослый"
// echo getAgeCategory(70); // ✅ "Пожилой"

// ###############
// ## Задание 3:
// ###############

function printNumbers(int $n): void
{
    for ($i = 1; $i <= $n; $i++) {
        echo $i . '<br />';
    }
}

// printNumbers(5); // ✅ Ожидаемый результат:
// 1
// 2
// 3
// 4
// 5

// ###############
// ## Задание 4:
// ###############

function factorial(int $n): int
{
    $factorial = 1;

    while ($n > 1) {
        $factorial *= $n;
        $n--;
    }

    return $factorial;
}

// echo factorial(5); // ✅ 120
// echo factorial(3); // ✅ 6
// echo factorial(1); // ✅ 1
// echo factorial(0); // ✅ 1

// ###############
// ## Задание 5:
// ###############

function printArrayItems(array $items): void
{
    foreach ($items as $item) {
        echo $item . '<br />';
    }
}

// printArrayItems(['apple', 'banana', 'cherry']); // ✅ Ожидаемый результат:
// apple
// banana
// cherry

// ###############
// ## Задание 6:
// ###############

function printEvenNumbers(int $n): void
{
    while ($n > 0) {
        if ($n % 2 === 0) {
            echo $n . '<br />';
        }

        $n--;
    }
}

// printEvenNumbers(10); // ✅ Ожидаемый результат:
// 2
// 4
// 6
// 8
// 10
