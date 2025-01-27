@extends('layout.app')

@section('content')
    <div class="flex justify-center items-center text-center p-8 py-28 w-full max-w-full min-h-screen">

        <div class="">

            <div id="welcome" class="flex justify-center pb-48 mb-6">
                <div class="flex flex-col text-center items-center justify-center gap-3">
                    <h1 class="text-5xl text-black font-bold">Welcome.</h1>
                    <h2 class="text-3xl text-black">to the best learning platform you have ever across to.</h2>
                    <img src="{{ asset('assets/welcome.jpg') }}" />
                </div>
            </div>
            <div id="brief-desc" class="flex flex-row justify-evenly text-center items-center pb-48">
                <div class="">
                    <h1 class="transition text-7xl text-start p-10 rounded-2xl jetbrains-mono hover:bg-gray-950 hover:text-gray-200">What is <br>Lyearn?<span>_</span></h1>
                </div>
                <div class="w-1/2 ">
                    <p class="text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt iste assumenda quis a, provident
                        nostrum, distinctio voluptatem, cum in dolorem incidunt ipsum dolor expedita.</p>
                </div>
            </div>
            <div id="stats" class="text-center px-64 pb-40 mb-6">
                <h1 class="text-5xl pb-10 text-black">We currently have</h1>
                <div class="flex justify-center gap-16 pb-10 z-10 relative" id="stats-cards">
                    <div class="card w-auto bg-neutral" data-number="200" data-aos="fade-down" data-aos-duration="1000"
                        data-aos-once="true">
                        <div class="card-body">
                            <h1 class="text-3xl text-gray-100">Students</h1>

                            <span data-number="200" class="text-white stats-card-text text-5xl">200</span>
                        </div>
                    </div>
                    <div class="card w-auto bg-neutral" data-number="100" data-aos="fade-down"data-aos-duration="1000"
                        data-aos-delay="200" data-aos-once="true">
                        <div class="card-body">
                            <h1 class="text-3xl text-gray-100">Teachers</h1>

                            <span data-number="100" class="text-white stats-card-text text-5xl">100</span>

                        </div>
                    </div>
                    <div class="card w-auto bg-neutral" data-number="750" data-aos="fade-down" data-aos-duration="1000"
                        data-aos-delay="400" data-aos-once="true">
                        <div class="card-body">
                            <h1 class="text-3xl text-gray-100">Courses</h1>

                            <span data-number="750" class="text-white stats-card-text text-5xl">750</span>
                        </div>
                    </div>
                </div>
                <h1 class="text-3xl text-black relative z-0" data-aos="fade-down" data-aos-duration="650"
                    data-aos-delay="1500" data-aos-once="true">and still counting...</h1>
            </div>
            <div id="skill-range" class="text-center">
               <h1 class="text-5xl">This is our skillset</h1> 
               <div id="skills"></div>
            </div>
        </div>
    </div>
@endsection
