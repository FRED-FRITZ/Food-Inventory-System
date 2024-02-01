<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('Items.integration');
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

    Route::controller(usersController::class)->prefix('users')->group(function () {
        Route::get('', 'index')->name('users');
        Route::get('create', 'create')->name('users.create');
        Route::post('store', 'store')->name('users.store');
        Route::get('show/{id}', 'show')->name('users.show');
        Route::get('edit/{id}', 'edit')->name('users.edit');
        Route::put('edit/{id}', 'update')->name('users.update');
        Route::delete('destroy/{id}', 'destroy')->name('users.destroy');
    });

    Route::controller(SuppliersController::class)->prefix('suppliers')->group(function () {
        Route::get('', 'index')->name('suppliers');
        Route::get('create', 'create')->name('suppliers.create');
        Route::post('store', 'store')->name('suppliers.store');
        Route::get('show/{id}', 'show')->name('suppliers.show');
        Route::get('edit/{id}', 'edit')->name('suppliers.edit');
        Route::put('edit/{id}', 'update')->name('suppliers.update');
        Route::delete('destroy/{id}', 'destroy')->name('suppliers.destroy');
    });

    Route::controller(ItemsController::class)->prefix('items')->group(function () {
        Route::get('', 'index')->name('items');
        Route::get('create', 'create')->name('items.create');
        Route::post('store', 'store')->name('items.store');
        Route::get('show/{id}', 'show')->name('items.show');
        Route::get('edit/{id}', 'edit')->name('items.edit');
        Route::put('edit/{id}', 'update')->name('items.update');
        Route::delete('destroy/{id}', 'destroy')->name('items.destroy');
    });

    Route::controller(CategoryController::class)->prefix('category')->group(function () {
        Route::get('', 'index')->name('category');
        Route::get('create', 'create')->name('category.create');
        Route::post('store', 'store')->name('category.store');
        Route::get('show/{id}', 'show')->name('category.show');
        Route::get('edit/{id}', 'edit')->name('category.edit');
        Route::put('edit/{id}', 'update')->name('category.update');
        Route::delete('destroy/{id}', 'destroy')->name('category.destroy');
    });

    Route::controller(TransactionController::class)->prefix('transaction')->group(function () {
        Route::get('', 'index')->name('transaction');
        Route::get('create', 'create')->name('transaction.create');
        Route::post('store', 'store')->name('transaction.store');
        Route::get('show/{id}', 'show')->name('transaction.show');
        Route::get('edit/{id}', 'edit')->name('transaction.edit');
        Route::put('edit/{id}', 'update')->name('transaction.update');
        Route::delete('destroy/{id}', 'destroy')->name('transaction.destroy');
    });

    Route::get('/dashboard', [DashboardController::class, 'showdashboard'])->name('dashboard');
    Route::post('/items', [ItemController::class,'store']);
    Route::post('/category', [CategoryController::class,'store']);
    Route::post('/suppliers', [SupplierController::class,'store']);
    Route::post('/transaction', [TransactionController::class,'store']);
    Route::post('/items', [ItemsController::class,'store']);


    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
