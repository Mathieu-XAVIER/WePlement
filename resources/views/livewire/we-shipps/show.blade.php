<div>
    <div class="my-12">
        <h1 class="text-center text-4xl font-bold">Votre WeShipp à bien été activé !</h1>
        <p class="text-center text-xl">Nous vous remercions de votre confiance</p>
    </div>
    <div class="flex max-w-full mx-32">
        <div class="w-2/5 p-4">
            <div class="flex my-3 space-x-2 text-center text-2xl">
                <div>Votre WeShipp :</div>
                <div class="text-[#399B7A] font-bold">{{ $weshipp->we_name }}</div>
            </div>
            <div class="my-3">
                <p class="font-bold mb-2">Etat :</p>
                <div class="flex items space-x-4">
                    <button class="bg-[#399B7A] px-4 py-2 rounded-full border">Actif</button>
                    <button class="px-4 py-2 rounded-full border">Désactiver</button>
                </div>
            </div>
            <div class="flex my-3 space-x-2">
                <div class="font-bold">Informations -</div>
                <div><a href="#" class="text-[#399B7A] underline">Modifier</a></div>
            </div>
            <div class="flex my-3 space-x-2">
                <div class="text-gray-600">Type d'abonnement :</div>
                <div class="font-bold">{{ $weshipp->subscription_type }}</div>
            </div>
            <div class="flex my-3 space-x-2">
                <div class="text-gray-600">Récurrence :</div>
                <div class="font-bold">{{ $weshipp->recurrence_frequency }} jours</div>
            </div>
            <div class="flex my-3 space-x-2">
                <div class="text-gray-600">Prochaine livraison :</div>
                <div class="font-bold">15 - 17 mai</div>
            </div>
            <div class="flex my-3 space-x-2">
                <div class="text-gray-600">Adresse de livraison :</div>
                <div class="font-bold">"{{ $weshipp->delivery_address->adress }}"</div>
            </div>
            <div class="flex my-3 space-x-2">
                <div class="text-gray-600">Etat de la livraison :</div>
                <div class="bg-[#EEB13D] px-2 rounded-full">En cours</div>
            </div>
        </div>
        <div class="w-3/5 p-4">
            <h2 class="text-2xl font-bold mb-4">Produits dans le Weshipp</h2>
            <p class="mb-2">Nombre de produits : {{ $weshipp->products()->count() }}</p>
            <div class="col-span-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($weshipp->products() as $product)
                        <div class="overflow-hidden px-4 my-3 relative">
                            <button wire:click="removeProduct({{ $product->id }})"
                                    class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center">
                                X
                            </button>
                            <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                <img src="{{ $product->prod_images  }}" alt="{{ $product->prod_name }}"
                                     class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <div class="inline-block rounded-full px-3 py-1 text-sm border border-black">
                                        {{ $product->brand ? $product->brand->brand_name : 'No Brand' }}
                                    </div>
                                    <h3 class="mt-2 text-lg uppercase font-bold">{{ $product->prod_name }}</h3>
                                    <p class="mt-2 text-lg text-gray-700">{{ $product->prod_price . ' €'}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('weshipps.listing') }}"
       class="block w-1/4 mx-auto bg-[#399B7A] text-white text-center py-2 rounded-full my-8">Voir tous vos WeShipps</a>
</div>
