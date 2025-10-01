<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
// use App\Pdo\Database;
// use App\Eloquent\Models\Post;
// use App\Eloquent\Models\User;
// use App\Doctrine\Entity\User;
// use App\Doctrine\Entity\Post;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

// require_once __DIR__ . '/Eloquent/bootstrap.php';
// require_once __DIR__ . '/Doctrine/bootstrap.php';

// ##############################
// ## 3.1 Задание 1:
// ##############################

// $db = new Database();
// echo $db->connect(); // ✅ "Подключение успешно"

// ##############################
// ## 3.1 Задание 2:
// ##############################

// $db = new Database();
// print_r($db->getUsers()); // ✅ Выводит массив пользователей из БД

// ##############################
// ## 3.1 Задание 3:
// ##############################

// $db = new Database();
// $db->addUser('Иван', 'ivan@example.com');
// print_r($db->getUsers()); // ✅ В списке появился "Иван"

// ##############################
// ## 3.1 Задание 4:
// ##############################

// $db = new Database();
// $db->addUser("Алексей', 'hacked@example.com'); DROP TABLE users; --", 'hacker@example.com');  
// print_r($db->getUsers()); // ✅ Таблица `users` НЕ удалена

// ##############################
// ## 3.1 Задание 5:
// ##############################

// $db = new Database();
// $db->deleteUser(1);
// print_r($db->getUsers()); // ✅ Пользователь с ID 1 удален

// ##############################
// ##############################
// ##############################

// ##############################
// ## 3.2 Задание 1:
// ##############################

// $db = new Database();
// print_r($db->getUserByEmail('ivan@example.com'));              // ✅ Выводит данные пользователя
// print_r($db->getUserByEmail("hacker@example.com' OR 1=1 --")); // ✅ Не должно возвращать всех пользователей

// ##############################
// ## 3.2 Задание 2:
// ##############################

// $db = new Database();
// $db->addUser("Алексей', 'hacked@example.com'); DROP TABLE users; --", 'hacker@example.com', '123456');  
// print_r($db->getUsers()); // ✅ Таблица `users` НЕ удалена

// ##############################
// ## 3.2 Задание 3:
// ##############################

// $db = new Database();
// $db->deleteUser("11 OR 1=1");
// print_r($db->getUsers()); // ✅ Удаляется только пользователь с ID 1, а не все записи

// ##############################
// ## 3.2 Задание 4:
// ##############################

// $db = new Database();
// $db->addUser('Oleg', 'oleg@example.com', 'password');
// print_r($db->getUserByEmail('oleg@example.com')); // ✅ Пользователь найден, SQL-инъекция невозможна

// ##############################
// ## 3.2 Задание 5:
// ##############################

// $db = new Database();
// print_r($db->getUserByEmail('invalid email')); // ✅ Должна быть ошибка "Неверный формат email"

// ##############################
// ##############################
// ##############################

// ##############################
// ## 3.3 Задание 1:
// ##############################

// $user = new User();
// $user->name = 'Иван';
// $user->email = 'ivan@example.com';
// $user->password = 'secret';
// $user->save(); // ✅ Данные сохранены в базе

// ##############################
// ## 3.3 Задание 2:
// ##############################

// $post = Post::find(4);
// echo $post?->user->name; // ✅ Выводит имя автора поста

// ##############################
// ## 3.3 Задание 3:
// ##############################

// $user = new User();
// $user->setName('Анна');
// $user->setEmail('anna@example.com');
// $user->setPassword('secret');
// $entityManager->persist($user);
// $entityManager->flush();  // ✅ Пользователь добавлен в БД

// ##############################
// ## 3.3 Задание 4:
// ##############################

// $userRepository = $entityManager->getRepository(User::class);

// $user = $userRepository->findByEmail('ivan@example.com');
// print_r($user); // ✅ Выводит данные пользователя Иван

// ##############################
// ## 3.3 Задание 5:
// ##############################

// $post = $entityManager->getRepository(Post::class)->find(1);
// echo $post?->getUser()->getName(); // ✅ Выводит имя автора поста
