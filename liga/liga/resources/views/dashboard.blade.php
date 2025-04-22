<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard dels usuaris tipus admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="p-6 bg-white border-b border-gray-200">
                <a href="{{ route('register') }}" class="block mb-4 text-blue-600 hover:text-blue-800">
                    Crea un nou usuari
                </a>
                
                <a href="{{ url('teams') }}" class="block mb-4 text-blue-600 hover:text-blue-800">
                    Equipos: visualitza, actualitza i elimina registres
                </a>
                
                <a href="{{ url('teams/create') }}" class="block mb-4 text-blue-600 hover:text-blue-800">
                    Equipos: crea un nou equip
                </a>
                
                <a href="{{ route('jugadores.create') }}" class="block mb-4 text-blue-600 hover:text-blue-800">
                    Jugadors: afegeix un nou jugador
                </a>
                <a href="{{ route('jugadores.index') }}" class="block mb-4 text-blue-600 hover:text-blue-800">
                 Jugadores: visualitza la llista de jugadors
                </a>
            </div>
        </div>
    </div>
</x-app-layout>