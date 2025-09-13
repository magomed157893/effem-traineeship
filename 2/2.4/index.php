<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// ###############
// ## Задание 1:
// ###############

// require(__DIR__ . '/app/Models/User.php');

// $user = new App\Models\User('Иван');
// echo $user->getName(); // ✅ "Иван"

// ###############
// ## Задание 2:
// ###############

// require_once(__DIR__ . '/vendor/autoload.php');

// $user = new App\Models\User('Анна');
// echo $user->getName(); // ✅ "Анна"

// ###############
// ## Задание 3:
// ###############

// require_once(__DIR__ . '/vendor/autoload.php');

// $service = new App\Services\UserService();
// echo $service->getUserGreeting('Олег'); // ✅ "Привет, Олег!"

// ###############
// ## Задание 4:
// ###############

// require_once(__DIR__ . '/vendor/autoload.php');

// $service = new App\Services\UserService();
// echo $service->getUserGreeting('Мария'); // ✅ "Привет, Мария!"

// ###############
// ## Задание 5:
// ###############

// require_once(__DIR__ . '/vendor/autoload.php');

// $order = new App\Models\Order();
// $order->log('Заказ создан'); // ✅ "[LOG]: Заказ создан"
