<div class="grid grid-cols-4 break-inside-avoid items-start printable">

    <div class="col-span-3 bg-slate-400 py-6 px-4">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $title }}
            </h2>
        </div>
        <div>
            <h3>Estudio Panoramico</h3>
        </div>
        <div class="flex flex-col">

            <div class="mt-4">
                <x-input-label for="zona_nasomaxilar"
                               :value="__('Zona Nasomaxilar')"/>
                <x-textarea :disabled="!$enabled" wire:model.live="form.zona_nasomaxilar"
                            id="zona_nasomaxilar"
                            class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                            name="zona_nasomaxilar" rows="4" required autofocus
                            spellcheck="true">
                </x-textarea>
                <div> @error('form.zona_nasomaxilar')
                    <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
            </div>

            <div class="mt-4">
                <x-input-label for="zona_atm"
                               :value="__('Zona A.T.M')"/>
                <x-textarea :disabled="!$enabled" wire:model.live="form.zona_atm"
                            id="zona_atm"
                            class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                            name="zona_atm" rows="4" required autofocus
                            spellcheck="true">
                </x-textarea>
                <div> @error('form.zona_atm')
                    <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
            </div>

            <div class="mt-4">
                <x-input-label for="zona_mandibular"
                               :value="__('Zona Mandibular')"/>
                <x-textarea :disabled="!$enabled" wire:model.live="form.zona_mandibular"
                            id="zona_mandibular"
                            class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                            name="zona_mandibular" rows="4" required autofocus
                            spellcheck="true">
                </x-textarea>
                <div> @error('form.zona_mandibular')
                    <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
            </div>

            <div class="mt-4">
                <x-input-label for="zona_dasi"
                               :value="__('Zona Dento Alveolar Superior e Inferior')"/>
                <x-textarea :disabled="!$enabled" wire:model.live="form.zona_dasi"
                            id="zona_dasi"
                            class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                            name="zona_dasi" rows="4" required autofocus
                            spellcheck="true">
                </x-textarea>
                <div> @error('form.zona_dasi')
                    <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
            </div>

            <div class="mt-4">
                <x-input-label for="estudio_periapicales"
                               :value="__('Estudio Periapicales (Corona, raíz, hueso y ligamento periodontal)')"/>
                <x-textarea :disabled="!$enabled" wire:model.live="form.estudio_periapicales"
                            id="estudio_periapicales"
                            class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                            name="estudio_periapicales" rows="4" required autofocus
                            spellcheck="true">
                </x-textarea>
                <div> @error('form.estudio_periapicales')
                    <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
            </div>

            <div class="mt-4">
                <x-input-label for="estudio_coronales"
                               :value="__('Estudio de coronales (Corona y cresta alveolar)')"/>
                <x-textarea :disabled="!$enabled" wire:model.live="form.estudio_coronales"
                            id="estudio_coronales"
                            class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                            name="estudio_coronales" rows="4" required autofocus
                            spellcheck="true">
                </x-textarea>
                <div> @error('form.estudio_coronales')
                    <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
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
