<div class="flex space-x-4">
    @if($isUpdating)
    <button wire:click="cancel">{{ 'Cancel' }}</button>
    <button wire:click="updateData" class="btn-primary">{{ 'Actualizar' }}</button>
    @else
    <button wire:click="edit">{{ 'Editar' }}</button>
    @endif
</div>
