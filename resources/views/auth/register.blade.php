<x-layout>
<div class="pt-10 flex justify-center">
  <form class="w-full max-w-lg" method="POST" action="{{route('user.store')}}">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
          E-mail
        </label>
        <x-form-input id="email" name="email" type="email" value="{{old('email')}}"/>
        <x-error name="email"/>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
          Crie sua Senha
        </label>
        <x-form-input id="password" name="password" type="password" placeholder="Sua senha deve conter 8 dígitos" value="1234j1234"/>
        <x-error name="password"/>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password_confirmation">
          Confirme sua senha
        </label>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password_confirmation" >
        <x-form-input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirme sua senha" value="1234j1234"/>
        <x-error name="password_confirmation"/>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="is_admin">
          É administrador?
        </label>
        <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="is_admin" name="is_admin">
          <option value="0">Não</option>
          <option value="1">Sim</option>
        </select>
      </div>
    </div>

    
    <button class="bg-gray-900 hover:bg-gray-700 text-white font-bold mt-3 py-2 px-4 border border-gray-700 rounded mr-3">
      <a href="/">
        Cancelar
      </a>
    </button>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-3 py-2 px-4 border border-blue-700 rounded">
      Salvar
    </button>

  </form>
</div>
</x-layout>