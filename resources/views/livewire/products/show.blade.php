<div class="flex mt-16" >
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
            @foreach(json_decode($product->prod_flavors) as $flavor)
                <option value="{{ $flavor }}">{{ $flavor }}</option>
            @endforeach
        </select>
        <select name="size" id="size" class="block">
            @foreach(json_decode($product->prod_sizes) as $size)
                <option value="{{ $size }}">{{ $size }}</option>
            @endforeach
        </select>
        <div class="flex">
            <input type="number" id="quantity" name="quantity" min="1" max="100" value="1" class="block">
            <button type="button" class="bg-[#399B7A] rounded-full flex items-center px-4 mx-8">
                <img class="w-6 h-6" src="{{ asset('images/icone-panier.png') }}" alt="Cart Icon">
                <span class="ml-2">Ajouter à un We-Shipp</span>
            </button>
        </div>
    </div>
</div>
