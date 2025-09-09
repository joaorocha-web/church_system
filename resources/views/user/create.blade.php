<x-layout>
<div class="pt-10 flex justify-center">
  <form class="w-full max-w-lg" method="POST" action="{{route('user.store', $member->member->id)}}">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
          Nome
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight cursor-not-allowed opacity-50" id="name" name="name" type="text" 
            value="{{$member->member->first_name}} {{$member->member->last_name}}" readonly>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
          E-mail
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight cursor-not-allowed opacity-50" id="email" name="email" type="email" value="{{$member->email}}" readonly>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
          Senha
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="password" name="password" type="password" placeholder="Sua senha deve conter 8 dígitos" autofocus>
        @error ("password")
            <p>Senha inválida</p>
        @enderror
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