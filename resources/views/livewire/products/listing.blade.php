<div class="grid grid-cols-5 gap-4 mx-8 mt-16">
    <div class="col-span-1">
        <h2 class="text-2xl font-bold mb-4">Filtrer par</h2>
        <div class="mb-4">
            <label for="brand" class="block cursor-pointer text-lg font-bold flex items-center">
                Marque
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="h-4 w-4 ml-2 transform transition-transform duration-200" id="brandArrow">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </label>
            <div id="brandCheckboxes" class="hidden">
                @foreach($brands as $brand)
                    <div class="mt-2">
                        <input type="checkbox" id="{{ $brand->id }}" value="{{ $brand->id }}"
                               wire:model.live="brand.{{ $brand->id }}">
                        <label for="{{ $brand->id }}"
                               class="ml-2 cursor-pointer text-lg">{{ $brand->brand_name }}</label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mb-4">
            <label for="brand" class="block cursor-pointer text-lg font-bold flex items-center">
                Prix
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="h-4 w-4 ml-2 transform transition-transform duration-200" id="brandArrow">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </label>
        </div>
        <div class="mb-4">
            <label for="brand" class="block cursor-pointer text-lg font-bold flex items-center">
                Taille
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="h-4 w-4 ml-2 transform transition-transform duration-200" id="brandArrow">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </label>
        </div>
        <div class="mb-4">
            <label for="brand" class="block cursor-pointer text-lg font-bold flex items-center">
                Saveur
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="h-4 w-4 ml-2 transform transition-transform duration-200" id="brandArrow">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </label>
        </div>
        <div class="mb-4">
            <label for="brand" class="block cursor-pointer text-lg font-bold flex items-center">
                Type
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="h-4 w-4 ml-2 transform transition-transform duration-200" id="brandArrow">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </label>
        </div>
        <div class="mb-4">
            <label for="brand" class="block cursor-pointer text-lg font-bold flex items-center">
                Notation
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="h-4 w-4 ml-2 transform transition-transform duration-200" id="brandArrow">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </label>
        </div>
    </div>

    <script>
        const label = document.querySelector('label[for="brand"]');
        const checkboxes = document.getElementById('brandCheckboxes');
        const arrow = document.getElementById('brandArrow');

        label.addEventListener('click', () => {
            checkboxes.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        });
    </script>
    <div class="col-span-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($products as $product)
                <a href="{{ route('products.show', ['product' => $product->id]) }}">
                    <div class="overflow-hidden px-4 my-3">
                        <img src="{{ asset('images/produit-bulk.png') }}" alt="{{ $product->prod_name }}"
                             class="w-full h-64 object-cover">
                        <div class="p-4">
                            <div class="inline-block rounded-full px-3 py-1 text-sm border border-black">
                                {{ $product->brand ? $product->brand->brand_name : 'No Brand' }}
                            </div>
                            <h3 class="mt-2 text-lg uppercase font-bold">{{ $product->prod_name }}</h3>
                            <p class="mt-2 text-lg text-gray-700">{{ $product->prod_price . ' €'}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="my-8 text-center">
            {{ $products->links('vendor.livewire.simple-tailwind') }}
            <div class="mt-4">
                Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} results
            </div>
        </div>
    </div>
</div>
