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
    
    <div class="h-[400px] md:h-[350px] lg:h-[500px] flex justify-center items-center relative" >
        <h1 class="text-beige font-bold text-2xl md:text-7xl z-1">SEJA BEM VINDO!</h1>
        {{-- <div class="absolute inset-0 bg-black/70"></div> --}}
    </div>

    <div class="windows" style="--columns: 4">
        <x-window style="background-image: url('{{asset('retiro.jpeg')}}')">
            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/10 transition-all duration-500"></div>
            <x-icon class="bi bi-house z-1"/>
            <h2 class="text-bold font-bold group-hover:scale-140 transition-scale duration-300 group-hover:mb-4 z-1"> Seja Membro!</h2>
            <a href="{{route('member.create')}}" class="mt-2 border rounded px-1 group-hover:scale-140 transition-scale duration-300 hover:bg-white/20">Cadastrar</a>
        </x-window>
        <x-window style="background-image: url('{{asset('comunhao.jpg')}}')">
            <div class="absolute inset-0 bg-black/50 group-hover:bg-black/20 transition-all duration-500"></div>
            <x-icon class="bi bi-people-fill z-1"/>
            <h2 class="text-bold font-bold group-hover:scale-140 transition-scale duration-300 group-hover:mb-4 z-1"> Hall de Membros!</h2>
            <a href="{{route('member.index')}}" class="mt-2 border rounded px-1 group-hover:scale-140 transition-scale duration-300 hover:bg-white/20">Analisar</a>
        </x-window>
        <x-window style="background-image: url('{{asset('voluntariado.jpeg')}}')">
            <div class="absolute inset-0 bg-black/50 group-hover:bg-black/10 transition-all duration-500"></div>
            <x-icon class="bi bi-house z-1"/>
            <h2 class="text-bold font-bold group-hover:scale-140 transition-scale duration-300 group-hover:mb-4 z-1"> Seja um Voluntário!</h2>
            <a href="{{route('member.create')}}" class="mt-2 border rounded px-1 group-hover:scale-140 transition-scale duration-300 hover:bg-white/20">Inscreva-se</a>
        </x-window> 
    </div>

    <div class="flex flex-col sm:flex-row p-10 items-center gap-8">
        <div class="w-full">
            <div class="flex justify-center"><img class="w-[80px] mb-10 autoRotate " src="{{asset('ica_logo.PNG')}}" alt=""></div>
            <h3 class="text-2xl">Quem nós somos:</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque laudantium rem at, labore debitis quas praesentium sapiente placeat, nisi voluptatibus repudiandae dicta nobis pariatur facere consequuntur alias molestias ducimus fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nulla dicta repellendus laboriosam dolorum corrupti vero nemo delectus ipsam provident, perferendis doloremque consequuntur et ratione vel laudantium nam ut obcaecati.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque laudantium rem at, labore debitis quas praesentium sapiente placeat, nisi voluptatibus repudiandae dicta nobis pariatur facere consequuntur alias molestias ducimus fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nulla dicta repellendus laboriosam dolorum corrupti vero nemo delectus ipsam provident, perferendis doloremque consequuntur et ratione vel laudantium nam ut obcaecati.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque laudantium rem at, labore debitis quas praesentium sapiente placeat, nisi voluptatibus repudiandae dicta nobis pariatur facere consequuntur alias molestias ducimus fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="https://www.instagram.com/igrejaacaminhodoalvo/" target="_blanck">
                <img class="w-[30px] mt-3" src="{{asset('icon-instagram.png')}}" alt="">
            </a>
        </div>
        <div class="w-full imageReveal">
            <img src="{{asset('comunhao.jpg')}}" alt="">
        </div>
    </div>

    

</x-layout>