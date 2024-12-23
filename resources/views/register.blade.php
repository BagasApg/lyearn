@extends('layout.app')

@section('content')
    <div class="flex justify-center items-center text-center p-8 py-28 w-full max-w-full max-h-screen">
        <div class="card w-[400px] glass">

            <div class="card-body">
                <div class="login-title flex justify-center items-center gap-2 pb-1">
                    <img src="{{ asset('assets/revised-logo-black.svg') }}" alt="" srcset="" width="50">
                    <h1 class="text-3xl pb-0 font-bold">Lyearn</h1>
                </div>
                <div class="texts flex flex-col gap-1 pb-3">
                    <div class="card-title">
                        <h1>Start your career here! 🚀</h1>
                    </div>
                    <p class="text-start">Where your yearn to learn begin!</p>
                </div>
                <div class="form-control">
                    <label for="username" class="text-start pb-2">Username</label>
                    <input type="text" name="username" id="username"
                        class="glass px-3 py-1 rounded-md focus:shadow-[0_0_0.25rem_0.05rem_rgba(17,24,39,0.1)] border-gray-900 focus:outline-none focus:ring-1 focus:ring-base-100">
                </div>
                <div class="form-control pb-4">
                    <label for="password" class="text-start pb-2">Password</label>
                    <input type="password" name="password" id="password"
                        class="glass px-3 py-1 rounded-md focus:shadow-[0_0_0.25rem_0.05rem_rgba(17,24,39,0.1)] border-gray-900 focus:outline-none focus:ring-1 focus:ring-base-100">

                </div>
                <div class="login-button">
                    <div class="btn bg-gray-900 text-white w-full btn-md hover:bg-black">Sign Up</div>
                </div>
                <div class="other-options pt-1">
                   <p>Already have an account? Maybe try to <a class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600" href="">login</a>!</p> 
                </div>
            </div>
        </div>
    </div>
@endsection
