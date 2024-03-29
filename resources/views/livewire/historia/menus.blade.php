<div class="bg-white pe-2 break-inside-avoid print:hidden">
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-4 px-4 block text-right">Secciones</h2>
        <div class="flex flex-col gap-2">
            @foreach($sections as $menu)
                <button wire:key="{{ $loop->index }}" wire:click="changeSection({{ $loop->index }})"
                        class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">{{ $menu }}
                </button>
            @endforeach
        </div>
    </div>
</div>
