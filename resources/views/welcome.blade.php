<x-layout>
    @auth
    <h1>BEM VINDO {{auth()->user()->name}}</h1>
    @endauth
    <h2 class="text-3xl font-bold text-purple-600 mb-5">Funcionalidades:</h2>
    
    <ul>
        <li>Cadastro de membros</li>
        <li>Edição de membros</li>
        <li><a href="{{route('member.index')}}">Visualização de membros</a></li>
        <li>Cadastro de usuários</li>
        <li>Login e autenticação</li>
        <li>Logout</li>
    </ul>

</x-layout>