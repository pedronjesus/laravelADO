<div class="space-y-4">
    <!-- Campo: Nome / Identificação -->
    <div>
        <label for="name" class="block text-sm font-medium text-gray-200">Nome / Identificação do Lote</label>
        <input type="text" name="name" id="name" 
               value="{{ old('name', $fish->name ?? '') }}" required
               class="mt-1 block w-full rounded-md bg-gray-800 border-gray-700 text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
    </div>

    <!-- Campo: Categoria / Espécie -->
    <div>
        <label for="type_id" class="block text-sm font-medium text-gray-200">Categoria / Espécie</label>
        <select name="type_id" id="type_id" required 
                class="mt-1 block w-full rounded-md bg-gray-800 border-gray-700 text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            <option value="">Selecione uma categoria...</option>
            @foreach($types as$type)
                <option value="{{ $type->id }}" {{ old('type_id', $fish->type_id ?? '') == $type->id ? 'selected' : '' }}>
                    {{ $type->name }}
                </option>
            @endforeach
        </select>
        @error('type_id')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
    </div>

    <!-- Campo: Peso (kg) -->
    <div>
        <label for="weight" class="block text-sm font-medium text-gray-200">Peso Estimado (kg)</label>
        <input type="number" step="0.01" name="weight" id="weight" 
               value="{{ old('weight', $fish->weight ?? '') }}" 
               placeholder="Ex: 12.50"
               class="mt-1 block w-full rounded-md bg-gray-800 border-gray-700 text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        @error('weight')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
    </div>

    <!-- Campo: Código do Tanque / Lote -->
    <div>
        <label for="tank_code" class="block text-sm font-medium text-gray-200">Código do Tanque / Lote</label>
        <input type="text" name="tank_code" id="tank_code" 
               value="{{ old('tank_code', $fish->tank_code ?? '') }}" 
               placeholder="Ex: TANK-A1"
               class="mt-1 block w-full rounded-md bg-gray-800 border-gray-700 text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        @error('tank_code')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
    </div>

    <!-- Campo: Status -->
    <div>
        <label for="status" class="block text-sm font-medium text-gray-200">Status do Lote</label>
        <select name="status" id="status" class="mt-1 block w-full rounded-md bg-gray-800 border-gray-700 text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            <option value="ativo" {{ old('status', $fish->status ?? '') == 'ativo' ? 'selected' : '' }}>Ativo</option>
            <option value="inativo" {{ old('status', $fish->status ?? '') == 'inativo' ? 'selected' : '' }}>Inativo</option>
            <option value="quarentena" {{ old('status', $fish->status ?? '') == 'quarentena' ? 'selected' : '' }}>Quarentena</option>
        </select>
        @error('status')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="pt-4">
        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded shadow">
            Salvar Registro
        </button>
    </div>
</div>