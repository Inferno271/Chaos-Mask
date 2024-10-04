<div class="mask-card">
    <img src="{{ asset('storage/' . $mask->image) }}" alt="{{ $mask->name }}" class="mask-image">
    <div class="mask-info">
        <h3 class="mask-name">{{ $mask->name }}</h3>
        <p class="mask-price">{{ number_format($mask->price, 2) }} ₽</p>
    </div>
</div>
