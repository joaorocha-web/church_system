<x-layout>
    <div class="flex justify-center">
        <form action="{{route('user.create')}}" method="post">
        @csrf
        <div class="flex flex-wrap mx-3 mb-6">
          <div class="w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
              Digite o e-mail usado em seu cadastro
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="email" name="email" type="email" value="{{old('email')}}">
          </div>
        </div>
        <button type="submit">Seguir com o cadastro</button>
        </form>
    </div>
</x-layout>