<?php

namespace App\Http\Controllers;

use App\Models\Mask;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function showCategory($category, Request $request)
    {
        $validCategories = ['facial', 'decorative', 'personal'];
        
        if (!in_array($category, $validCategories)) {
            abort(404);
        }
        
        $query = Mask::where('category', $category);
        
        // Обработка сортировки
        $sort = $request->input('sort');
        switch ($sort) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            case 'name_asc':
                $query->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('name', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc'); // По умолчанию сортировка по дате создания
        }
        
        $masks = $query->get();
        return view('catalog.category', compact('masks', 'category'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $masks = Mask::where('name', 'like', "%$query%")->get();
        return view('catalog.search', compact('masks', 'query'));
    }
}
