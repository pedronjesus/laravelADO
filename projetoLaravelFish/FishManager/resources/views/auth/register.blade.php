<x-guest-layout>
    <h2 style="text-align: center; margin-bottom: 24px; color: #0369a1; font-size: 20px;">Criar Nova Conta</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nome Completo</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Ex: Maria Silva">
            @if ($errors->has('name'))
                <span style="color: #dc2626; font-size: 12px; margin-top: 4px; display: block;">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="seu@email.com">
            @if ($errors->has('email'))
                <span style="color: #dc2626; font-size: 12px; margin-top: 4px; display: block;">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="••••••••">
            @if ($errors->has('password'))
                <span style="color: #dc2626; font-size: 12px; margin-top: 4px; display: block;">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Senha</label>
            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••">
            @if ($errors->has('password_confirmation'))
                <span style="color: #dc2626; font-size: 12px; margin-top: 4px; display: block;">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 24px;">
            <a href="{{ route('login') }}" style="font-size: 13px; color: #0284c7; text-decoration: none;">
                Já é cadastrado?
            </a>

            <button type="submit" class="btn-primary-fish">
                Cadastrar
            </button>
        </div>
    </form>
</x-guest-layout>