<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ICA</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white p-10">
    <div>
        <header>
            <div class="flex justify-center items-center">
                <h1 class="mr-4 text-3xl font-bold text-white/100">A Caminho do Alvo</h1>
                <a href="/">
                    <img src="{{Vite::asset('resources/images/ica_logo.png')}}" alt="logo" class="w-[55px]">
                </a>
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