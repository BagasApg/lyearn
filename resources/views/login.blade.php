@extends('layout.app')

@section('content')
    <div class="">
        <div class="card w-80 glass">

            <div class="card-body">
                <div class="login-title flex justify-center items-center gap-2 pb-1">
                    <img src="{{ asset('assets/revised-logo-black.svg') }}" alt="" srcset="" width="50">
                    <h1 class="text-3xl pb-0 font-bold">Lyearn</h1>
                </div>
                <div class="texts flex flex-col gap-1 pb-3">
                    <div class="card-title">
                        <h1>Welcome back! 👋</h1>
                    </div>
                    <p class="text-start">Continue to yearn for learn!</p>
                </div>
                <div class="form-control">
                    <label for="username" class="text-start pb-2">Username</label>
                    <input type="text" name="username" id="username"
                        class="glass px-3 py-1 rounded-md focus:shadow-[0_0_0.25rem_0.05rem_rgba(17,24,39,0.1)] border-gray-900 focus:outline-none focus:ring-1 focus:ring-base-100">
                </div>
                <div class="form-control">
                    <label for="password" class="text-start pb-2">Password</label>
                    <input type="password" name="password" id="password"
                        class="glass px-3 py-1 rounded-md focus:shadow-[0_0_0.25rem_0.05rem_rgba(17,24,39,0.1)] border-gray-900 focus:outline-none focus:ring-1 focus:ring-base-100">

                </div>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">What is your name?</span>
                    </div>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="h-4 w-4 opacity-70">
                        <path fill-rule="evenodd"
                            d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </label>
                <div class="login-button"></div>
            </div>
        </div>
    </div>
@endsection
