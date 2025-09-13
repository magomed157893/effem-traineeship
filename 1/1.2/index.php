<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// ###############
// ## Задание 1:
// ###############

function multiply(int|float $a, int|float $b): int|float
{
    return $a * $b;
}

// echo multiply(3, 2);   // ✅ Ожидаемый результат: 6
// echo multiply(3.5, 2); // ✅ Ожидаемый результат: 7.0
// echo multiply('3', 2); // ❌ Должна быть ошибка TypeError

// ###############
// ## Задание 2:
// ###############

function isAdult(int $age): bool
{
    return $age >= 18 ? true : false;
}

// echo isAdult(20);   // ✅ true
// echo isAdult(17);   // ✅ false
// echo isAdult('20'); // ❌ Должна быть ошибка TypeError

function calculateTax(float $price, float $tax): string
{
    $price += ($price * $tax);
    return number_format($price, 2);
}

// calculateTax(100, 0.2);    // ✅ Ожидаемый результат: 120.00
// calculateTax(50, 0.15);    // ✅ Ожидаемый результат: 57.50
// calculateTax(99.99, 0.05); // ✅ Ожидаемый результат: 104.99

function getNamesLength(array $strings): array
{
    $result = [];
    foreach ($strings as $string) {
        if (!is_string($string)) {
            throw new TypeError('только строки разрешены');
        }
        $result[] = strlen($string);
    }
    return $result;
}

// print_r(getNamesLength(['Alice', 'Bob', 'Charlie'])); // ✅ Ожидаемый результат: [5, 3, 7]
// print_r(getNamesLength([123, 'Bob', 'Charlie']));     // ❌ Должна быть ошибка TypeError (только строки разрешены)

function formatValue(int|float|string $value): string
{
    return (string)$value;
}

// echo formatValue(100);     // ✅ "100"
// echo formatValue(99.99);   // ✅ "99.99"
// echo formatValue("hello"); // ✅ "hello"
// echo formatValue(true);    // ❌ Должна быть ошибка TypeError
