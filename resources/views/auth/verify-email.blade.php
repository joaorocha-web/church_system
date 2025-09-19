<x-layout>
    <div class="p-10 flex justify-center items-center flex-col gap-4">
        
            <h2 class="text-2xl">Você está quase lá!</h2>
            <p>Por questões de segurança enviamos um email para confirmação de usuário.</p>
            <span></span>
            <form action="{{route('verification.send')}}" method="post">
                @csrf
                <x-btn-primary type="submit">Reenviar e-mail de verificação</x-btn-primary>
            </form>
    </div>
</x-layout>