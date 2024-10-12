<div class="mask-card">
    <img src="{{ asset('storage/' . $mask->image) }}" alt="{{ $mask->name }}" class="mask-image">
    <h3 class="mask-name">{{ $mask->name }}</h3>
    <p class="mask-price">PRICE: {{ $mask->price }}₽</p>
    <button class="add-to-cart-btn" data-mask-id="{{ $mask->id }}">Add to cart</button>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const notification = document.createElement('div');
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 10px 20px;
        background-color: #f8ab37;
        color: #000;
        border-radius: 5px;
        display: none;
        z-index: 9999;
    `;
    document.body.appendChild(notification);

    function showNotification(message) {
        notification.textContent = message;
        notification.style.display = 'block';
        setTimeout(() => {
            notification.style.display = 'none';
        }, 3000);
    }

    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            
            console.log('Кнопка нажата:', this.dataset.maskId);
            
            if (this.disabled) {
                console.log('Кнопка уже отключена, пропускаем запрос');
                return;
            }

            this.disabled = true;
            console.log('Отключаем кнопку');

            const maskId = this.dataset.maskId;

            fetch('{{ route('cart.add') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ mask_id: maskId })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Ответ сервера:', data);
                showNotification(data.message);
                const cartCountElement = document.querySelector('.cart-count');
                if (cartCountElement) {
                    cartCountElement.textContent = data.cart_count;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('Произошла ошибка при добавлении товара в корзину');
            })
            .finally(() => {
                console.log('Включаем кнопку обратно');
                this.disabled = false;
            });
        });
    });
});
</script>
@endpush
