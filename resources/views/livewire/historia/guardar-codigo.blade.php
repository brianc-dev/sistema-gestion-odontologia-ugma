<div class="flex space-x-4 justify-end items-center">
    <p>Historia Nro.</p>
    <div class="flex flex-col justify-center">
        <x-text-input wire:model.live="numero_historia" id="numero_historia" class="block mt-1 w-72" type="text"
                      name="numero_historia" required placeholder="T-0000-0000"/>
        <x-input-error :messages="$errors->get('numero_historia')" class="max-w-72"/>
    </div>
    <livewire:button event="historia-update-numero" text="Guardar"/>
</div>
