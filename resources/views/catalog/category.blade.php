@extends('layouts.app')

@section('title', ucfirst($category) . ' маски - Chaos Mask')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/catalog.css') }}">
@endpush

@section('content')
    <div class="catalog-container">
        <x-catalog-header />

        <h1 class="catalog-title">{{ strtoupper($category) }} MASKS</h1>
        
        <div class="catalog-description">
            @switch($category)
                @case('facial')
                    <p>FACIAL MASKS — это коллекция уникальных масок, созданных вручную и предназначенных для ношения как стильный аксессуар. В этом разделе представлены разнообразные маски для лица, выполненные с акцентом на комфорт и эстетику. Каждая маска не только защищает, но и подчеркивает вашу индивидуальность, становясь ярким дополнением к вашему образу.</p>
                    @break
                @case('decorative')
                    <p>DECORATIVE MASKS — это эксклюзивная коллекция масок, созданных для тех, кто ценит искусство и самовыражение. Здесь вы найдете маски с уникальными узорами, яркими цветами и необычными формами. Эти маски идеально подходят для декоративного оформления интерьера, фотосессий или как стильный аксессуар.</p>
                    @break
                @case('personal')
                    <p>PERSONAL MASKS — это линейка масок, разработанных с учетом индивидуальных потребностей наших клиентов. В этом разделе вы можете заказать маски, которые можно персонализировать под ваш стиль и предпочтения. От минималистичных дизайнов до сложных узоров — здесь каждый может создать свою уникальную маску, которая станет продолжением его личности.</p>
                    @break
                @default
                    <p>{{ strtoupper($category) }} MASKS — это коллекция уникальных масок, созданных вручную и предназначенных для ношения как стильный аксессуар. В этом разделе представлены разнообразные маски для различных образов и случаев, выполненные с акцентом на качество и оригинальный дизайн. Каждая маска подчеркивает индивидуальность, превращая её в модное дополнение к вашему стилю.</p>
            @endswitch
        </div>

        <div class="mask-grid">
            @forelse($masks as $mask)
                @include('catalog.partials.mask-card', ['mask' => $mask])
            @empty
                <p>В этой категории пока нет масок.</p>
            @endforelse
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
