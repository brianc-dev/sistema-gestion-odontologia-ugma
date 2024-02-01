<div>
    <button wire:click="$dispatch('historia-updated') @class('btn-option')>Guardar</button>
    <x-action-message class="me-3" on="historia-updated">
        {{ __('Actualizado') }}
    </x-action-message>
</div>
