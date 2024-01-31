<div class="w-3/4 bg-slate-400 break-inside-avoid items-start py-6 px-4">
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
                    <textarea wire:model.live="form.medicamento_actual" id="medicamento_actual"
                              class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                              name="medicamento_actual" rows="4" required autofocus spellcheck="true">
                    </textarea>
                    <div> @error('form.medicamento_actual')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="mt-4 flex-1">
                    <x-input-label for="alergias" :value="__('Alergias')"/>
                    <textarea wire:model.live="form.alergias" id="alergias"
                              class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                              name="alergias" rows="4" required autofocus spellcheck="true">
                    </textarea>
                    <div> @error('form.alergias')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>
        </form>
    </div>
</div>