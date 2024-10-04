@extends('layouts.app')

@section('title', 'Лицевые маски - Chaos Mask')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/catalog.css') }}">
@endpush

@section('content')


<div class="catalog-container">
    <h1 class="catalog-title">FACIAL MASKS</h1>
    
    <div class="catalog-description">
        <p>FACIAL MASKS — это коллекция уникальных масок, созданных вручную и предназначенных для ношения как стильный аксессуар. В этом разделе представлены разнообразные маски для различных образов и случаев, выполненные с акцентом на качество и оригинальный дизайн. Каждая маска подчеркивает индивидуальность, превращая её в модное дополнение к вашему стилю.</p>
    </div>

    <div class="mask-grid">
        @foreach($masks as $mask)
            @include('catalog.partials.mask-card', ['mask' => $mask])
        @endforeach
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function() {
            const maskId = this.getAttribute('data-mask-id');
            // Здесь будет логика добавления в корзину
            console.log('Добавлена маска с ID:', maskId);
        });
    });
</script>
@endpush
