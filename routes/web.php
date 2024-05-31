<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\ToppingController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\tiendaController;
use App\Mail\Notification;


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

Route::get('Email', function () {
    Mail::to('britneypolanco19@gmail.com')
    ->send(new App\Mail\Notification);

    return "Mensaje enviado";
})->name('Notification');

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

    Route::controller(ToppingController::class)->prefix('toppings')->group(function () {
        Route::get('', 'index')->name('toppings');
        Route::get('create', 'create')->name('toppings.create');
        Route::post('store', 'store')->name('toppings.store');
        Route::get('show/{id}', 'show')->name('toppings.show');
        Route::get('edit/{id}', 'edit')->name('toppings.edit');
        Route::put('edit/{id}', 'update')->name('toppings.update');
        Route::delete('destroy/{id}', 'destroy')->name('toppings.destroy');
    });

    Route::controller(ClienteController::class)->prefix('clientes')->group(function () {
        Route::get('', 'index')->name('clientes');
        Route::get('create', 'create')->name('clientes.create');
        Route::post('store', 'store')->name('clientes.store');
        Route::get('show/{id}', 'show')->name('clientes.show');
        Route::get('edit/{id}', 'edit')->name('clientes.edit');
        Route::put('edit/{id}', 'update')->name('clientes.update');
        Route::delete('destroy/{id}', 'destroy')->name('clientes.destroy');
    });

    Route::controller(ProveedorController::class)->prefix('proveedores')->group(function () {
        Route::get('', 'index')->name('proveedores');
        Route::get('create', 'create')->name('proveedores.create');
        Route::post('store', 'store')->name('proveedores.store');
        Route::get('show/{id}', 'show')->name('proveedores.show');
        Route::get('edit/{id}', 'edit')->name('proveedores.edit');
        Route::put('edit/{id}', 'update')->name('proveedores.update');
        Route::delete('destroy/{id}', 'destroy')->name('proveedores.destroy');
    });

    Route::controller(FacturaController::class)->prefix('facturas')->group(function () {
        Route::get('', 'index')->name('facturas');
        Route::get('create', 'create')->name('facturas.create');
        Route::post('store', 'store')->name('facturas.store');
        Route::get('show/{id}', 'show')->name('facturas.show');
        Route::get('edit/{id}', 'edit')->name('facturas.edit');
        Route::put('edit/{id}', 'update')->name('facturas.update');
        Route::delete('destroy/{id}', 'destroy')->name('facturas.destroy');
    });

    Route::controller(PedidoController::class)->prefix('pedido')->group(function () {
        Route::get('', 'index')->name('pedido');
        Route::get('create', 'create')->name('pedido.create');
        Route::post('store', 'store')->name('pedido.store');
        Route::get('show/{id}', 'show')->name('pedido.show');
        Route::get('edit/{id}', 'edit')->name('pedido.edit');
        Route::put('edit/{id}', 'update')->name('pedido.update');
        Route::delete('destroy/{id}', 'destroy')->name('pedido.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

    Route::get('facturas/pdf', [FacturaController::class, 'pdf'])->name('facturas.pdf');
    Route::get('clientes/pdf', [ClienteController::class, 'pdf'])->name('clientes.pdf');
    Route::get('products/pdf', [ProductController::class, 'pdf'])->name('products.pdf');
    Route::get('empleados/pdf', [EmpleadoController::class, 'pdf'])->name('empleados.pdf');
    Route::get('proveedores/pdf', [ProveedorController::class, 'pdf'])->name('proveedores.pdf');

    /*Route::get('/auth/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');*/
    /*Route::get('/carrito', [\App\Http\Controllers\CarritoController::class, 'index'])->name('carrito');*/
    Route::post('/pedido', [\App\Http\Controllers\PedidoController::class, 'store'])->name('pedido');
    Route::get('/clientes', [\App\Http\Controllers\ClienteController::class, 'index'])->name('clientes');
    Route::get('/empleados', [\App\Http\Controllers\EmpleadoController::class, 'index'])->name('empleados');
    Route::get('/facturas', [\App\Http\Controllers\FacturaController::class, 'index'])->name('facturas');
    Route::get('/form', [\App\Http\Controllers\FormController::class, 'index'])->name('form');
    /*Route::get('/productos', [\App\Http\Controllers\productosController::class, 'index'])->name('productos');*/
    Route::get('/proveedores', [\App\Http\Controllers\ProveedorController::class, 'index'])->name('proveedores');
    /*Route::get('/tienda', [\App\Http\Controllers\tiendaController::class, 'index'])->name('tienda');*/
    Route::get('/pedido', [\App\Http\Controllers\PedidoController::class, 'index'])->name('pedido');
    Route::get('/toppings', [\App\Http\Controllers\ToppingController::class, 'index'])->name('toppings');
    /*Route::post('/pedir', [\App\Http\Controllers\CarritoController::class, 'store'])->name('carrito.store');*/

});

Route::get('/Tienda', function () {
    return view('tienda');
})->name('tienda');

Route::get('/Productos', function () {
    return view('productos');
})->name('productos');

Route::get('/auth/register', function () {
    return view('auth/register');
})->name('register');

Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito');