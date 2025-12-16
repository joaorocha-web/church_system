<x-layout>
    <div class="py-10 flex justify-center">
        <form action="{{route('events.store')}}" method="post">
            @csrf
            <label for="title">Nome do Evento</label>
            <x-form-input name="title" id="title" type="text" />
            <label for="date">Data do Evento</label>
            <x-form-input name="date" id="date" type="date" />
            <label for="description">Descrição do Evento</label>
            <x-form-input name="description" id="description" type="text" />
            <x-btn-primary type="submit">Criar Evento</x-btn-primary>
        </form>
    </div>
</x-layout>