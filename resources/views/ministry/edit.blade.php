<x-layout>
<div class="py-10 flex justify-center">
  <form class="w-full max-w-lg" method="POST" action="{{route('ministry.update', $ministry->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="name">
          Nome do Ministério
        </label>
        <x-form-input id="name" name="name" type="text" placeholder="Zacarias" value="{{$ministry->name}}" required/>
        <x-error name="name"/>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="description">
          Descrição
        </label>
        <textarea name="description" id="description" cols="60" rows="10" 
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>{{$ministry->description ? $ministry->description : old('description')}}
        </textarea>
        <x-error name="description"/>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="image_url">
          Imagem
        </label>
        <input class="bg-gray-300 text-black p-5" type="file" name="image_url" id="image_url">
        <x-error name="image_url"/>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-5">
      <div class="w-full px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="leader_id">
          Líder
        </label>
        <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="leader_id" name="leader_id" >
          <option value="">Selecione</option>
          @foreach($users as $user)
            <option value="{{$user->id}}" >{{$user->name}}</option>
          @endforeach
        </select>
        <x-error name="leader_id"/>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-5">
      <div class="w-full px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="is_active">
          Ativo
        </label>
        <input type="checkbox" name="is_active" id="is_active" value="1" class="mr-2 leading-tight" {{$ministry->is_active ? 'checked' : ''}}>
        <x-error name="is_active"/>
      </div>
    </div>
    <x-btn-cancel>
      <a href="{{route('ministry.index')}}">
        Cancelar
      </a>
    </x-btn-cancel>
    <x-btn-primary type="submit">
      Salvar
    </x-btn-primary>

  </form>
</div>
</x-layout>
