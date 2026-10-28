<x-app-layout>
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 style="font-size: 22px; font-weight: bold; color: var(--earth-dark);">Tipos de Peixe</h2>
        <a href="{{ route('types.create') }}" class="btn-primary-fish">+ Cadastrar Tipo</a>
    </div>

    @if(session('success'))
        <div style="background-color: #dcfce7; color: #166534; padding: 12px; border-radius: 6px; margin-bottom: 20px; font-size: 14px;">
            {{ session('success') }}
        </div>
    @endif

    <div class="custom-card">
        <table class="custom-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Tipo</th>
                    <th>Qtd. Peixes Cadastrados</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($types as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td><strong>{{ $type->name }}</strong></td>
                        <td>
                            <span style="background-color: #e0f2fe; color: #0369a1; padding: 4px 10px; border-radius: 12px; font-weight: 600; font-size: 13px;">
                                {{ $type->fish_count ?? $type->fish->count() }} peixe(s)
                            </span>
                        </td>
                        <td style="display: flex; gap: 12px; align-items: center;">
                            <a href="{{ route('types.show', $type) }}" style="color: #1e6091; font-weight: 600; text-decoration: none;">Ver</a>
                            <a href="{{ route('types.edit', $type) }}" style="color: #c27d38; font-weight: 600; text-decoration: none;">Editar</a>
                            <form action="{{ route('types.destroy', $type) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este tipo?');" style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; color: #dc2626; font-weight: 600; cursor: pointer; padding: 0;">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="text-align: center; padding: 20px; color: #64748b;">Nenhum tipo de peixe cadastrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div style="margin-top: 20px;">
            {{ $types->links() }}
        </div>
    </div>
</x-app-layout>