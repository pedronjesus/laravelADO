<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fish Manager - Bem-vindo</title>
    <!-- Estilo customizado do projeto -->
    <link rel="stylesheet" href="{{ asset('css/fish-theme.css') }}">
</head>
<body style="display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; background-color: #f7f4ef;">

    <div class="custom-card" style="text-align: center; max-width: 480px; width: 90%; padding: 40px 30px; border-top: 6px solid #1e6091;">
        <!-- Logo e Título com Ícone em destaque Terroso -->
        <div style="font-size: 52px; margin-bottom: 10px;">🐟</div>
        
        <h1 style="color: #1e6091; font-size: 28px; margin: 0 0 8px 0; font-weight: bold;">
            Fish Manager
        </h1>
        
        <p style="color: #8c531e; font-weight: 600; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">
            Gestão & Catalogação
        </p>

        <p style="color: #57534e; font-size: 15px; margin-bottom: 30px; line-height: 1.5;">
            Sistema simplificado para cadastro de peixes e gerenciamento dos seus habitats de água doce e salgada[cite: 1, 2].
        </p>

        <!-- Botões de Ação com combinação Azul x Terroso -->
        @if (Route::has('login'))
            <div style="display: flex; flex-direction: column; gap: 14px;">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn-primary-fish" style="text-align: center; padding: 12px; font-size: 16px;">
                        Acessar Painel (Dashboard)
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn-primary-fish" style="text-align: center; padding: 12px; font-size: 16px; background-color: #1e6091;">
                        Entrar no Sistema
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-earth-outline">
                            Criar uma Conta
                        </a>
                    @endif
                @endauth
            </div>
        @endif

        <div style="margin-top: 30px; border-top: 1px solid #e5dcce; padding-top: 15px; font-size: 12px; color: #8c531e;">
            Projeto Avaliativo Laravel • Fish Manager[cite: 1]
        </div>
    </div>

</body>
</html>