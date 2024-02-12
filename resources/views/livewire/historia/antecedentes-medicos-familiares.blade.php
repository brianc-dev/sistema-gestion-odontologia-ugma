<div class="grid grid-cols-4 break-inside-avoid items-start">
    <div class="col-span-3 bg-slate-400 py-6 px-4">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $title }}
            </h2>
        </div>
        <div>
            <form wire:submit="save" class="">
                <div class="flex gap-4">
                    <div class="mt-4 flex-1">
                        <x-input-label for="madre" :value="__('Madre')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.madre" id="madre"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="madre" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <div> @error('form.madre')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="mt-4 flex-1">
                        <x-input-label for="padre" :value="__('Padre')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.padre" id="padre"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="padre" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <div> @error('form.padre')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="mt-4 flex-1">
                        <x-input-label for="hermanos" :value="__('Hermanos')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.hermanos" id="hermanos"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="hermanos" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <div> @error('form.hermanos')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="mt-4 flex-1">
                        <x-input-label for="abuelos_maternos" :value="__('Abuelos Maternos')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.abuelos_maternos" id="abuelos_maternos"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="abuelos_maternos" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <div> @error('form.abuelos_maternos')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="mt-4 flex-1">
                        <x-input-label for="abuelos_paternos" :value="__('Abuelos Paternos')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.abuelos_paternos" id="abuelos_paternos"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="abuelos_paternos" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <div> @error('form.abuelos_paternos')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>
            </form>
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
