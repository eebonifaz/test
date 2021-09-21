<x-jet-confirmation-modal wire:model="isOpenModalDelete" id="delete-permiso">
    <x-slot name="title">
        Eliminar
    </x-slot>
    <x-slot name="content">
        ¿Desea eliminar a <span class="font-bold text-red-400 text-xl">{{$nombre}}</span>? 
    </x-slot>
    <x-slot name="footer">
        <div class="flex mb-2 justify-between">
            <x-jet-secondary-button wire:click="$toggle('isOpenModalDelete')" wire:loading.attr="disabled">
                {{ __("Cancelar") }}
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-2" wire:click="deleteNow" wire:loading.attr="disabled" >
                {{ __("Eliminar") }}
            </x-jet-button>
        </div>
    </x-slot>
</x-jet-confirmation-modal>