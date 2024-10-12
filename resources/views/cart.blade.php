@extends('layouts.app')

@section('content')
<div class="cart-container">
    <h1 class="cart-title">КОРЗИНА</h1>
    @if($cartItems->count() > 0)
        <div class="cart-items">
            @foreach($cartItems as $item)
                <div class="cart-item">
                    <img src="{{ asset('storage/' . $item->mask->image) }}" alt="{{ $item->mask->name }}" class="cart-item-image">
                    <div class="cart-item-details">
                        <h3 class="cart-item-name">{{ $item->mask->name }}</h3>
                        <p class="cart-item-price">{{ $item->mask->price }} ₽</p>
                        <form action="{{ route('cart.update', $item) }}" method="POST" class="cart-item-quantity">
                            @csrf
                            @method('PATCH')
                            <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" max="10">
                            <button type="submit" class="btn-update">Обновить</button>
                        </form>
                        <p class="cart-item-total">Итого: {{ $item->mask->price * $item->quantity }} ₽</p>
                        <form action="{{ route('cart.remove', $item) }}" method="POST" class="cart-item-remove">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-remove">Удалить</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="cart-summary">
            <p class="cart-total">Общая сумма: <span>{{ $total }} ₽</span></p>
            <a href="#" class="btn-checkout">Оформить заказ</a>
        </div>
    @else
        <p class="cart-empty">Ваша корзина пуста.</p>
    @endif
</div>
@endsection

@push('styles')
<style>
.cart-container {
    width: 100%;
    padding-left: 90px;
    padding-top: 20px;
    position: relative;
    z-index: 10;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.cart-title {
    font-size: 48px;
    color: #ffffff;
    text-align: center;
    margin-bottom: 40px;
    text-transform: uppercase;
}

.cart-items {
    width: 100%;
    max-width: 800px;
}

.cart-item {
    display: flex;
    background-color: rgba(51, 51, 51, 0.8);
    border-radius: 10px;
    margin-bottom: 20px;
    padding: 20px;
}

.cart-item-image {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 5px;
    margin-right: 20px;
}

.cart-item-details {
    flex-grow: 1;
}

.cart-item-name {
    font-size: 24px;
    color: #fff;
    margin-bottom: 10px;
}

.cart-item-price {
    font-size: 18px;
    color: #f8ab37;
    margin-bottom: 10px;
}

.cart-item-quantity {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.cart-item-quantity input {
    width: 50px;
    padding: 5px;
    margin-right: 10px;
    background-color: #444;
    border: 1px solid #666;
    color: #fff;
}

.btn-update, .btn-remove {
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-update {
    background-color: #f8ab37;
    color: #000;
}

.btn-update:hover {
    background-color: #ffc107;
}

.btn-remove {
    background-color: #ff4136;
    color: #fff;
}

.btn-remove:hover {
    background-color: #ff7066;
}

.cart-item-total {
    font-size: 18px;
    color: #fff;
    margin-top: 10px;
}

.cart-summary {
    width: 100%;
    max-width: 800px;
    background-color: rgba(51, 51, 51, 0.8);
    border-radius: 10px;
    padding: 20px;
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.cart-total {
    font-size: 24px;
    color: #fff;
}

.cart-total span {
    color: #f8ab37;
    font-weight: bold;
}

.btn-checkout {
    padding: 10px 20px;
    background-color: #f8ab37;
    color: #000;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.btn-checkout:hover {
    background-color: #ffc107;
}

.cart-empty {
    font-size: 24px;
    color: #fff;
    text-align: center;
}
</style>
@endpush
