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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('exercise1', function () {
    return view('view1');
});

Route::get('introduction', function () {
    return view('introduction');
})->name('introduction');

Route::group(['middleware' => 'auth2'], function () {     
    Route::get('user', function () {
        return view('user');
    })->name('user');
    
    Route::get('admin', function () {
        return view('admin');
    })->name('admin');
});


use App\Http\Controllers\DbController;

Route::get('database', [DbController::class, 'createPizzaForm'])->name('database');
Route::post('database', [DbController::class, 'pizzaForm'])->name('database.submit');

use App\Http\Controllers\UserController;
Route::get('/users', [UserController::class, 'index'])->name('index');
Route::get('/users/create', [UserController::class, 'create'])->name('create');
Route::post('/users', [UserController::class, 'store'])->name('store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('destroy');

use App\Http\Controllers\ContactController;

Route::post('create_contact', [ContactController::class, 'create_contact']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    // Add more routes for other admin pages as needed
});

use App\Http\Controllers\ChartController;
Route::get('/pizza-orders', [ChartController::class, 'pizzaOrders'])->name('pizza.orders');
Route::get('/pizza-orders', [ChartController::class, 'pizzaOrders'])->name('pizza_orders');

use App\Http\Controllers\ForumController;

Route::get('/forum', [ForumController::class, 'index'])->name('forum');
Route::post('/forum', [ForumController::class, 'store'])->name('forum.store');