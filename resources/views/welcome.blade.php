@extends('layout.app')

@section('content')
    <div class="welcome flex justify-center pb-16">
        <div class="flex flex-col text-center items-center justify-center gap-3">
            <h1 class="text-5xl text-black font-bold">Welcome.</h1>
            <h2 class="text-3xl text-black">to the best Learning Platform you ever across to.</h2>
            <img src="https://loremflickr.com/1280/560" />

        </div>
    </div>
    <div id="stats" class="flex justify-between px-64">
        <div class="card w-40 bg-base-100">
            <div class="card-body">
                <h1 class="text-2xl" data-number="100">Students</h1>
                <p>12520</p>
            </div>
        </div>
        <div class="card w-40 bg-base-100">
            <div class="card-body">
                <h1 class="text-2xl">Students</h1>
                <p>12520</p>
            </div>
        </div>
        <div class="card w-40 bg-base-100">
            <div class="card-body">
                <h1 class="text-2xl">Students</h1>
                <p>12520</p>
            </div>
        </div>
    </div>
@endsection

