<x-app-layout>
<div class="relative bg-cover bg-center text-white flex flex-col items-center justify-center py-24 px-10 object-contain"
     style="background-image: url('{{ asset('images/home-background.jpeg') }}')">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="z-10 max-w-xl text-center">
        <h2 class="text-4xl font-bold mb-8">La première plateforme d’abonnement de complément alimentaire</h2>
        <p class="text-base mb-8">Ne manquer plus jamais d’un complément, sans y penser une seule seconde. Choisisez,
            modifier et switcher les produits et les dates de vos abonnement sans aucun coup supplémentaire.</p>
        <div class="flex space-x-4 justify-center">
            <a href="{{ route('products-listing') }}" class="bg-white text-black font-bold py-2 px-4 rounded-full">Découvrir
                les produits</a>
            <button class="bg-black bg-opacity-50 text-white font-bold py-2 px-4 rounded-full border border-white">
                Pourquoi choisir Weplement
            </button>
        </div>
    </div>
</div>

<div class="flex items-center px-44">
    <div class="w-1/2 mt-12 px-4">
        <h2 class="text-3xl font-bold mb-4">Vos marques préférées</h2>
        <p class="mb-4">Lpsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
            took a galley of type and scrambled it to make a type specimen book. It has survived not only five
            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <button class="bg-black text-white font-bold py-2 px-4 rounded-full">Voir les produits</button>
    </div>
    <div class="w-1/2 mt-16">
        <div class="flex justify-center">
            <img src="{{ asset('images/logo-m.png') }}" alt="Logo 1" class="w-24 h-24 rounded-full object-cover m-4">
            <img src="{{ asset('images/logo-bulk.png') }}" alt="Logo 2" class="w-24 h-24 rounded-full object-cover m-4">
            <img src="{{ asset('images/logo-nm.png') }}" alt="Logo 3"
                 class="w-24 h-24 rounded-full object-cover m-4  border border-blue-500">
            <img src="{{ asset('images/logo-myprotein.png') }}" alt="Logo 4"
                 class="w-24 h-24 rounded-full object-cover m-4">
        </div>
        <div class="flex justify-center space-x-4">
            <img src="{{ asset('images/logo-nutripure.png') }}" alt="Logo 5"
                 class="w-24 h-24 rounded-full object-cover mx-8 my-4">
            <img src="{{ asset('images/logo-vert.png') }}" alt="Logo 6"
                 class="w-24 h-24 rounded-full object-cover mx-8 my-4">
        </div>
    </div>
</div>

<div>

</div>

@include('front.components.footer')
</x-app-layout>
