<x-layout>
<div class="py-10 flex justify-center">
  <form class="w-full max-w-lg" method="POST" action="{{route('member.store')}}">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="first_name">
          Nome
        </label>
        <x-form-input id="first_name" name="first_name" type="text" placeholder="Zacarias" value="{{old('first_name')}}"/>
        <x-error name="first_name"/>
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="last_name">
          Sobrenome
        </label>
        <x-form-input id="last_name" name="last_name" type="text" placeholder="Souza" value="{{old('last_name')}}"/>
        <x-error name="last_name"/>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="email">
          E-mail
        </label>
        <x-form-input id="email" name="email" type="email" placeholder="email@email.com" value="{{old('email')}}"/>
        <x-error name="email"/>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-5">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="telefone_1">
          Telefone
        </label>
        <x-form-input id="telefone_1" name="telefone_1"  type="text" placeholder="ex: (32)99999999" value="{{old('telefone_1')}}"/>
        <x-error name="telefone_1"/>
      </div>
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="telefone_2">
          Telefone
        </label>
        <div class="relative">
          <x-form-input id="telefone_2" name="telefone_2" type="text" placeholder="ex: (32)99999999" value="{{old('telefone_2')}}"/>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-5">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="birth_date">
          Nascimento
        </label>
        <x-form-input id="birth_date" name="birth_date"  type="date"/>
        <x-error name="birth_date"/>
      </div>
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="membership_start">
          Membro desde
        </label>
        <div class="relative">
          <x-form-input id="membership_start" name="membership_start" type="date"/>
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
        <x-error name="gender_id"/>
      </div>
    </div>
    <x-btn-cancel>
      <a href="/">
        Cancelar
      </a>
    </x-btn-cancel>
    <x-btn-primary type="submit">
      Salvar
    </x-btn-primary>

  </form>
</div>
</x-layout>