<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// ###############
// ## Задание 1:
// ###############

function greetUser(string $name, string $lang = 'ru'): string
{
    return match ($lang) {
        'ru' => "Привет, $name!",
        'en' => "Hello, $name!"
    };
}

// echo greetUser('Иван');       // ✅ "Привет, Иван!"
// echo greetUser('John', 'en'); // ✅ "Hello, John!"

// ###############
// ## Задание 2:
// ###############

function calculateDiscount(int|float $price, int|float $discount = 10): int|float
{
    return $price - ($price * $discount / 100);
}

// echo calculateDiscount(price: 1000);               // ✅ Ожидаемый результат: 900
// echo calculateDiscount(price: 2000, discount: 20); // ✅ Ожидаемый результат: 1600

// ###############
// ## Задание 3:
// ###############

function orderPizza(string $size = 'medium', string $crust = 'thin', array $toppings = ['cheese']): string
{
    return match ($crust) {
        'thin'  => 'Заказ: ' . $size . ' пицца на тонком тесте с ' . implode(', ', $toppings),
        'thick' => 'Заказ: ' . $size . ' пицца на толстом тесте с ' . implode(', ', $toppings)
    };
}

// echo orderPizza(toppings: ['cheese', 'pepperoni']); // ✅ "Заказ: medium пицца на тонком тесте с cheese, pepperoni"
// echo orderPizza(size: 'large', crust: 'thick');     // ✅ "Заказ: large пицца на толстом тесте с cheese"

// ###############
// ## Задание 4:
// ###############

function formatText(string $text, bool $uppercase = false): string
{
    if ($uppercase) return strtoupper($text);

    return $text;
}

// echo formatText('hello');       // ✅ "hello"
// echo formatText('hello', true); // ✅ "HELLO"

// ###############
// ## Задание 5:
// ###############

function generatePassword(int $length = 8, bool $includeNumbers = true, bool $includeSpecialChars = false): string
{
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specials = '!@#$%^&*()_+-=[]{}|;:,.<>?';

    $chars = $letters;
    if ($includeNumbers) $chars .= $numbers;
    if ($includeSpecialChars) $chars .= $specials;

    $password = '';
    $maxIndex = strlen($chars) - 1;

    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[random_int(0, $maxIndex)];
    }

    return $password;
}

// echo generatePassword();                                      // ✅ Должен быть 8-значный пароль с цифрами.
// echo generatePassword(length: 12, includeSpecialChars: true); // ✅ Должен быть 12-значный пароль с цифрами и спецсимволами.
