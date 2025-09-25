<x-layout>
    <div class="flex justify-center mb-5 text-2xl">
        <h1 class="text-3xl">Nossos Ministérios</h1>
    </div>

    @foreach($ministries as $ministry)
        <div class="flex flex-col sm:flex-row sm:items-center mb-5">
        
            <div class="w-full p-5 text-justify">
                <h2 class="text-2xl mb-3">{{$ministry->name}}</h2>
                <p>
                    {{$ministry->description}}
                </p>
                <x-btn-cancel class="mt-2"><a href="{{route('ministry.edit', $ministry->id)}}">Editar</a></x-btn-cancel>
                <x-btn-primary class="mt-2"><a href="{{route('ministry.subscribe', $ministry->id)}}">Quero Servir</a></x-btn-primary>
            </div>
            <div class="w-full flex justify-center p-30">
                <img class="imageReveal grayscale" src="{{ asset('storage/' . $ministry->image_url) }}" alt="Imagem do ministério">
            </div>
        </div>
    @endforeach
 
</x-layout>