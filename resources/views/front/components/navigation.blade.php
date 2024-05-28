<div class="bg-gray-900 text-white text-center py-4">
    <ul class="list-none flex justify-around px-0">
        @foreach($categories as $categorie)
            <li class="uppercase">
                <a href="{{ route('products.filtered', ['category' => $categorie->cat_slug]) }}">
                    {{ $categorie->cat_name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
