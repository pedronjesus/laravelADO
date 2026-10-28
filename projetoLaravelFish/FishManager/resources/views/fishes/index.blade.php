<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                {{ __('Gestão de Tanques & Lotes') }}
            </h2>
            <a href="{{ route('fishes.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-bold py-2 px-4 rounded shadow">
                + Novo Lote / Tanque
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 bg-green-800 border border-green-600 text-green-100 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="overflow-x-auto bg-gray-900 shadow-md rounded-lg p-6 border border-gray-800">
                <table class="w-full text-sm text-left text-gray-300">
                    <thead class="text-xs uppercase bg-gray-800 text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Identificação / Nome</th>
                            <th scope="col" class="px-6 py-3">Espécie / Categoria</th>
                            <th scope="col" class="px-6 py-3">Tanque</th>
                            <th scope="col" class="px-6 py-3">Peso (kg)</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                            <th scope="col" class="px-6 py-3 text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($fishes as $fish)
                            <tr class="border-b border-gray-800 hover:bg-gray-800/50">
                                <td class="px-6 py-4 font-medium text-white">{{ $fish->name }}</td>
                                <td class="px-6 py-4">{{ $fish->type->name ?? 'Sem categoria' }}</td>
                                <td class="px-6 py-4">
                                    <span class="bg-gray-700 text-gray-200 text-xs px-2 py-1 rounded">{{ $fish->tank_code ?? 'N/A' }}</span>
                                </td>
                                <td class="px-6 py-4">{{ $fish->weight ? number_format($fish->weight, 2, ',', '.') . ' kg' : '-' }}</td>
                                <td class="px-6 py-4">
                                    @if($fish->status === 'ativo')
                                        <span class="bg-green-900 text-green-300 text-xs font-medium px-2.5 py-0.5 rounded">Ativo</span>
                                    @elseif($fish->status === 'quarentena')
                                        <span class="bg-yellow-900 text-yellow-300 text-xs font-medium px-2.5 py-0.5 rounded">Quarentena</span>
                                    @else
                                        <span class="bg-red-900 text-red-300 text-xs font-medium px-2.5 py-0.5 rounded">Inativo</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right space-x-2">
                                    <a href="{{ route('fishes.edit', $fish) }}" class="text-blue-400 hover:underline">Editar</a>
                                    <form action="{{ route('fishes.destroy', $fish) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Deseja realmente excluir este registro?')" class="text-red-400 hover:underline">
                                            Excluir
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center text-gray-500">Nenhum registro encontrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>