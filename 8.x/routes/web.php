<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get("/", [UserController::class, "showLogin"])->name("login");
Route::post("/login", [UserController::class, "login"]);

Route::get("/register", [UserController::class, "showRegister"]);
Route::post("/register", [UserController::class, "register"]);

Route::get("/page1", [UserController::class, "page1"]);
Route::post("/logout", [UserController::class, "logout"]);

?>