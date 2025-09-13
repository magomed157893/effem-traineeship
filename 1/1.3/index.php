<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// ###############
// ## Задание 1:
// ###############

function filterEvenNumbers(array $numbers): array
{
    return array_filter($numbers, fn(int $number) => $number % 2 === 0);
}

// print_r(filterEvenNumbers([1, 2, 3, 4, 5, 6])); // ✅ Ожидаемый результат: [2, 4, 6]
// print_r(filterEvenNumbers([11, 15, 21]));       // ✅ Ожидаемый результат: []

function squareNumbers(array $numbers): array
{
    return array_map(fn(int $number) => $number ** 2, $numbers);
}

// print_r(squareNumbers([1, 2, 3, 4])); // ✅ Ожидаемый результат: [1, 4, 9, 16]
// print_r(squareNumbers([-2, 5, 10]));  // ✅ Ожидаемый результат: [4, 25, 100]

$users = [
    ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
    ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com']
];

function getUserEmails(array $users): array
{
    return array_map(fn(array $user) => $user['email'], $users);
}

// print_r(getUserEmails($users)); // ✅ Ожидаемый результат: ["alice@example.com", "bob@example.com"]
