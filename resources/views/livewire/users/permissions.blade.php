<div>
    <div class="flex mb-2 justify-between">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Permisos</h2>
        <button wire:click.prevent="create()" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray bg-green-100 dark:bg-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs dark:bg-gray-800">
    @if (session()->has('message'))
        <div id="alert" class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
            <span class="inline-block align-middle mr-8">
                {{ session('message') }}
            </span>
            <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="document.getElementById('alert').remove();">
                <span>×</span>
            </button>
        </div>
    @endif
        <div class="w-full overflow-x-auto mt-4">
            @include('_partials.users.permissions.lists')
            {{ $objects->links() }}
        </div>
    </div>
    <div>
        @include('_partials.users.permissions.create')
        @include('_partials.users.permissions.update')
        @include('_partials.users.permissions.delete')
    </div>

</div>
