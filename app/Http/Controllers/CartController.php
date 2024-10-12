<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Mask;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::where('user_id', auth()->id())->with('mask')->get();
        $total = $cartItems->sum(function($item) {
            return $item->mask->price * $item->quantity;
        });
        return view('cart', compact('cartItems', 'total'));
    }

    public function add(Request $request)
    {
        Log::info('Попытка добавления товара в корзину', [
            'user_id' => auth()->id(),
            'mask_id' => $request->mask_id
        ]);

        $mask = Mask::findOrFail($request->mask_id);
        $cartItem = CartItem::where('user_id', auth()->id())
                            ->where('mask_id', $mask->id)
                            ->first();

        if ($cartItem) {
            Log::info('Товар уже в корзине, увеличиваем количество', [
                'cart_item_id' => $cartItem->id,
                'old_quantity' => $cartItem->quantity
            ]);
            $cartItem->increment('quantity');
            Log::info('Количество увеличено', [
                'new_quantity' => $cartItem->quantity
            ]);
        } else {
            Log::info('Создаем новую запись в корзине');
            $cartItem = CartItem::create([
                'user_id' => auth()->id(),
                'mask_id' => $mask->id,
                'quantity' => 1
            ]);
        }

        $cartCount = $this->getCartCount();
        Log::info('Обновленное количество товаров в корзине', [
            'cart_count' => $cartCount
        ]);

        return response()->json([
            'message' => 'Маска добавлена в корзину',
            'cart_count' => $cartCount
        ]);
    }

    public function remove(CartItem $cartItem)
    {
        $cartItem->delete();
        return redirect()->route('cart')->with('success', 'Товар удален из корзины');
    }

    public function update(Request $request, CartItem $cartItem)
    {
        $cartItem->update(['quantity' => $request->quantity]);
        return redirect()->route('cart')->with('success', 'Количество обновлено');
    }

    private function getCartCount()
    {
        $count = CartItem::where('user_id', auth()->id())->sum('quantity');
        Log::info('Подсчет товаров в корзине', [
            'user_id' => auth()->id(),
            'count' => $count
        ]);
        return $count;
    }
}
