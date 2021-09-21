<label class="block text-sm">
    <span class="text-gray-700 dark:text-gray-400">Nombre</span>
    <input 
        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
        placeholder="Nombre"
        wire:model="nombre"
        >
    @error('nombre') <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
</label>
<label class="block text-sm">
    <span class="text-gray-700 dark:text-gray-400">Slug</span>
    <input  
        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
        placeholder="Slug"
        wire:model="slug"
    >
    @error('slug') <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
</label>