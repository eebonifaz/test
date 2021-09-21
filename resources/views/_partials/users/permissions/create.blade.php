<x-jet-confirmation-modal wire:model="isOpenModalCreate" id="crear-permiso">
    <x-slot name="title">
        Crear Permiso
    </x-slot>
    <x-slot name="content">
        @include('_partials.users.permissions.formulario')
    </x-slot>
    <x-slot name="footer">
        <div class="flex mb-2 justify-between">
            <x-jet-secondary-button wire:click="$toggle('isOpenModalCreate')" wire:loading.attr="disabled">
                {{ __("Cancelar") }}
            </x-jet-secondary-button>
            <x-jet-button class="ml-2" wire:click="guardar" wire:loading.attr="disabled" >
                {{ __("Crear") }}
            </x-jet-button>
        </div>
    </x-slot>
</x-jet-confirmation-modal>