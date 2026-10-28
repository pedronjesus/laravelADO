<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AquaControl • Gestão & Catalogação</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col justify-center items-center p-6 antialiased">

    <!-- Container Principal -->
    <div class="max-w-md w-full bg-slate-800/80 backdrop-blur-md border border-slate-700/60 rounded-2xl p-8 shadow-2xl text-center space-y-6">
        
        <!-- Ícone / Logo com brilho dourado -->
        <div class="relative inline-block">
            <div class="absolute -inset-1 bg-amber-500/20 rounded-full blur-lg"></div>
            <div class="relative bg-slate-900 border border-amber-500/30 p-4 rounded-full inline-flex items-center justify-center text-4xl shadow-md">
                🐟
            </div>
        </div>

        <!-- Título & Subtítulo -->
        <div class="space-y-2">
            <h1 class="text-3xl font-extrabold tracking-tight text-white">
                Aqua<span class="text-amber-400">Control</span>
            </h1>
            <p class="text-xs font-semibold tracking-widest text-amber-400/90 uppercase">
                Gestão & Catalogação
            </p>
        </div>

        <!-- Descrição do Sistema -->
        <p class="text-sm text-slate-400 leading-relaxed px-2">
            Sistema otimizado para o controlo de lotes, monitorização de tanques e acompanhamento de habitats de água doce e salgada.
        </p>

        <!-- Botões de Ação -->
        <div class="space-y-3 pt-2">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" 
                       class="block w-full bg-amber-500 hover:bg-amber-400 text-slate-950 font-bold py-3 px-4 rounded-xl shadow-lg hover:shadow-amber-500/20 transition-all duration-200">
                        Aceder ao Painel
                    </a>
                @else
                    <a href="{{ route('login') }}" 
                       class="block w-full bg-amber-500 hover:bg-amber-400 text-slate-950 font-bold py-3 px-4 rounded-xl shadow-lg hover:shadow-amber-500/20 transition-all duration-200">
                        Entrar no Sistema
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                           class="block w-full bg-slate-700/60 hover:bg-slate-700 text-slate-200 font-semibold py-3 px-4 rounded-xl border border-slate-600/80 transition-all duration-200">
                            Criar uma Conta
                        </a>
                    @endif
                @endauth
            @endif
        </div>

        <!-- Linha Divisória & Rodapé -->
        <div class="pt-4 border-t border-slate-700/50">
            <p class="text-xs text-slate-500">
                Projeto Avaliativo Laravel • <span class="text-slate-400 font-medium">AquaControl</span>
            </p>
        </div>

    </div>

</body>
</html>