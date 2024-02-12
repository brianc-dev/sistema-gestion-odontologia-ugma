<div class="grid grid-cols-4 break-inside-avoid items-start printable">
    <div class="col-span-3 bg-slate-400 py-6 px-4">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $title }}
            </h2>
        </div>
        <div class="flex flex-col">

            <div class="mt-4 print:hidden">
                <x-input-label for="periodontograma_photo" :value="__('Imagen de periodontograma')"/>
                <x-input-file :disabled="!$enabled" name="periodontograma_photo" type="file"
                              wire:model="form.periodontograma_photo"
                              id="periodontograma_photo"/>
                @error('form.periodontograma_photo') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                @isset($form->periodontograma_photo)
                    <img src="{{ $form->periodontograma_photo->temporaryUrl() }}" alt="imagen periodontograma"/>
                @endisset
            </div>
        </div>
    </div>
    <div class="print:hidden">
        <div class="p-4 bg-white">
            <h3 class="font-bold text-lg">Correcciones</h3>
            <div class="flex flex-col space-y-2">
                @if($historia?->estudiante->profesor)
                    <p>
                        Profesor: {{ $historia->estudiante->profesor->nombre . ' ' . $historia->estudiante->profesor->apellido }}</p>
                @endif
                <x-textarea wire:model.blur="form.correcciones" rows="11"
                            :disabled="!Auth::user()->isProfesor()"></x-textarea>
                <x-input-error :messages="$errors->get('form.correcciones')" class="mt-2"/>
                @if(Auth::user()->isProfesor() and $historia->estudiante->profesor == Auth::user()->profesor)
                    <livewire:button text="Guardar" event="historia-update-correcciones"/>
                @endif
            </div>
        </div>
    </div>
</div>
