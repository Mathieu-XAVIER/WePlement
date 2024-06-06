<div class="flex">
    <div class="w-1/4">
        @include('dashboard')
    </div>
    <div class="w-3/4 py-12">
        <div class="flex justify-between">
            <h1 class="text-2xl font-bold">Vos Weshipps</h1>
            <a class="mr-4 bg-black text-white rounded-lg px-2 py-1" wire:click="toggleCreateForm"> Ajouter</a></div>
        <div class="flex flex-wrap max-w-full -mx-2 mt-8">
            @foreach($weShipps as $weShipp)
                <div class="w-1/4 px-2 mb-8">
                    <div class="border p-6 rounded-lg bg-gray-100">
                        <div
                            class="bg-[#399B7A] text-white rounded-full p-1 mb-2 leading-relaxed text-sm inline-block px-4">
                            Livraison : 14-16 mai
                        </div>
                        <div class="font-bold text-2xl mb-2 leading-relaxed">
                            {{ $weShipp->we_name }}
                        </div>
                        <div class="text-gray-400 mb-2 leading-relaxed">
                            Récurrence : <span
                                class="text-black font-bold">{{ $weShipp->recurrence_frequency }} jours</span>
                        </div>
                        <div class="flex space-x-2 mb-2">
                            @foreach($weShipp->products() as $product)
                                <img class="w-8 h-8" src="{{ asset('images/img-test-produit.jpg') }}">
                            @endforeach
                        </div>
                        <a href="{{ route('weshipps.show', $weShipp) }}"
                           class="bg-black text-white rounded-full p-1 text-center text-sm inline-block px-2 mt-3">
                            Voir le détails
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @if($showCreateForm)
        @livewire('we-shipps.create')
    @endif
</div>
