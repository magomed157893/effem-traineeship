<?php

namespace App\Traits;

trait Logger
{
    public function log(string $message): void
    {
        var_dump("[LOG]: $message");
    }
}
