<x-layout>
  <div class="pt-10 flex flex-col items-center justify-center">
    <h2 class="text-2xl">Faça seu Login</h2>
  <form class="w-full max-w-lg" method="POST" action="{{route('login.store')}}">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
          E-mail
        </label>
        <x-form-input id="email" name="email" type="email" :value="old('email')" placeholder="email@email.com"/>
        <x-error name="email"/>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
          Senha
        </label>
        <x-form-input id="password" name="password" type="password" placeholder="Sua senha deve conter 8 dígitos"/>
        <x-error name="password"/>
      </div>
    </div>
    
    <button class="bg-gray-900 hover:bg-gray-700 text-white font-bold mt-3 py-2 px-4 border border-gray-700 rounded mr-3">
      <a href="/">
        Cancelar
      </a>
    </button>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-3 py-2 px-4 border border-blue-700 rounded">
      Entrar
    </button>
    
  </form>
  <div class="mt-6 mb-50">
    <span class="p-2 hover:bg-white/20 rounded">Não é cadastrado? <a href="{{route('user.create')}}" class="hover:underline">Criar usúario</a></span>
  </div>

</div>  
</x-layout>