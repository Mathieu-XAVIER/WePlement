<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WePlement - Produits</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@include('front.components.pop-up')
@include('front.components.header')
@include('front.components.navigation')

<div
    class="relative bg-cover bg-center text-white flex flex-col items-center justify-center py-24 px-10 object-contain mb-20"
    style="background-image: url('{{ asset('images/home-background.jpeg') }}')">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="z-10 max-w-xl text-center">
        <h2 class="text-4xl font-bold mb-8">Performance</h2>
        <p class="text-base mb-8">Ne manquer plus jamais d’un complément, sans y penser une seule seconde. Choisisez,
            modifier et switcher les produits et les dates de vos abonnement sans aucun coup supplémentaire.</p>
    </div>
</div>

@livewire('products.listing')

@include('front.components.footer')
</body>
</html>
