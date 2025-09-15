<x-layout>
    <style>
        .windows{
            display: grid;
            grid-template-columns: repeat(auto-fit ,minmax(300px, 1fr));
            gap: 1rem;
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
    <div class="h-[400px] md:h-[350px] lg:h-[500px] bg-igreja-responsive bg-cover bg-center bg-no-repeat flex justify-center items-center relative" >
        <h1 class="text-beige font-bold text-2xl md:text-7xl z-1">SEJA BEM VINDO!</h1>
        <div class="absolute inset-0 bg-black/60"></div>
    </div>
    <div class="windows p-3" style="--columns: 4">
        <x-window style="background-image: url('{{asset('retiro.jpeg')}}')">
            <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-all duration-500"></div>
            <x-icon class="bi bi-house z-1"/>
            <h2 class="text-bold font-bold group-hover:scale-140 transition-scale duration-300 group-hover:mb-4 z-1"> Seja Membro!</h2>
            <a href="{{route('member.create')}}" class="mt-2 border rounded px-1 group-hover:scale-140 transition-scale duration-300 hover:bg-white/20">Cadastrar</a>
        </x-window>
        <x-window style="background-image: url('{{asset('comunhao.jpg')}}')">
            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all duration-500"></div>
            <x-icon class="bi bi-people-fill z-1"/>
            <h2 class="text-bold font-bold group-hover:scale-140 transition-scale duration-300 group-hover:mb-4 z-1"> Hall de Membros!</h2>
            <a href="{{route('member.index')}}" class="mt-2 border rounded px-1 group-hover:scale-140 transition-scale duration-300 hover:bg-white/20">Analisar</a>
        </x-window>
        <x-window style="background-image: url('{{asset('voluntariado.jpeg')}}')">
            <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-all duration-500"></div>
            <x-icon class="bi bi-house z-1"/>
            <h2 class="text-bold font-bold group-hover:scale-140 transition-scale duration-300 group-hover:mb-4 z-1"> Seja um Voluntário!</h2>
            <a href="{{route('member.create')}}" class="mt-2 border rounded px-1 group-hover:scale-140 transition-scale duration-300 hover:bg-white/20">Inscreva-se</a>
        </x-window>
       
        
    </div>

    

</x-layout>