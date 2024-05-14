<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div style="background-color: #3B705E; color: white; text-align: center; padding: 10px;">
    Livraison offerte sur toutes vos commandes avec l’abonnement Weplement
</div>

<div class="flex justify-between items-center p-6 bg-white">
    <div>
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-full">
    </div>
    <div class="flex-grow mx-10">
        <input type="text" placeholder="Rechercher..." class="w-32 px-4 py-2 border rounded-lg focus:outline-none">
    </div>
    <div class="flex space-x-4">
        <a href="">
            <img src="{{ asset('images/account-icon.png') }}" alt="Compte" class="w-6 h-6">
        </a>

        <a href="">
            <img src="{{ asset('images/cart-icon.png') }}" alt="Panier" class="w-6 h-6">
        </a>
    </div>
</div>

<div class="bg-gray-900 text-white text-center py-4">
    <ul class="list-none flex justify-around px-0">
        <li class="uppercase">Santé</li>
        <li class="uppercase">Nutrition</li>
        <li class="uppercase">Performances</li>
        <li class="uppercase">Vitamines et Minéraux</li>
        <li class="uppercase">Végan</li>
        <li class="uppercase">Régime</li>
        <li class="uppercase">Sport</li>
    </ul>
</div>

<div class="relative bg-cover bg-center text-white flex flex-col items-center justify-center py-24 px-10 object-contain"
     style="background-image: url('{{ asset('images/home-background.jpeg') }}')">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="z-10 max-w-xl text-center">
        <h2 class="text-4xl font-bold mb-8">La première plateforme d’abonnement de complément alimentaire</h2>
        <p class="text-base mb-8">Ne manquer plus jamais d’un complément, sans y penser une seule seconde. Choisisez,
            modifier et switcher les produits et les dates de vos abonnement sans aucun coup supplémentaire.</p>
        <div class="flex space-x-4 justify-center">
            <button class="bg-white text-black font-bold py-2 px-4 rounded-full">Découvrir les produits</button>
            <button class="bg-black bg-opacity-50 text-white font-bold py-2 px-4 rounded-full border border-white">Pourquoi choisir Weplement</button>
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
            <img src="{{ asset('images/logo-nm.png') }}" alt="Logo 3" class="w-24 h-24 rounded-full object-cover m-4  border border-blue-500">
            <img src="{{ asset('images/logo-myprotein.png') }}" alt="Logo 4" class="w-24 h-24 rounded-full object-cover m-4">
        </div>
        <div class="flex justify-center space-x-4">
            <img src="{{ asset('images/logo-nutripure.png') }}" alt="Logo 5" class="w-24 h-24 rounded-full object-cover mx-8 my-4">
            <img src="{{ asset('images/logo-vert.png') }}" alt="Logo 6" class="w-24 h-24 rounded-full object-cover mx-8 my-4">
        </div>
    </div>
</div>

</body>
<a href="{{ route('platform.index') }}">Accéder au back office</a>
</html>
