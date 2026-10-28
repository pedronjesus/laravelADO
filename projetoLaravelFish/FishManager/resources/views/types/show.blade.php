<x-app-layout>
    <div style="max-width: 700px; margin: 0 auto;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2 style="font-size: 22px; font-weight: bold; color: var(--earth-dark);">Detalhes do Tipo</h2>
            <a href="{{ route('types.index') }}" style="background-color: #e5dcce; color: #57534e; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-weight: 600;">&larr; Voltar</a>
        </div>

        <div class="custom-card">
            <div style="margin-bottom: 15px;">
                <span style="font-size: 12px; color: #64748b; text-transform: uppercase; font-weight: 600;">ID do Registro</span>
                <p style="font-size: 18px; font-weight: bold; margin: 0;">#{{ $type->id }}</p>
            </div>

            <div style="margin-bottom: 20px;">
                <span style="font-size: 12px; color: #64748b; text-transform: uppercase; font-weight: 600;">Nome do Habitat / Tipo</span>
                <p style="font-size: 20px; font-weight: bold; color: #1e6091; margin: 0;">{{ $type->name }}</p>
            </div>

            <hr style="border: 0; border-top: 1px solid #e5dcce; margin: 20px 0;">

            <h3 style="font-size: 16px; font-weight: bold; color: var(--earth-dark); margin-bottom: 12px;">Peixes associados a este tipo:</h3>
            
            <ul style="padding-left: 20px; margin: 0;">
                @forelse($type->fish as $fish)
                    <li style="margin-bottom: 6px; color: #2d2a26;">
                        <strong>{{ $fish->name }}</strong> — <span style="color: #64748b;">Cor: {{ $fish->color }}</span>
                    </li>
                @empty
                    <li style="color: #94a3b8; list-style: none;">Nenhum peixe associado a este tipo até o momento.</li>
                @endforelse
            </ul>
        </div>
    </div>
</x-app-layout>