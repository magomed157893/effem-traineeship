<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(User::all(), 200, [], JSON_PRETTY_PRINT);
});
