<div class="flex mt-16">
    <div class="flex space-x-8 w-1/2 ml-32">
        <div class="flex flex-col space-y-4 h-96">
            <img class="h-16 w-16" src="{{ asset('images/produit-bulk.png') }}" alt="{{ $product->name }}">
            <img class="h-16 w-16" src="{{ asset('images/produit-bulk.png') }}" alt="{{ $product->name }}">
            <img class="h-16 w-16" src="{{ asset('images/produit-bulk.png') }}" alt="{{ $product->name }}">
            <img class="h-16 w-16" src="{{ asset('images/produit-bulk.png') }}" alt="{{ $product->name }}">
            <img class="h-16 w-16" src="{{ asset('images/produit-bulk.png') }}" alt="{{ $product->name }}">
        </div>
        <img class="h-96 w-auto" src="{{ asset('images/produit-bulk.png') }}" alt="{{ $product->name }}">
    </div>
    <div class="w-1/2 space-y-5">
        <h1>Marque : {{ $product->brand->brand_name }}</h1>
        <p>{{ $product->prod_desc }}</p>
        <p>{{ $product->prod_price }}</p>
        <select name="flavor" id="flavor" class="block">
            @if($product->prod_flavors)
                @foreach(json_decode($product->prod_flavors) as $flavor)
                    <option value="{{ $flavor }}">{{ $flavor }}</option>
                @endforeach
            @endif
        </select>
        <select name="size" id="size" class="block">
            @if($product->prod_sizes)
                @foreach(json_decode($product->prod_sizes) as $size)
                    <option value="{{ $size }}">{{ $size }}</option>
                @endforeach
            @endif
        </select>
        <div class="flex">
            <input type="number" id="quantity" name="quantity" min="1" max="100" value="1" class="block">
            <button type="button" wire:click="toggleModal"
                    class="bg-[#399B7A] rounded-full flex items-center px-4 mx-8">
                <img class="w-6 h-6" src="{{ asset('images/icone-panier.png') }}" alt="Cart Icon">
                <span class="ml-2">Ajouter à un We-Shipp</span>
            </button>
        </div>
    </div>


    @if($showModal)
        <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75">
            <div class="bg-white p-6 rounded shadow-lg max-w-4xl mx-auto text-center relative">
                <button wire:click="toggleModal"
                        class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 hover:bg-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                <h2 class="text-2xl mb-6 text-gray-700 font-semibold">Ajouter à un WeShipp</h2>
                <p class="text-gray-600 mb-6">Ajouter ce produit à un ou plusieurs WeShipp ou créée en un nouveau</p>
                <div class="flex mt-6">
                    @foreach($weshipps as $weshipp)
                        <div class="mb-6 border border-gray-300 rounded-lg p-6 mx-12">
                            <p class="text-gray-700">Livraison : </p>
                            <p class="text-gray-700">{{ $weshipp->we_name }}</p>
                            <p class="text-gray-700">récurrence: {{ $weshipp->recurrence_frequency	 }}</p>
                            <div class="flex space-x-2 flex-row">
                                <img class="w-16 h-16" src="{{ asset('images/produit-bulk.png') }}">
                                <img class="w-16 h-16" src="{{ asset('images/produit-bulk.png') }}">
                                <img class="w-16 h-16" src="{{ asset('images/produit-bulk.png') }}">
                            </div>
                            <a href="#" wire:click.prevent="addToWeShipp({{ $weshipp->id }}, {{ $product->id }})"
                               class="text-blue-500 hover:underline">Ajouter à ce WeShipp</a></div>
                    @endforeach
                </div>
                <div class="flex justify-center items-center">
                    <a wire:click="toggleCreateForm"
                       class="w-1/2 bg-[#399B7A] rounded-full flex items-center justify-center py-2 px-4 mx-8">
                        <img class="w-6 h-6" src="{{ asset('images/icone-panier.png') }}" alt="Cart Icon">
                        <span class="ml-2">Créer un nouveau WeShipp ?</span>
                    </a>
                </div>
            </div>
        </div>
    @endif
    @if($showCreateForm)
        @livewire('we-shipps.create')
    @endif
</div>
