<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lyearn</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-gray-200">

    @include('layout.components.navbar')
    <div class="flex justify-center items-center text-center p-8 py-28 w-full max-w-full min-h-screen">
        @yield('content')
    </div>
    @vite('resources/js/app.js')
</body>


</html>
