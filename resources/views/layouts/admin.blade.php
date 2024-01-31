<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ruumi Dashboard')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    @include('layouts.adminhead')

    <div class="flex">

        @include('layouts.sidebar')

        <div class="flex-1 ml-4 mt-4 p-6">
            @yield('content')
        </div>

    </div>

</body>
</html>
