<form action="{{ route('catalog.search') }}" method="GET" class="search-form">
    <input type="text" name="query" placeholder="Поиск масок..." value="{{ request('query') }}">
    <button type="submit">Поиск</button>
</form>
