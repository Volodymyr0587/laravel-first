<?php

use App\Http\Controllers\DogController;
use App\Models\Dog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test', ['name' => 'Volodymyr']);
});

Route::get('test/{name}', function($name) {
    return view('test', ['name' => $name]);
});

Route::get('/newdog', function () {
    return view('newdog');
});

Route::post('/dogs', [DogController::class, 'create'])->name('dog.create');
Route::get('/dogs', function () {
    $dogs = Dog::all();
    return view('dogs', ['dogs' => $dogs]);
})->name('dogs');
