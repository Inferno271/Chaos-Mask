<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaskController extends Controller
{
    public function index()
    {
        $masks = Mask::paginate(20);
        return view('admin.masks.index', compact('masks'));
    }

    public function create()
    {
        $categories = ['facial', 'decorative'];
        return view('admin.masks.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|in:facial,decorative',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('masks', 'public');
            $validated['image'] = $imagePath;
        }

        Mask::create($validated);

        return redirect()->route('admin.masks.index')->with('success', 'Маска успешно добавлена');
    }

    public function edit(Mask $mask)
    {
        $categories = ['facial', 'decorative'];
        return view('admin.masks.edit', compact('mask', 'categories'));
    }

    public function update(Request $request, Mask $mask)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|in:facial,decorative',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Удаляем старое изображение, если оно существует
            if ($mask->image) {
                Storage::disk('public')->delete($mask->image);
            }
            $imagePath = $request->file('image')->store('masks', 'public');
            $validated['image'] = $imagePath;
        }

        $mask->update($validated);

        return redirect()->route('admin.masks.index')->with('success', 'Маска успешно обновлена');
    }

    public function destroy(Mask $mask)
    {
        $mask->delete();
        return redirect()->route('admin.masks.index')->with('success', 'Маска успешно удалена');
    }
}
