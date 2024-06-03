<x-app-layout>
<div
    class="relative bg-cover bg-center text-white flex flex-col items-center justify-center py-24 px-10 object-contain mb-20"
    style="background-image: url('{{ asset('images/home-background.jpeg') }}')">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="z-10 max-w-xl text-center">
        <h2 class="text-4xl font-bold mb-8">Performances</h2>
        <p class="text-base mb-8">Ne manquer plus jamais d’un complément, sans y penser une seule seconde. Choisisez,
            modifier et switcher les produits et les dates de vos abonnement sans aucun coup supplémentaire.</p>
    </div>
</div>
@livewire('products.listing')
</x-app-layout>
