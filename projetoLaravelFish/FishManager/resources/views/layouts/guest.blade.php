<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fish Manager - Autenticação</title>
    <!-- CSS Próprio do Projeto -->
    <link rel="stylesheet" href="{{ asset('css/fish-theme.css') }}">
</head>
<body>
    <div style="min-height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px;">
        <div style="margin-bottom: 20px; text-align: center;">
            <a href="/" style="font-size: 28px; font-weight: bold; color: #0284c7; text-decoration: none;">
                🐟 Fish Manager
            </a>
        </div>

        <div class="custom-card" style="width: 100%; max-width: 420px;">
            {{ $slot }}
        </div>
    </div>
</body>
</html>