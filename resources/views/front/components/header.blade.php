<div class="flex justify-between items-center p-6 bg-white">
    <div>
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-full">
    </div>
    <div class="flex-grow mx-10 flex justify-center">
        <input wire:model.live="search" type="text" placeholder="Rechercher..."
               class="w-3/5 px-4 py-2 border rounded-lg focus:outline-none">
        <script>
            Livewire.on('search', data => {
                window.livewire.emit('searchUpdated', data);
            });
        </script>
    </div>
    <div class="flex space-x-4">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('images/icone-compte.png') }}" alt="Compte" class="w-6 h-6">
        </a>

        <a href="">
            <img src="{{ asset('images/icone-panier.png') }}" alt="Panier" class="w-6 h-6">
        </a>
    </div>
</div>
