<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// ###############
// ## Задание 1:
// ###############

function getStatusMessage(string $status): string
{
    return match ($status) {
        'success' => 'Операция выполнена успешно',
        'error'   => 'Произошла ошибка',
        'pending' => 'Операция в ожидании',
        default   => 'Неизвестный статус'
    };
}

// var_dump(getStatusMessage('success')); // ✅ "Операция выполнена успешно"
// var_dump(getStatusMessage('error'));   // ✅ "Произошла ошибка"
// var_dump(getStatusMessage('pending')); // ✅ "Операция в ожидании"
// var_dump(getStatusMessage('unknown')); // ❌ "Неизвестный статус"

// ###############
// ## Задание 2:
// ###############

function calculatePrice(int|float $basePrice, int|float $discount, int|float $tax): int|float
{
    $basePrice += ($basePrice * $tax / 100);
    return $basePrice - ($basePrice * $discount / 100);
}

// var_dump(calculatePrice(basePrice: 1000, discount: 10, tax: 5)); // ✅ 945
// var_dump(calculatePrice(tax: 5, discount: 10, basePrice: 2000)); // ✅ 1890

// ###############
// ## Задание 3:
// ###############

class User
{
    public function __construct(
        public readonly int    $id,
        public readonly string $name,
        public readonly string $email
    ) {}
}

// $user = new User(1, 'Иван', 'ivan@example.com');
// var_dump($user->name); // ✅ "Иван"
// $user->name = 'Петр';  // ❌ Ошибка! Свойство `readonly`

// ###############
// ## Задание 4:
// ###############

enum OrderStatus
{
    case Pending;
    case Shipped;
    case Delivered;
}

function getDeliveryMessage(OrderStatus $status): string
{
    return match ($status) {
        OrderStatus::Pending   => 'Заказ в ожидании',
        OrderStatus::Shipped   => 'Заказ отправлен',
        OrderStatus::Delivered => 'Заказ доставлен'
    };
}

// var_dump(getDeliveryMessage(OrderStatus::Pending));   // ✅ "Заказ в ожидании"
// var_dump(getDeliveryMessage(OrderStatus::Shipped));   // ✅ "Заказ отправлен"
// var_dump(getDeliveryMessage(OrderStatus::Delivered)); // ✅ "Заказ доставлен"

// ###############
// ## Задание 5:
// ###############

function getUserEmail(object $user): string
{
    return $user?->profile?->email ?? 'Email не найден';
}

// $user = (object)[
//     'profile' => (object)[
//         'email' => 'test@example.com'
//     ]
// ];

// var_dump(getUserEmail($user)); // ✅ "test@example.com"

// $user = (object)[
//     'profile' => null
// ];

// var_dump(getUserEmail($user)); // ✅ "Email не найден"
