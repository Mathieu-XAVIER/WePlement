<div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75">
    <div class="bg-white p-6 rounded shadow-lg max-w-4xl mx-auto text-center relative">
        <button wire:click="toggleCreateForm"
                class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 hover:bg-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                 class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <h2 class="text-2xl mb-6 text-gray-700 font-semibold">Créer un nouveau WeShipp</h2>
        <form wire:submit.prevent="submit">
            <div class="mb-3">
                <label for="we_name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="we_name" wire:model.live="we_name">
                 {{ $we_name}}
            </div>
            <div class="mb-3">
                <label for="recurrence_frequency" class="form-label">Récurrence</label>
                <input type="text" class="form-control" id="recurrence_frequency" wire:model.live="recurrence_frequency">
                {{ $recurrence_frequency}}
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Date de début</label>
                <input type="date" class="form-control" id="start_date" wire:model.live="start_date">
                {{ $start_date}}
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">Date de fin</label>
                <input type="date" class="form-control" id="end_date" wire:model.live="end_date">
            </div>
            {{ $end_date}}
            <div class="mb-3">
                <label for="subscription_type" class="form-label">Type d'abonnement</label>
                <select class="form-select" id="subscription_type" wire:model="subscription_type">
                    <!-- Options de type d'abonnement ici -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

