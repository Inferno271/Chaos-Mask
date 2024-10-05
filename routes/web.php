<?php
// routes/web.php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;

// Главная страница
Route::get('/', [HomeController::class, 'index'])->name('home');

// Каталог
Route::get('/catalog', [CatalogController::class, 'showCategory'])->name('catalog')->defaults('category', 'facial');
Route::get('/catalog/{category}', [CatalogController::class, 'showCategory'])->name('catalog.category');
Route::get('/catalog/search', [CatalogController::class, 'search'])->name('catalog.search');

// О нас
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Блог
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Контакты
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Авторизация и регистрация
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/account', [AuthController::class, 'account'])->name('account');

// Корзина
Route::get('/cart', [CartController::class, 'index'])->name('cart');

// Админ-панель
Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    // Дополнительные маршруты для админ-панели можно добавить здесь
});
