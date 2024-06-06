<div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75">
    <div class="bg-white p-6 rounded shadow-lg max-w-4xl mx-auto text-left relative">
        <button wire:click="toggleCreateForm"
                class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 hover:bg-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                 class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <h2 class="text-2xl mb-6 text-gray-700 font-bold text-center">Créer un nouveau WeShipp</h2>
        <form wire:submit.prevent="submit" class="mx-16">
            <div class="my-3">
                <div>
                    <label for="we_name" class="form-label font-bold">Nom :</label>
                </div>
                <div>
                    <input type="text" class="form-control rounded bg-gray-200 w-2/3" id="we_name"
                           placeholder="Nom du WeShipp"
                           wire:model.live="we_name">
                </div>
            </div>
            <div class="flex justify-between">
                <div class="my-3 w-1/3">
                    <label for="recurrence_frequency" class="form-label font-bold">Récurrence :</label>
                    <input type="text" class="form-control rounded bg-gray-200" id="recurrence_frequency"
                           placeholder="Nombre de jours"
                           wire:model.live="recurrence_frequency">
                </div>
                <div class="my-3 w-1/3">
                    <label for="start_date" class="form-label font-bold">Date de début :</label>
                    <input type="date" class="form-control rounded bg-gray-200" id="start_date"
                           wire:model.live="start_date">
                </div>
                <div class="my-3 w-1/3">
                    <label for="end_date" class="form-label font-bold">Date de fin :</label>
                    <input type="date" class="form-control rounded bg-gray-200" id="end_date"
                           wire:model.live="end_date">
                </div>
            </div>
            <div class="my-3">
                <div>
                    <label for="delivery_address" class="form-label font-bold">Adresse de livraison :</label>
                </div>
                <div>
                    <input type="text" class="form-control rounded bg-gray-200" id="delivery_address"
                           wire:model="delivery_address">
                </div>
            </div>
            <div class="my-3">
                <label for="subscription_type" class="form-label font-bold">Type d'abonnement : WeFlex</label>
                <p><a href="#" class="text-[#399B7A] underline">Mettre à jour</a></p>
            </div>
            <div class="text-center">
                <button type="submit" class="btn bg-[#399B7A] text-white py-1 px-16 rounded-full">Créer le WeShipp
                </button>
            </div>
        </form>
    </div>
</div>
