<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight mb-4 text-left">
                {{ __('Mon compte') }}
            </h2>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <ul class="menu space-y-6 text-lg pl-0">
                    <li><a href="{{ route('profile') }}" class="text-gray-500 hover:text-black font-bold text-left">{{ __('Mon profil') }}</a></li>
                    <li><a href="{{ route('weshipps.listing') }}" class="text-gray-500 hover:text-black font-bold text-left">{{ __('Mes weshipps') }}</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-black font-bold text-left">{{ __('Aide ?') }}</a></li>
                    <li>
{{--                        <button wire:click="logout" class="w-full text-start text-red-500 hover:text-red-700 font-bold text-left">--}}
{{--                            {{ __('Log Out') }}--}}
{{--                        </button>--}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">{{ __('Déconnexion') }}</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
