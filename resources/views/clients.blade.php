<x-app-layout>
    <x-slot name="header">
        {{ __('Clientes Pagos') }}
    </x-slot>
    <div class="pyb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg dark:bg-gray-800">
                <livewire:pagar-cuentas />
            </div>
        </div>
    </div>
</x-app-layout>
