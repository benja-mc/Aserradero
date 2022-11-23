<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MaderaController;
use App\Http\Controllers\ProductoController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("index");
})->name("index");

Route::get("/contacto", function () {
    return view("contacto");
})->name("contacto");

Route::get("/nosotros", function () {
    return view("nosotros");
})->name("nosotros");

Route::get("/consulta", function () {
    return view("consulta");
})->name("consulta");

Route::get("/servicios", function () {
    return view("servicios");
})->name("servicios");

Route::get("/proyectos", function () {
    return view("proyectos");
})->name("proyectos");



Route::group(["prefix" => "panel"], function () {

    Route::get("/login", function () {
        return view("dashboard.login");
    })->name("login");

    Route::group(["middleware" => "auth"], function () {
        Route::get("/", function () {
            return view("dashboard.index");
        })->name("dashboard");

        Route::get("/users", function () {
            return view("dashboard.users")->with("users", User::all());
        })->name("dashboard.users");

        Route::resource('/madera', MaderaController::class);
        Route::resource('/producto', ProductoController::class);
        Route::resource('/cliente', ClienteController::class);
    });
});
