<x-app-layout>
    <div
        class="relative bg-cover bg-center text-white flex flex-col items-center justify-center py-24 px-10 object-contain"
        style="background-image: url('{{ asset('images/home-background.jpeg') }}')">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="z-10 max-w-xl text-center">
            <h2 class="text-4xl font-bold mb-8">La première plateforme d’abonnement de complément alimentaire</h2>
            <p class="text-base mb-8">Ne manquer plus jamais d’un complément, sans y penser une seule seconde.
                Choisisez,
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
            <p class="mb-4">Lpsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                printer
                took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <button class="bg-black text-white font-bold py-2 px-4 rounded-full">Voir les produits</button>
        </div>
        <div class="w-1/2 mt-16">
            <div class="flex justify-center">
                <img src="{{ asset('images/logo-m.png') }}" alt="Logo 1"
                     class="w-24 h-24 rounded-full object-cover m-4">
                <img src="{{ asset('images/logo-bulk.png') }}" alt="Logo 2"
                     class="w-24 h-24 rounded-full object-cover m-4">
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

    <div class="flex items-center px-44 py-16">
        <div class="w-full mt-12 px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Meilleure offre du jour</h2>
            <p class="mb-4 text-[#3B705E]">(Jusqu'à -40%)</p>
            <div class="grid grid-cols-4 gap-4">
                <a href="{{ route('products-listing') }}">
                    <div class="overflow-hidden px-4 my-3">
                        <img src="{{ asset('images/produit-bulk.png') }}"
                             class="w-full h-64 object-cover">
                        <div class="p-4">
                            <div class="inline-block rounded-full px-3 py-1 text-sm border border-black">
                                Performance
                            </div>
                            <h3 class="mt-2 text-lg uppercase font-bold">VITAMINE D3</h3>
                            <p class="mt-2 text-lg text-gray-700">6,50 €</p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('products-listing') }}">
                    <div class="overflow-hidden px-4 my-3">
                        <img src="{{ asset('images/produit-nutrimuscle.png') }}"
                             class="w-full h-64 object-cover">
                        <div class="p-4">
                            <div class="inline-block rounded-full px-3 py-1 text-sm border border-black">
                                Santé
                            </div>
                            <h3 class="mt-2 text-lg uppercase font-bold">OMEGA 3 EPAX</h3>
                            <p class="mt-2 text-lg text-gray-700">17,50 €</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="overflow-hidden px-4 my-3">
                        <img src="{{ asset('images/produit-bulk-2.png') }}"
                             class="w-full h-64 object-cover">
                        <div class="p-4">
                            <div class="inline-block rounded-full px-3 py-1 text-sm border border-black">
                                Santé
                            </div>
                            <h3 class="mt-2 text-lg uppercase font-bold">PROM3GA</h3>
                            <p class="mt-2 text-lg text-gray-700">19,49 €</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="overflow-hidden px-4 my-3">
                        <img src="{{ asset('images/produit-myprotein.png') }}"
                             class="w-full h-64 object-cover">
                        <div class="p-4">
                            <div class="inline-block rounded-full px-3 py-1 text-sm border border-black">
                                Sport
                            </div>
                            <h3 class="mt-2 text-lg uppercase font-bold">IMPACT WHEY</h3>
                            <p class="mt-2 text-lg text-gray-700">29.90 €</p>
                        </div>
                    </div>
                </a>
            </div>
            <a href="{{ route('products-listing') }}"
               class="bg-black text-white font-bold py-2 px-4 rounded-full mt-4 inline-block">Voir plus d'offres</a>
        </div>
    </div>

    <div class="flex items-center px-44 py-16 space-x-16">
        <div class="w-1/2 pr-8">
            <h2 class="text-3xl font-bold mb-4">N'abandonnez plus vos objectifs</h2>
            <p class="mb-4">Lpsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                printer
                took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
        <div class="w-1/2">
            <div class="slider whitespace-nowrap">
                <div class="inline-block">
                    <img src="{{ asset('images/cat-perf.png') }}" alt="Slider 1" class="w-full h-96 object-cover">
                </div>
                <div class="inline-block">
                    <img src="{{ asset('images/cat-sante.png') }}" alt="Slider 2" class="w-full h-96 object-cover">
                </div>
                <div class="inline-block">
                    <img src="{{ asset('images/cat-sport.png') }}" alt="Slider 3" class="w-full h-96 object-cover">
                </div>
                <div class="flex justify-between mt-2">
                    <div class="flex space-x-2">
                        <button class="bg-black text-white p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button class="bg-black text-white p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        class="relative bg-cover bg-center text-white flex flex-col items-center justify-center py-24 px-10 object-contain"
        style="background-image: url('{{ asset('images/image-home-2.png') }}')">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="z-10 max-w-xl text-center">
            <h2 class="text-4xl font-bold mb-8 uppercase">NOTRE MISSION</h2>
            <p class="text-base mb-8">Notre mission chez WePlement est de ne plus perdre de temps et moins de charges
                mental sur votre consommation de complément alimentaire grace a notre système d'abonnement innovant dopé
                à l'IA et une flexibilité à toute épreuve.</p>
            <a href="#" class="bg-white text-black font-bold py-2 px-4 rounded-full">Découvrir
                l'abonnement WePlement</a>
        </div>
    </div>

    <div class="flex items-center px-44 py-16">
        <div class="w-full mt-12 px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Ajouts de produits récents</h2>
            <div class="grid grid-cols-4 gap-4">
                <a href="{{ route('products-listing') }}">
                    <div class="overflow-hidden px-4 my-3">
                        <img src="{{ asset('images/produit-bulk.png') }}"
                             class="w-full h-64 object-cover">
                        <div class="p-4">
                            <div class="inline-block rounded-full px-3 py-1 text-sm border border-black">
                                Performance
                            </div>
                            <h3 class="mt-2 text-lg uppercase font-bold">VITAMINE D3</h3>
                            <p class="mt-2 text-lg text-gray-700">6,50 €</p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('products-listing') }}">
                    <div class="overflow-hidden px-4 my-3">
                        <img src="{{ asset('images/produit-nutrimuscle.png') }}"
                             class="w-full h-64 object-cover">
                        <div class="p-4">
                            <div class="inline-block rounded-full px-3 py-1 text-sm border border-black">
                                Santé
                            </div>
                            <h3 class="mt-2 text-lg uppercase font-bold">OMEGA 3 EPAX</h3>
                            <p class="mt-2 text-lg text-gray-700">17,50 €</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="overflow-hidden px-4 my-3">
                        <img src="{{ asset('images/produit-bulk-2.png') }}"
                             class="w-full h-64 object-cover">
                        <div class="p-4">
                            <div class="inline-block rounded-full px-3 py-1 text-sm border border-black">
                                Santé
                            </div>
                            <h3 class="mt-2 text-lg uppercase font-bold">PROM3GA</h3>
                            <p class="mt-2 text-lg text-gray-700">19,49 €</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="overflow-hidden px-4 my-3">
                        <img src="{{ asset('images/produit-myprotein.png') }}"
                             class="w-full h-64 object-cover">
                        <div class="p-4">
                            <div class="inline-block rounded-full px-3 py-1 text-sm border border-black">
                                Sport
                            </div>
                            <h3 class="mt-2 text-lg uppercase font-bold">IMPACT WHEY</h3>
                            <p class="mt-2 text-lg text-gray-700">29.90 €</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    @include('front.components.footer')
</x-app-layout>
