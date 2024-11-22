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
    <div class="navbar bg-base-500 px-28 py-3 shadow-md">
        <div class="flex-1 gap-0.5">
            <a href="" class="">
                <img src="{{ asset('assets/revised-logo-black.svg') }}" width="50" height="50" class="max-w-full" alt="">
            </a>
            <a href="" class="btn btn-ghost text-gray-900 text-2xl font-bold">Lyearn</a>
        </div>
        <div class="flex-none gap-1">
            <a href="" class="btn btn-outline border-black text-lg text-black hover:bg-gray-900 hover:border-gray-900 hover:text-gray-100">Log In</a>
            <a href="" class="btn text-lg text-white">Register</a>
        </div>
    </div>
    <div class="p-4">
       @yield('content') 
    </div> 
</body>
@vite('resources/js/app.js')

</html>
