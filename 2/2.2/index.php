<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');

interface Payable
{
    public function pay(int $amount): void;
}

class BankAccount implements Payable
{
    protected int $balance;

    public function __construct(int $balance)
    {
        $this->balance = $balance;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function deposit(int $amount): void
    {
        $this->balance += $amount;
    }

    public function withdraw(int $amount)
    {
        if ($amount > $this->balance) {
            echo 'Ошибка: недостаточно средств';
            return false;
        }

        $this->balance -= $amount;
        return true;
    }

    public function pay(int $amount): void
    {
        if ($this->withdraw($amount)) echo "Баланс уменьшился на $amount";
    }
}

class SavingsAccount extends BankAccount
{
    protected int $interestRate;

    public function __construct(int $balance, int $interestRate)
    {
        parent::__construct($balance);

        $this->interestRate = $interestRate;
    }

    public function applyInterestRate()
    {
        $this->balance += ($this->balance * $this->interestRate / 100);
    }
}

class CreditAccount extends BankAccount
{
    public function withdraw(int $amount)
    {
        $this->balance -= $amount;
    }

    public function pay(int $amount): void
    {
        $this->withdraw($amount);
        echo "Баланс ушел в {$this->getBalance()}";
    }
}

// ###############
// ## Задание 1:
// ###############

// $account = new BankAccount(1000);
// $account->deposit(500);
// echo $account->getBalance(); // ✅ 1500

// $account->withdraw(300);
// echo $account->getBalance(); // ✅ 1200

// $account->withdraw(5000); // ❌ Ошибка: недостаточно средств

// $account->withdraw(1200);
// echo $account->getBalance(); // ✅ 0

// ###############
// ## Задание 2:
// ###############

// $savings = new SavingsAccount(1000, 5);
// $savings->applyInterestRate();
// echo $savings->getBalance(); // ✅ 1050

// ###############
// ## Задание 3:
// ###############

// $credit = new CreditAccount(1000);
// $credit->withdraw(1500);
// echo $credit->getBalance(); // ✅ -500 (допустимый минус)

// ###############
// ## Задание 4:
// ###############

// $bank = new BankAccount(500);
// $bank->pay(200); // ✅ Баланс уменьшился на 200

// $credit = new CreditAccount(500);
// $credit->pay(700); // ✅ Баланс ушел в -200 (кредитный лимит)
