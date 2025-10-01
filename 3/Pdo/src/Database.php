<?php

namespace App\Pdo;

class Database
{
    private ?\PDO $conn = null;

    public function __construct()
    {
        $config = [
            'host'    => $_ENV['DB_HOST'],
            'port'    => 3306,
            'dbname'  => $_ENV['DB_NAME'],
            'charset' => 'utf8mb4'
        ];

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];

        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false
        ];

        try {
            $this->conn = new \PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            $this->conn = null;
        }
    }

    public function connect(): string
    {
        if ($this->conn) return 'Подключение успешно';

        return 'Ошибка подключения';
    }

    public function getUsers(): array
    {
        $stmt = $this->conn->prepare('SELECT * FROM users');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getUserByEmail(string $email): mixed
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'Неверный формат email';
        }

        $stmt = $this->conn->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function addUser(string $name, string $email, string $password = ''): void
    {
        try {
            $stmt = $this->conn->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':password', $password);
            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function deleteUser(int|string $id): void
    {
        try {
            $stmt = $this->conn->prepare('DELETE FROM users WHERE id = :id');
            $stmt->bindValue(':id', $id);
            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
