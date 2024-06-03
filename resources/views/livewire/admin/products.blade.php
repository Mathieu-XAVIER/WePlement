<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
    @if(session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('message') }}</span>
        </div>
    @endif

    <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create New Product</button>

    @if($isOpen)
        @include('livewire.admin.create')
    @endif

    <table class="table-auto w-full mt-5">
        <thead>
            <tr>
                <th class="px-4 py-2">N°</th>
                <th class="px-4 py-2">Nom</th>
                <th class="px-4 py-2">Prix</th>
                <th class="px-4 py-2">Marque</th>
                <th class="px-4 py-2">Categorie</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="border px-4 py-2">{{ $product->id }}</td>
                    <td class="border px-4 py-2">{{ $product->prod_name }}</td>
                    <td class="border px-4 py-2">{{ $product->prod_price }} €</td>
                    <td class="border px-4 py-2">{{ $product->brand ? $product->brand->brand_name : '-' }}</td>
                    <td class="border px-4 py-2">{{ $product->category ? $product->category->cat_name : '-' }}</td>
                    <td class="border px-4 py-2">
                        <button wire:click="edit({{ $product->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                        <button wire:click="delete({{ $product->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
