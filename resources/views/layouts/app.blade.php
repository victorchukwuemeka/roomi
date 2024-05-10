<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="google-adsense-account" content="ca-pub-3052314394083667">
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

<<<<<<< HEAD
   
=======
  
>>>>>>> 0b67ee62a6e7e0e99e5cca64c64037add8198fba
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3052314394083667"
     crossorigin="anonymous"></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3N9K3RD17G">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3N9K3RD17G');
</script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3052314394083667"
     crossorigin="anonymous"></script>
     
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
