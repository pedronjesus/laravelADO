<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Painel de Controle - AquaControl') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Card 1 -->
                <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border border-gray-700">
                    <div class="text-gray-400 text-sm font-medium">Categorias Registradas</div>
                    <div class="text-4xl font-bold text-white mt-2">{{ $totalTypes }}</div>
                    <div class="mt-4">
                        <a href="{{ route('types.index') }}" class="inline-flex items-center text-indigo-400 text-sm font-semibold hover:text-indigo-300">
                            Gerenciar categorias &rarr;
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border border-gray-700">
                    <div class="text-gray-400 text-sm font-medium">Lotes de Peixes / Tanques Ativos</div>
                    <div class="text-4xl font-bold text-white mt-2">{{ $totalFish }}</div>
                    <div class="mt-4">
                        <a href="{{ route('fishes.index') }}" class="inline-flex items-center text-indigo-400 text-sm font-semibold hover:text-indigo-300">
                            Gerenciar tanques &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>