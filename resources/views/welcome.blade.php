<x-layout>
    <h2 class="text-3xl font-bold text-purple-600 mb-5">Funcionalidades:</h2>
    <button
    class="block bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mb-3"
        ><a href="{{route('member.index')}}">Visualizar Membros</a></button>
    <button
    class="block bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mb-3"
        ><a href="{{route('member.create')}}">Cadastro de Membros</a></button>
    <button class="block bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mb-3">
        <a href="{{route('user.create')}}">Criar usuário</a>
    </button>
    <button class="block bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mb-3">
        Login e autenticação
    </button>

</x-layout>