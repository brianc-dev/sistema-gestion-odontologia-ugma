<div class="grid grid-cols-4 break-inside-avoid items-start printable">
    <div class="col-span-3 print:col-span-4 bg-slate-400 py-6 px-4">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $title }}
            </h2>
        </div>
        <div class="flex flex-col">

            <form wire:submit.prevent="save" class="mt-4 print:hidden">
                <x-input-label for="periodontograma_photo" :value="__('Imagen de periodontograma')"/>
                <x-input-file :disabled="!$enabled" name="periodontograma_photo" type="file"
                              wire:model="form.periodontograma_photo"
                              accept="image/png, image/jpeg"
                              id="periodontograma_photo"/>
{{--                @error('form.periodontograma_photo') <span class="error">{{ $message }}</span> @enderror--}}
            </form>

            <div class="p-2 bg-white rounded-md mt-4">
                <div id="periodontograma_preview">

                </div>

                @if($form->periodontograma_photo and gettype($form->periodontograma_photo) != 'string')
                    @php
                        $form->temporary_url = $form->periodontograma_photo->temporaryUrl()
                    @endphp
                    <img class="w-full" src="{{ $form->temporary_url }}" alt="imagen periodontograma"/>
                @elseif(isset($form->temporary_url))
                    <a href="{{$form->temporary_url}}">
                        <img class="w-full" src="{{ $form->temporary_url }}" alt="imagen periodontograma"/>
                    </a>
                @elseif($form->periodontograma_photo and gettype($form->periodontograma_photo) == 'string')
                    <a href="{{url($form->periodontograma_photo)}}">
                        <img class="w-full" src="{{ $form->periodontograma_photo }}" alt="imagen periodontograma"/>
                    </a>
                    @isset($historia)
                        <time class="font-bold text-lg pt-1">{{ date_format($historia->updated_at, 'd-m-Y') }}</time>
                    @endisset
                @endif

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
