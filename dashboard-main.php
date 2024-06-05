<?php
session_start();
include('./components/header.html');
?>
<link rel="stylesheet" href="css/style.css">
<script src="./javascript/dashboard-main.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-eKsGq8FvZM4c5ZxoPsU43F+tc8tF+gdbfJQq6UOpjbvDhUMWcnnBkuY5jR7RuCI6uHIW2tHq30z7CGN2nnbkyA=="
    crossorigin="anonymous" />
<style>
    .progress-wrapper::before,
    .progress-wrapper::after {
        content: '';
        position: absolute;
        border-radius: 50%;
    }

    .progress-wrapper::before {
        width: 100%;
        height: 100%;
        background-color: aliceblue;
    }

    .progress-wrapper::after {
        width: 80%;
        height: 80%;
        top: 10%;
        left: 10%;
        background-color: white;
    }
</style>


<div class="lg:fixed lg:top-0 lg:right-0">

    <div class="flex flex-wrap justify-around items-start gap-5 lg:w-[93vw] m-3">
        
        <!-- info -->
        <div class=" md:h-[38vh] lg:h-[45vh] lg:w-[38vw] w-full md:w-[53vw] bg-white p-5 rounded-xl shadow-lg">
            <div class="flex flex-col justify-between h-full mx-5">
                <div class="flex justify-between">
                    <div class="text-xs">June 30, Thursday</div>
                    <div class="text-gray-600"><i class="fa-solid fa-user-pen fa-md"></i></div>
                </div>
                <img class="w-[15vw] lg:w-[10vw] rounded-full" src="./assets/user.png" alt="User Profile">
                <div>
                    <div class="text-3xl font-semibold">Welcome back, User!</div>
                    <div>Unlocking potential with every step.</div>
                </div>
            </div>    

        </div>

        <!-- upcoming sessions -->
        <div class="w-full md:w-[38vw] lg:w-[28vw]  md:h-[38vh] lg:h-[45vh] border-1 border-indigo-500 px-5 py-4 rounded-xl bg-white shadow-lg ">
            <div class="text-xl lg:text-2xl font-semibold mb-4">Upcoming Sessions</div>
            <div class="h-[30vh] space-y-4 overflow-y-auto">
                <div class="bg-[aliceblue] py-2 px-4 rounded-lg shadow-sm ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-4 rounded-full" src="./assets/user.png" alt="Doctor Profile">
                            <div>
                                <div class="text-sm lg:text-lg font-semibold">Dr. S.P. Singh</div>
                                <div class="text-xs lg:text-base text-gray-600">Physics</div>
                            </div>
                        </div>
                        <button
                            class="rounded-lg bg-blue-500 text-sm lg:text-base text-white px-4 py-1 lg:py-2 hover:bg-blue-600">Details</button>
                    </div>
                    <div class="flex justify-between mt-4">
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-calendar-alt text-blue-500"></i>
                            <span class="ml-2 text-sm lg:text-base">14 March, 2022</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-clock text-blue-500"></i>
                            <span class="ml-2 text-sm lg:text-base">09:00 pm</span>
                        </div>
                    </div>
                </div>
                <div class="bg-[aliceblue] py-2 px-4 rounded-lg shadow-sm ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-4 rounded-full" src="./assets/user.png" alt="Doctor Profile">
                            <div>
                                <div class="text-sm lg:text-lg font-semibold">Dr. S.P. Singh</div>
                                <div class="text-xs lg:text-base text-gray-600">Physics</div>
                            </div>
                        </div>
                        <button
                            class="rounded-lg bg-blue-500 text-sm lg:text-base text-white px-4 py-1 lg:py-2 hover:bg-blue-600">Details</button>
                    </div>
                    <div class="flex justify-between mt-4">
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-calendar-alt text-blue-500"></i>
                            <span class="ml-2 text-sm lg:text-base">14 March, 2022</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-clock text-blue-500"></i>
                            <span class="ml-2 text-sm lg:text-base">09:00 pm</span>
                        </div>
                    </div>
                </div>
                <div class="bg-[aliceblue] py-2 px-4 rounded-lg shadow-sm ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-4 rounded-full" src="./assets/user.png" alt="Doctor Profile">
                            <div>
                                <div class="text-sm lg:text-lg font-semibold">Dr. S.P. Singh</div>
                                <div class="text-xs lg:text-base text-gray-600">Physics</div>
                            </div>
                        </div>
                        <button
                            class="rounded-lg bg-blue-500 text-sm lg:text-base text-white px-4 py-1 lg:py-2 hover:bg-blue-600">Details</button>
                    </div>
                    <div class="flex justify-between mt-4">
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-calendar-alt text-blue-500"></i>
                            <span class="ml-2 text-sm lg:text-base">14 March, 2022</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-clock text-blue-500"></i>
                            <span class="ml-2 text-sm lg:text-base">09:00 pm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- DCS & MHS Cards -->
        <div class="md:flex lg:flex-col md:justify-around w-full lg:w-[20vw] lg:h-[45vh] overflow-hidden">
            <div class="lg:w-[20vw] lg:h-[22vh] md:w-[45vw] bg-white p-4 border border-gray-200 rounded-lg shadow-lg flex flex-col gap-3 mb-2">
                <div class="text-xs lg:text-sm">DCS - StudyByU</div>
                <div>
                    <div class="text-xl lg:text-lg">Doubt Clearing Sessions</div>
                    <div class="text-xs lg:text-sm">Clear All your Doubts!</div>
                </div>
                <div class="text-sm lg:text-md text-blue-500">
                    BOOK NOW <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>
            </div>
            <div class="lg:w-[20vw] lg:h-[22vh] md:w-[45vw] bg-white p-4 border border-gray-200 rounded-lg shadow-lg flex flex-col gap-3 mb-2">
                <div class="text-xs lg:text-sm">MHC - StudyByU</div>
                <div>
                    <div class="text-xl lg:text-lg">Mental Health Advice</div>
                    <div class="text-xs lg:text-sm">Support for a better you.</div>
                </div>
                <div class="text-sm lg:text-md text-blue-500">
                    BOOK NOW <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>
            </div>

        </div>

        <!-- chart -->
        <div class="w-full lg:w-[48vw] lg:h-[47vh] bg-white p-4 rounded-xl shadow-lg">
            <div class="text-2xl md:text-3xl lg:text-2xl font-semibold">Your Weekly Progress</div>
            <div class="w-full lg:w-[45vw]">
                <canvas id="myChart" width="100vh" height="40vh"></canvas>
            </div>
        </div>

        <!-- number of sessions -->
        <div class="flex gap-4 lg:flex-col lg:h-[47vh] lg:w-[18vw] justify-around w-full">
            <div class="h-1/2 bg-white py-3 px-5 w-[42vw] lg:w-[18vw] rounded-xl shadow-lg">
                <div class="flex justify-between items-center h-[7vh]">
                    <div class="text-xl md:text-3xl lg:text-4xl text-blue-500">10+</div>
                    <i
                        class="fa-solid fa-question flex items-center justify-center w-5 h-5 lg:w-12 lg:h-12 rounded-full bg-blue-100 text-blue-500 text-sm lg:text-3xl"></i>
                </div>

                <div class="mt-5">
                    <div class="text-xl md:text-2xl lg:text-xl font-semibold">Doubt Clearing</div>
                    <div class="text-sm md:text-lg lg:text-sm">Total Sessions Taken</div>
                </div>
            </div>

            <div class="h-1/2 bg-white py-3 px-5 w-[42vw] lg:w-[18vw] rounded-xl shadow-lg">
                <div class="flex justify-between items-center h-[7vh]">
                    <div class="text-xl md:text-3xl lg:text-4xl text-blue-500">20+</div>
                    <i
                        class="fa-solid fa-heart flex items-center justify-center w-5 h-5 lg:w-12 lg:h-12 rounded-full bg-blue-100 text-blue-500 text-sm lg:text-xl"></i>
                </div>

                <div class="mt-5">
                    <div class="text-xl md:text-2xl lg:text-xl font-semibold">Mental Health</div>
                    <div class="text-sm md:text-lg lg:text-sm">Total Sessions Taken</div>
                </div>
            </div>
        </div>

        <!-- Daily Progress -->
        <div class="w-full lg:w-[20vw] lg:h-[47vh]  p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
            <div class="text-xl md:text-2xl lg:text-2xl 2xl:text-3xl font-semibold text-center">Daily Progress</div>
            <div class="text-sm md:text-md 2xl:text-xl text-center mt-2 mb-4">Keep improving the <br>quality of your study</div>

            <div class="flex justify-center 2xl:translate-y-1/2">
                <div class="relative h-20 w-20 md:w-30 md:h-30 lg:w-40 lg:h-40 flex items-center justify-center progress-wrapper">
                    <div class="absolute inset-0 flex items-center  justify-center">
                        <div class="relative w-full h-full flex items-center justify-center">
                            <div class="absolute inset-0 flex items-center justify-center text-black">
                                <div class="w-full h-full rounded-full overflow-hidden ">
                                    <div class="w-full h-full bg-blue-500 rounded-full"
                                        style="clip-path: inset(0% 0% 0% 50%)">
                                    </div>
                                </div>
                            </div>
                            <div class="absolute inset-0 flex items-center justify-center text-xl md:text-3xl lg:text-4xl font-semibold z-10">
                                50%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>