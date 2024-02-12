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
                        <x-input-label for="medicamento_actual" :value="__('Medicamento actual')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.medicamento_actual"
                                    id="medicamento_actual"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="medicamento_actual" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <div> @error('form.medicamento_actual')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="mt-4 flex-1">
                        <x-input-label for="alergias" :value="__('Alergias')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.alergias" id="alergias"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="alergias" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <div> @error('form.alergias')
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
                    <p>Profesor: {{ $historia->estudiante->profesor->nombre . ' ' . $historia->estudiante->profesor->apellido }}</p>
                @endif
                <x-textarea wire:model.blur="form.correcciones" rows="11" :disabled="!Auth::user()->isProfesor()"></x-textarea>
                <x-input-error :messages="$errors->get('form.correcciones')" class="mt-2"/>
                @if(Auth::user()->isProfesor() and $historia->estudiante->profesor == Auth::user()->profesor)
                    <livewire:button text="Guardar" event="historia-update-correcciones"/>
                @endif
            </div>
        </div>
    </div>
</div>
