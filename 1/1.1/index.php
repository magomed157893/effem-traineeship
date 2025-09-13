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

// echo getStatusMessage('success'); // ✅ "Операция выполнена успешно"
// echo getStatusMessage('error');   // ✅ "Произошла ошибка"
// echo getStatusMessage('pending'); // ✅ "Операция в ожидании"
// echo getStatusMessage('unknown'); // ❌ "Неизвестный статус"

// ###############
// ## Задание 2:
// ###############

function calculatePrice(int|float $basePrice, int|float $discount, int|float $tax): int|float
{
    $basePrice += ($basePrice * $tax / 100);
    return $basePrice - ($basePrice * $discount / 100);
}

// echo calculatePrice(basePrice: 1000, discount: 10, tax: 5); // ✅ 945
// echo calculatePrice(tax: 5, discount: 10, basePrice: 2000); // ✅ 1890

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
// echo $user->name; // ✅ "Иван"
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

// echo getDeliveryMessage(OrderStatus::Pending);   // ✅ "Заказ в ожидании"
// echo getDeliveryMessage(OrderStatus::Shipped);   // ✅ "Заказ отправлен"
// echo getDeliveryMessage(OrderStatus::Delivered); // ✅ "Заказ доставлен"

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

// echo getUserEmail($user); // ✅ "test@example.com"

// $user = (object)[
//     'profile' => null
// ];

// echo getUserEmail($user); // ✅ "Email не найден"
