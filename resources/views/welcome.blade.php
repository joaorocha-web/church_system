<x-layout>
    <h2 class="text-xl font-bold text-green-400">Funcionalidades:</h2>
    <button
    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
        ><a href="{{route('member.index')}}">Visualizar Membros</a></button>
    <button
    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
        ><a href="{{route('member.create')}}">Cadastro de Membros</a></button>
    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Edição de Membros
    </button>

</x-layout>