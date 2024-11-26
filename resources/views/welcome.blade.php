@extends('layout.app')

@section('content')
    <div class="">

        <div class="welcome flex justify-center pb-16 mb-6">
            <div class="flex flex-col text-center items-center justify-center gap-3">
                <h1 class="text-5xl text-black font-bold">Welcome.</h1>
                <h2 class="text-3xl text-black">to the best learning platform you ever across to.</h2>
                <img src="{{ asset('assets/welcome.jpg') }}" />
            </div>
        </div>
        <div class="text-center px-64 pb-16 mb-6">
            <h1 class="text-5xl pb-10 text-black" id="kelas">We currently have</h1>
            <div class="flex justify-center gap-16 pb-10 z-10 relative" id="stats-cards">
                <div class="card w-auto bg-neutral" data-number="200" data-aos="fade-down" data-aos-duration="1000"
                    data-aos-once="true">
                    <div class="card-body">
                        <h1 class="text-3xl text-gray-100">Students</h1>

                        <span data-number="200" class="text-white kelas">000</span>
                    </div>
                </div>
                <div class="card w-auto bg-neutral" data-number="100" data-aos="fade-down"data-aos-duration="1000"
                    data-aos-delay="200" data-aos-once="true">
                    <div class="card-body">
                        <h1 class="text-3xl text-gray-100">Students</h1>

                        <span data-number="100" class="text-white kelas">000</span>

                    </div>
                </div>
                <div class="card w-auto bg-neutral" data-number="750" data-aos="fade-down" data-aos-duration="1000"
                    data-aos-delay="400" data-aos-once="true">
                    <div class="card-body">
                        <h1 class="text-3xl text-gray-100">Students</h1>
                        <h1 data-number="750" class="text-white kelas text-5xl">000</h1>
                    </div>
                </div>
            </div>
            <h1 class="text-3xl text-black relative z-0" data-aos="fade-down" data-aos-duration="650" data-aos-delay="1500"
                data-aos-once="true">and still counting...</h1>
        </div>
        <div class="wrapper">
            <div class="container">
                <i class="fas fa-utensils"></i>
                <span class="num" data-val="200">000</span>
                <span class="text">Meals Delivered</span>
            </div>
            <div class="container">
                <i class="fas fa-smile-beam"></i>
                <span class="num" data-val="100">000</span>
                <span class="text">Happy Customers</span>
            </div>
            <div class="container">
                <i class="fas fa-list"></i>
                <span class="num" data-val="750">000</span>
                <span class="text">Menu Items</span>
            </div>
            <div class="container">
                <i class="fas fa-star"></i>
                <span class="num" data-val="280">000</span>
                <span class="text">Five Stars</span>
            </div>
        </div>
        <script>
            let valueDisplays = document.querySelectorAll(".num");
            let interval = 3000;
            valueDisplays.forEach((valueDisplay) => {
                let startValue = 0;
                let endValue = parseInt(valueDisplay.getAttribute("data-val"));
                let duration = Math.floor(interval / endValue);
                let counter = setInterval(function() {
                    startValue += 1;
                    valueDisplay.textContent = startValue;
                    if (startValue == endValue) {
                        clearInterval(counter);
                    }
                }, duration);
            });
        </script>
    </div>
@endsection
