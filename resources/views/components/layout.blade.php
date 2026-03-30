<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $pageTitle }}</title>
  </head>
  <body class="h-full">
    <div class="min-h-full">
      
      
 @if (!request()->is('register'))
    <x-navbar></x-navbar>
    <x-header>{{ $pageTitle }}</x-header>
  @endif

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>
    
  </div>
  
  
  <script src="js/script.js"></script>
</body>
</html>