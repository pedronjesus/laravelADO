<x-guest-layout>
    <h2 style="text-align: center; margin-bottom: 24px; color: #0369a1; font-size: 20px;">Entrar na sua conta</h2>

    @if (session('status'))
        <div style="background-color: #dcfce7; color: #166534; padding: 10px; border-radius: 6px; margin-bottom: 15px; font-size: 14px;">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">E-mail</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="seu@email.com">
            @if ($errors->has('email'))
                <span style="color: #dc2626; font-size: 12px; margin-top: 4px; display: block;">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="••••••••">
            @if ($errors->has('password'))
                <span style="color: #dc2626; font-size: 12px; margin-top: 4px; display: block;">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group" style="display: flex; align-items: center; gap: 8px;">
            <input id="remember_me" type="checkbox" name="remember">
            <label for="remember_me" style="margin-bottom: 0; font-weight: normal; font-size: 14px; cursor: pointer;">Lembrar de mim</label>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 24px;">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" style="font-size: 13px; color: #0284c7; text-decoration: none;">
                    Esqueceu a senha?
                </a>
            @endif

            <button type="submit" class="btn-primary-fish">
                Entrar
            </button>
        </div>

        <div style="text-align: center; margin-top: 20px; font-size: 14px; border-top: 1px solid #e2e8f0; padding-top: 15px;">
            Ainda não tem conta? <a href="{{ route('register') }}" style="color: #0284c7; font-weight: 600; text-decoration: none;">Cadastre-se</a>
        </div>
    </form>
</x-guest-layout>