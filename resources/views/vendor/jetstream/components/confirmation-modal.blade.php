@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>            
    <div class=""> 
        <div class="text-lg font-semibold text-gray-700 dark:text-gray-300" >
            {{ $title }}
        </div> 
        <div class="text-sm text-gray-700 dark:text-gray-400 py-5">
            {{ $content }}
        </div>
        <div class="text-sm text-gray-700 dark:text-gray-400">
            {{ $footer }}
        </div>
    </div>  
</x-jet-modal>
