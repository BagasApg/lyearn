@extends('layout.app')

@section('content')
    <div class="">
        <div class="card w-[400px] glass">

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
                <div class="login-button"></div>
            </div>
        </div>
    </div>
@endsection
