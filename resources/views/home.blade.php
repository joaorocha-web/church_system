<x-layout>
    <style>
        .windows{
            display: grid;
            grid-template-columns: repeat(auto-fit ,minmax(300px, 1fr));
        }
        .card{
            height: 300px;
        }
        
        .bg-igreja-responsive {
        background-image: url('{{asset('imagem-igreja-800.jpg')}}');
        }

        @media (min-width: 768px) {
        .bg-igreja-responsive {
            background-image: url('{{asset('imagem-igreja-1080.jpg')}}');
        }

        @media (min-width: 1080px) {
        .bg-igreja-responsive {
            background-image: url('{{asset('imagem-igreja-1920.jpg')}}');
        }   
        }
}
    </style>
    <div>
        <nav class="p-2 bg-gray-900">
            <ul class="flex justify-center gap-10">
                <li class="hover:underline p-2 rounded hover:bg-white/20">
                    <a href="">Minha Escala</a>
                </li>
                <li class="hover:underline p-2 rounded hover:bg-white/20">
                    <a href="">Calendário Igreja</a>
                </li>
                <li class="hover:underline p-2 rounded hover:bg-white/20">
                    <a href="">Ministérios</a>
                </li>
                
            </ul> 
        </nav>
    </div>
    <div class="windows" style="--columns: 4">
        <x-window style="background-image: url('{{asset('retiro.jpeg')}}')">
            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/10 transition-all duration-500"></div>
            <x-icon class="bi bi-house z-1"/>
            <h2 class="text-bold font-bold group-hover:scale-140 transition-scale duration-300 group-hover:mb-4 z-1">Ministério Louvor</h2>
            <a href="{{route('member.create')}}" class="mt-2 border rounded px-1 group-hover:scale-140 transition-scale duration-300 hover:bg-white/20">Cadastrar</a>
        </x-window>
        <x-window style="background-image: url('{{asset('comunhao.jpg')}}')">
            <div class="absolute inset-0 bg-black/50 group-hover:bg-black/20 transition-all duration-500"></div>
            <x-icon class="bi bi-people-fill z-1"/>
            <h2 class="text-bold font-bold group-hover:scale-140 transition-scale duration-300 group-hover:mb-4 z-1"> Hall de Membros!</h2>
            <a href="{{route('member.index')}}" class="mt-2 border rounded px-1 group-hover:scale-140 transition-scale duration-300 hover:bg-white/20">Analisar</a>
        </x-window>
    </div>

    
</x-layout>