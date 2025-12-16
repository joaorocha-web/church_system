<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>ICA</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles

</head>
<body class="">
    <style>
        
    </style>
    <div>
        <header class="bg-black shadow-xl/30  text-white p-4 md:p-6 flex justify-between">
            <div class="flex-col align-center ml-4">
                <span class="font-title text-center font-bold sm:text-2xl" ><a href="/home">A Caminho do Alvo</a></span>  
            </div>

            @guest
            <div class=" rounded p-1 hover:bg-white/20">
                <span><a href="{{route('login.create')}}">Login</a></span>
            </div>
            @endguest
            @auth
            <div class=" rounded p-1 hover:bg-white/20">
                <span><a href="{{route('login.destroy')}}">Logout</a></span>
            </div>
            @endauth
            
        </header>
        <main class="bg-black text-white">
            <div class="flex-col bg-[var(--color-beige)] text-center hidden" id="info">
                <ul>
                    <li class="hover:bg-white/10 border-t border-white"><a href="#">link</a></li>
                    <li class="hover:bg-white/t0 border-t border-white"><a href="#">link</a></li>
                    <li class="hover:bg-white/t0 border-t border-white"><a href="#">link</a></li>
                    <li class="hover:bg-white/t0 border-t border-white"><a href="#">link</a></li>

                </ul>
            </div>

            @livewireScripts
            @livewireCalendarScripts
            {{$slot}}
            
      
        </main>
        <footer>
            
        </footer>
    </div>
</body>
</html>