<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\productosController; 

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

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::controller(EmpleadoController::class)->prefix('empleados')->group(function () {
        Route::get('', 'index')->name('empleados');
        Route::get('create', 'create')->name('empleados.create');
        Route::post('store', 'store')->name('empleados.store');
        Route::get('show/{id}', 'show')->name('empleados.show');
        Route::get('edit/{id}', 'edit')->name('empleados.edit');
        Route::put('edit/{id}', 'update')->name('empleados.update');
        Route::delete('destroy/{id}', 'destroy')->name('empleados.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

Route::get('/form', [\App\Http\Controllers\FormController::class, 'index'])->name('form');
Route::get('/tienda', [\App\Http\Controllers\tiendaController::class, 'index'])->name('tienda');
Route::get('auth/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::get('/productos', [\App\Http\Controllers\productosController::class, 'index'])->name('productos');
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/empleados', [\App\Http\Controllers\EmpleadoController::class, 'index'])->name('empleados');
Route::get('/carrito', [\App\Http\Controllers\CarritoController::class, 'index'])->name('carrito');
Route::post('carrito', 'CarritoController@store');


});




