<div class="flex items-center justify-between mb-6 px-6 text-white">
    <button wire:click="goToPreviousMonth"
        class="p-2 rounded-full bg-black/60 hover:bg-black/80">
        ←
    </button>

    <h2 class="text-2xl font-bold uppercase tracking-wide">
        {{ $startsAt->locale('pt_BR')->translatedFormat('F Y') }}
    </h2>

    <button wire:click="goToNextMonth"
        class="p-2 rounded-full bg-black/60 hover:bg-black/80">
        →
    </button>
</div>
