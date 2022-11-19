<?php

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

Route::get("/panel", function () {
    return view("dashboard.index");
})->name("dashboard");
