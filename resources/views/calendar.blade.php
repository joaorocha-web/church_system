<div class="bg-gray-900 w-full p-20">
    <h1 class="text-center text-xl sm:text-3xl">Calendário De Programações</h1>
    
    <x-btn-cancel> <a href="{{route('events.create')}}">Criar Evento</a></x-btn-cancel>
    
<div class="text-black mt-20 ">
         
        <livewire:appointments-calendar
          before-calendar-view="calendar.before"/>
</div>
</div>