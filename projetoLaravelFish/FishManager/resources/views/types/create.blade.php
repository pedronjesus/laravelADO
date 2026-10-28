<x-app-layout>
    <div style="max-width: 600px; margin: 0 auto;">
        <h2 style="font-size: 22px; font-weight: bold; color: var(--earth-dark); margin-bottom: 20px;">Cadastrar Novo Tipo</h2>

        <div class="custom-card">
            <form action="{{ route('types.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nome do Tipo</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Ex: Rio, Mar, Lago..." required autofocus>
                    @error('name') 
                        <span style="color: #dc2626; font-size: 12px; margin-top: 4px; display: block;">{{ $message }}</span> 
                    @enderror
                </div>

                <div style="display: flex; justify-content: flex-end; gap: 12px; margin-top: 20px;">
                    <a href="{{ route('types.index') }}" style="background-color: #e5dcce; color: #57534e; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-weight: 600;">Cancelar</a>
                    <button type="submit" class="btn-primary-fish">Salvar Tipo</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>