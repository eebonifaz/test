<x-jet-confirmation-modal wire:model="isOpenModalUpdate" id="permission-update">
    <x-slot name="title">
        Editar Permiso 
    </x-slot>
    <x-slot name="content">
        @include('_partials.users.permissions.formulario')
    </x-slot>
    <x-slot name="footer">
        <div class="flex mb-2 justify-between">
            <x-jet-secondary-button wire:click="$toggle('isOpenModalUpdate')" wire:loading.attr="disabled">
                {{ __("Cancelar") }}
            </x-jet-secondary-button>
            <x-jet-button class="ml-2" wire:click="guardar" wire:loading.attr="disabled" >
                {{ __("Actualizar") }}
            </x-jet-button>
        </div>
    </x-slot>
</x-jet-confirmation-modal>