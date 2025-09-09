<x-layout>
<div class="pt-10 flex justify-center">
  <form class="w-full max-w-lg" method="POST" action="{{route('member.store')}}">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="first_name">
          Nome
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="first_name" name="first_name" type="text" placeholder="Zacarias" value="{{old('first_name')}}">
        @error ('first_name')
        <p class="text-red-500 text-xs italic">Por favor, preencha esse campo.</p>
        @enderror
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="last_name">
          Sobrenome
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="last_name" name="last_name" type="text" placeholder="Souza" value="{{old('last_name')}}">
        @error ('last_name')
        <p class="text-red-500 text-xs italic">Por favor, preencha esse campo.</p>
        @enderror
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
          E-mail
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" name="email" type="email" placeholder="email@email.com" value="{{old('email')}}">
        @error ('email')
        <p class="text-red-500 text-xs italic">Insira um e-mail válido.</p>
        @enderror
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-5">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefone_1">
          Telefone
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="telefone_1" name="telefone_1"  type="text" placeholder="ex: (32)99999999" value="{{old('telefone_1')}}">
        @error ('telefone_1')
        <p class="text-red-500 text-xs italic">Esse campo é obrigatório</p>
        @enderror
      </div>
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefone_2">
          Telefone
        </label>
        <div class="relative">
          <input class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="telefone_2" name="telefone_2" type="text" placeholder="ex: (32)99999999" value="{{old('telefone_2')}}">
        </div>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-5">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="birth_date">
          Nascimento
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="birth_date" name="birth_date"  type="date">
        @error ('birth_date')
        <p class="text-red-500 text-xs italic">Esse campo é obrigatório</p>
        @enderror
      </div>
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="membership_start">
          Membro desde
        </label>
        <div class="relative">
          <input class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="membership_start" name="membership_start" type="date">
        </div>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-5">
      <div class="w-full px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="gender_id">
          Gênero
        </label>
        <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="gender_id" name="gender_id">
          <option value="">Selecione</option>
          <option value="1">Masculino</option>
          <option value="2">Feminino</option>
        </select>
        @error ('gender_id')
        <p class="text-red-500 text-xs italic">Selecione uma opção.</p>
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