<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('/css/trix.css') }}">

    @vite('resources/css/app.css')


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'roomi') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    

         <script src="https://kit.fontawesome.com/fd683e659d.js" crossorigin="anonymous"></script>

    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body class="font-sans bg-gray-100">

  <div id="app">
          @include('layouts.nav2')
            <main class="bg-white space-y-5">
            @yield('content')
           </main>
  </div>

    <div class="">
      @include('layouts.footer')
    </div>
</body>
</html>
