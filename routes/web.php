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
use App\Http\Controllers\Admin\MaskController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogPostController;

// Главная страница
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Каталог
Route::get('/catalog', [CatalogController::class, 'showCategory'])->name('catalog')->defaults('category', 'facial');
Route::get('/catalog/{category}', [CatalogController::class, 'showCategory'])->name('catalog.category');
Route::get('/catalog/search', [CatalogController::class, 'search'])->name('catalog.search');

// О нас
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Блог
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');

// Контакты
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Авторизация и регистрация
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/account', [AuthController::class, 'account'])->name('account');

// Корзина
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');
    Route::patch('/cart/{cartItem}', [CartController::class, 'update'])->name('cart.update');
});

// Админ-панель
Route::prefix('admin')->middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    Route::get('/masks', [MaskController::class, 'index'])->name('admin.masks.index');
    Route::get('/masks/create', [MaskController::class, 'create'])->name('admin.masks.create');
    Route::post('/masks', [MaskController::class, 'store'])->name('admin.masks.store');
    Route::get('/masks/{mask}/edit', [MaskController::class, 'edit'])->name('admin.masks.edit');
    Route::put('/masks/{mask}', [MaskController::class, 'update'])->name('admin.masks.update');
    Route::delete('/masks/{mask}', [MaskController::class, 'destroy'])->name('admin.masks.destroy');

    Route::get('/blog-posts', [BlogPostController::class, 'index'])->name('admin.blog.index');
    Route::get('/blog-posts/create', [BlogPostController::class, 'create'])->name('admin.blog.create');
    Route::post('/blog-posts', [BlogPostController::class, 'store'])->name('admin.blog.store');
    Route::get('/blog-posts/{post}/edit', [BlogPostController::class, 'edit'])->name('admin.blog.edit');
    Route::put('/blog-posts/{post}', [BlogPostController::class, 'update'])->name('admin.blog.update');
    Route::delete('/blog-posts/{post}', [BlogPostController::class, 'destroy'])->name('admin.blog.destroy');

});
