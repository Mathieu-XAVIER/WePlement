<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Vos adresses de livraison') }}
        </h2>
        @if(session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('message') }}</span>
            </div>
        @endif
    </header>
    <div class="flex py-4 space-x-2">
    @foreach($adresses as $adress)
        <div class="p-4 border rounded shadow">
            <p class="mb-2">{{ $adress->adress }}</p>
            <p class="mb-2">{{ $adress->city }}</p>
            <p class="mb-2">{{ $adress->zip_code }}</p>
            <p class="mb-2">{{ $adress->country }}</p>
            <x-danger-button wire:click="deleteAdress({{ $adress->id }})" class="mt-2 btn">{{ __('Supprimer') }}</x-danger-button>
        </div>
    @endforeach
    </div>
    @if ($showForm)
        <form wire:submit.prevent="addAdress" class="mt-6 space-y-6">
            <div>
                <x-input-label for="adress" :value="__('Adresse')" />
                <x-text-input wire:model="newAdress.adress" id="adress" name="adress" type="text" class="mt-1 block w-full" />
            </div>
            <div>
                <x-input-label for="city" :value="__('Ville')" />
                <x-text-input wire:model="newAdress.city" id="city" name="city" type="text" class="mt-1 block w-full" />
            </div>
            <div>
                <x-input-label for="zip_code" :value="__('Code Postal')" />
                <x-text-input wire:model="newAdress.zip_code" id="zip_code" name="zip_code" type="text" class="mt-1 block w-full" />
            </div>
            <div>
                <x-input-label for="country" :value="__('Pays')" />
                <x-text-input wire:model="newAdress.country" id="country" name="country" type="text" class="mt-1 block w-full" />
            </div>
            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Ajouter une adresse') }}</x-primary-button>
            </div>
        </form>
    @else
        <x-primary-button wire:click="handleForm" class="mt-4 btn btn-primary">{{ __('Ajouter une adresse') }}</x-primary-button>
    @endif
</section>
