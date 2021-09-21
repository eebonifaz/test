<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://windmill-dashboard.vercel.app/assets/css/tailwind.output.css" />
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
        <x-sidebar-principal-site />
        <x-sidebar-principal-site-mobile />
        
        <div class="flex flex-col flex-1 w-full">
            <x-header-site />
            <main class="h-full overflow-y-auto">
            <div class="container px-6 mx-auto grid">
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" >
                    {{ $header }}
                </h2>
                <div>
                    {{ $slot }}
                </div>    
            </div>
            </main>
      </div>
    </div> 
  
    <script src="{{ mix('js/init-alpine.js') }}"></script> 
    
    @stack('modals')
    @livewireScripts        
    </body>
</html>
