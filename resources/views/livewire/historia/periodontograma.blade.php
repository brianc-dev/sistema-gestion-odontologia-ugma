<div class="w-3/4 bg-slate-400 break-inside-avoid items-start py-6 px-4">
    <div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </div>
    <div class="flex flex-col">

        <div class="mt-4">
            <x-input-label for="periodontograma_photo" :value="__('Imagen de periodontograma')"/>
            <input name="periodontograma_photo" type="file" wire:model="form.periodontograma_photo"
                   id="periodontograma_photo">
            @error('form.periodontograma_photo') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            @if(gettype($form->periodontograma_photo) != 'string')
                @if($form->periodontograma_photo)
                    <img src="{{ $form->periodontograma_photo->temporaryUrl() }}">
                @endif
            @endif
        </div>
    </div>
</div>
