<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>ICA</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body >
    <div>
        <header class="bg-black text-white p-10 relative">
            <div class="flex justify-center items-center">
                <h1 class="mr-4 text-4xl font-bold text-white/100">A Caminho do Alvo</h1>
                <a href="/">
                    <img src="{{Vite::asset('resources/images/ica_logo.png')}}" alt="logo" class="w-[60px]">
                </a>
            </div>
            <div class="absolute bottom-10 right-10">
                <x-btn-cancel>
                    @guest
                    <a href="{{route('login.create')}}">Login</a>
                    @endguest
                    @auth
                    <a href="{{route('login.destroy')}}">Logout</a>
                    @endauth
                </x-btn-cancel>
                
            </div>
         
        </header>
        <main class="p-10">
            {{$slot}}
        </main>
        <footer>
            
        </footer>
    </div>
</body>
</html>