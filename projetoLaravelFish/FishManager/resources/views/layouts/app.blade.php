<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fish Manager</title>
    <!-- CSS Próprio do Projeto -->
    <link rel="stylesheet" href="{{ asset('css/fish-theme.css') }}">
</head>
<body>
    <!-- Navbar HTML Puro -->
    <header style="background-color: #0284c7; padding: 15px 20px; color: white;">
        <div style="max-width: 1100px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
            <div style="font-size: 22px; font-weight: bold;">
                <a href="{{ route('dashboard') }}" style="color: white; text-decoration: none;">🐟 Fish Manager</a>
            </div>
            
            <nav style="display: flex; gap: 20px; align-items: center;">
                <a href="{{ route('dashboard') }}" style="color: white; text-decoration: none; font-weight: 600;">Dashboard</a>
                <a href="{{ route('types.index') }}" style="color: white; text-decoration: none; font-weight: 500;">Tipos de Peixe</a>
                <a href="{{ route('fishes.index') }}" style="color: white; text-decoration: none; font-weight: 500;">Peixes</a>
                
                <span style="font-size: 14px; opacity: 0.9;">| Olá, <strong>{{ Auth::user()->name }}</strong></span>

                <form method="POST" action="{{ route('logout') }}" style="margin: 0; display: inline;">
                    @csrf
                    <button type="submit" style="background: rgba(255,255,255,0.2); border: 1px solid white; color: white; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 13px;">
                        Sair
                    </button>
                </form>
            </nav>
        </div>
    </header>

    <!-- Conteúdo Principal -->
    <main style="max-width: 1100px; margin: 30px auto; padding: 0 20px;">
        {{ $slot }}
    </main>
</body>
</html>