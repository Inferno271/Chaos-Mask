@extends('layouts.app')

@section('title', 'Контакты - Chaos Mask')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contacts_styles.css') }}">
@endpush

@section('content')
<div class="contacts-container">
    <h1 class="contacts-title">CONTACTS</h1>
    <div class="contacts-content">
        <div class="contact-info">
            <p class="contact-item"><strong>PHONE:</strong> +77777777777</p>
            <p class="contact-item"><strong>E-MAIL:</strong> chaosMask@gmail.com</p>
        </div>
        <div class="social-links">
            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
            <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.contacts-container {
    width: 100%;
    padding-left: 90px;
    padding-top: 20px;
    position: relative;
    z-index: 10;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.contacts-title {
    font-size: 48px;
    text-align: center;
    margin-bottom: 70px;
    color: #fff;
}

.contacts-content {
    width: 100%;
    height: 100%;
    max-width: 1000px;
    max-height: 700px;
    background: linear-gradient(to bottom, rgba(150, 150, 150, 0.08), rgba(150, 150, 150, 0.7), rgba(150, 150, 150, 0.9), rgba(150, 150, 150, 1.4));
    padding: 40px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    border-bottom-left-radius: 7px;
    border-bottom-right-radius: 7px;
    margin-bottom: 100px;
}

.contact-info {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.contact-item {
    font-size: 24px;
    color: #fff;
}

.contact-item strong {
    font-weight: normal;
    display: block;
    margin-bottom: 5px;
}

.social-links {
    display: flex;
    gap: 40px;
}

.social-link {
    font-size: 50px;
    color: #fff;
    transition: color 0.3s ease;
}

.social-link:hover {
    color: #f8ab37;
}
</style>
@endpush