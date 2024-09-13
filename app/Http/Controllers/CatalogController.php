<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        // Загрузка всех товаров для каталога
        return view('catalog.index'); // Возвращает представление каталога
    }

    public function showCategory($category)
    {
        // Загрузка товаров по категории
        return view('catalog.category', ['category' => $category]); // Возвращает представление категории
    }
}
