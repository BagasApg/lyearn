<div class="navbar bg-base-500 px-28 py-3 shadow-md sticky top-0 glass z-10">
    <div class="flex-1 gap-2">
        <a href="" class="">
            <img src="{{ asset('assets/revised-logo-black.svg') }}" width="50" height="50" class="max-w-full"
                alt="">
        </a>
        <a href="{{ route('home') }}">
            <p class="text-2xl text-black font-bold">Lyearn</p>
        </a>
    </div>
    
    <div class="flex-none gap-1">
        <a href="{{ route('login.index') }}"
            class="btn btn-outline border-black text-lg text-black bg-gray-200 hover:bg-gray-900 hover:border-gray-900 hover:text-gray-100">Log
            In</a>
        <a href="" class="btn text-lg text-white hover:bg-gray-900">Register</a>
    </div>
</div>
