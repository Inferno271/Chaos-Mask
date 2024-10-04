<div class="catalog-header">
    <div class="catalog-header-content">
        <div class="search-bar">
            <form action="{{ route('catalog.search') }}" method="GET">
                <input type="text" name="query" placeholder="Поиск...">
                <button type="submit">Поиск</button>
            </form>
        </div>
        <nav class="catalog-nav">
            <ul>
                <li class="{{ request()->is('catalog/facial') ? 'active' : '' }}">
                    <a href="{{ route('catalog.category', 'facial') }}">FACIAL</a>
                </li>
                <li class="{{ request()->is('catalog/decorative') ? 'active' : '' }}">
                    <a href="{{ route('catalog.category', 'decorative') }}">DECORATIVE</a>
                </li>
                <li class="{{ request()->is('catalog/personal') ? 'active' : '' }}">
                    <a href="{{ route('catalog.category', 'personal') }}">PERSONAL</a>
                </li>
            </ul>
        </nav>
        <div class="sort-button">
            <button id="sortButton">Сортировка</button>
            <div class="sort-dropdown" style="display: none;">
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'price_asc']) }}">Цена: по возрастанию</a>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'price_desc']) }}">Цена: по убыванию</a>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'name_asc']) }}">Название: А-Я</a>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'name_desc']) }}">Название: Я-А</a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sortButton = document.getElementById('sortButton');
    const sortDropdown = document.querySelector('.sort-dropdown');

    sortButton.addEventListener('click', function() {
        sortDropdown.style.display = sortDropdown.style.display === 'none' ? 'block' : 'none';
    });

    // Закрыть выпадающее меню при клике вне его
    document.addEventListener('click', function(event) {
        if (!sortButton.contains(event.target) && !sortDropdown.contains(event.target)) {
            sortDropdown.style.display = 'none';
        }
    });
});
</script>
