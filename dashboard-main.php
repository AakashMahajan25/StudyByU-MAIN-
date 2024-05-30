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
        /* /* border: 4px solid #3b82f6;  */
    }

    .progress-wrapper::after {
        width: 80%;
        height: 80%;
        top: 10%;
        left: 10%;
        background-color: white;
        /* Tailwind gray-200 color */
    }
</style>


<div class="lg:fixed lg:top-0 lg:right-0">

    <div class="flex flex-wrap items-start gap-6 lg:w-[95vw] my-5 mx-6">
        
        <!-- info -->
        <div class="lg:h-[45vh] lg:w-[40vw] w-full md:w-[53vw] bg-white p-5 rounded-xl shadow-lg">
            <div class="flex justify-between">
                <div class="text-2xl lg:text-5xl text-[#013266] font-bold mb-4">
                    Hi Aakash!
                </div>
                <div class="text-gray-600"><i class="fa-solid fa-user-pen fa-lg"></i></div>
            </div>
            <div class="flex">
                <img class="w-[15vw] lg:w-[10vw] rounded-full" src="./assets/user.png" alt="User Profile">
                <div class="flex flex-col justify-center ml-5 overflow-hidden">
                    <ul class="space-y-2 text-lg text-gray-700">
                        <li class="text-sm lg:text-xl"><i class="fa-solid fa-envelope"></i> aakashmahajan2004@gmail.com
                        </li>
                        <li class="text-sm lg:text-xl"><i class="fa-solid fa-phone"></i> +91 9582799219</li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- upcoming sessions -->
        <div class="w-full md:w-[38vw] lg:w-[30vw] lg:h-[45vh] border-1 border-indigo-500 px-5 py-4 rounded-xl bg-white shadow-lg ">
            <div class="text-xl lg:text-3xl font-semibold text-[#013266] mb-4">Upcoming Sessions</div>
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
        <div
            class="lg:w-[20vw] lg:h-[22vh] md:w-[40vw] bg-white p-4 border border-gray-200 rounded-lg shadow-lg flex flex-col justify-between gap-4 mb-2">

            <div class="flex h-fit">
                <div class="text-xs lg:text-sm">
                    DCS
                </div>
                <div class="font-bold mx-4 text-xs lg:text-sm">·</div>
                <div class="text-xs lg:text-sm">
                    StudyByU
                </div>
            </div>
            <div>
                <div class="text-xl lg:text-xl">Doubt Clearing Sessions</div>
                <div class="text-xs lg:text-sm">
                    Clear All your Doubts!
                </div>
            </div>
            <div class="text-sm lg:text-xl text-blue-500">
                BOOK NOW <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </div>
        </div>
        <div
            class="lg:w-[20vw] lg:h-[22vh] md:w-[40vw] bg-white p-4 border border-gray-200 rounded-lg shadow-lg flex flex-col justify-between gap-4 mb-2">

            <div class="flex h-fit">
                <div class="text-xs lg:text-sm">
                    DCS
                </div>
                <div class="font-bold mx-4 text-xs lg:text-sm">·</div>
                <div class="text-xs lg:text-sm">
                    StudyByU
                </div>
            </div>
            <div>
                <div class="text-xl lg:text-xl">Doubt Clearing Sessions</div>
                <div class="text-xs lg:text-sm">
                    Clear All your Doubts!
                </div>
            </div>
            <div class="text-sm lg:text-xl text-blue-500">
                BOOK NOW <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </div>
        </div>
        </div>




    <!-- chart -->
    <div class="w-full lg:w-[50vw] lg:h-[48vh] bg-white p-4 rounded-xl shadow-l lg:mb-0">
        <div class="text-2xl md:text-3xl lg:text-4xl font-semibold text-[#013266]">Your Weekly Progress</div>
        <div class="w-full lg:w-[45vw]">
            <canvas id="myChart" width="100vh" height="40vh"></canvas>
        </div>
    </div>

    <!-- number of sessions -->
    <div class="md:flex lg:flex-col lg:h-[47vh] md:justify-around w-full lg:w-[20vw] mb-3">
        <div class="bg-white md:w-[40vw] lg:w-[20vw] py-4 px-5 rounded-xl shadow-lg mt-5 mb-2 md:mt-0">
            <div class="flex justify-between items-center h-[7vh]">
                <div class="text-xl md:text-3xl lg:text-4xl text-blue-500">10+</div>
                <i
                    class="fa-solid fa-question flex items-center justify-center w-5 h-5 lg:w-12 lg:h-12 rounded-full bg-blue-100 text-blue-500 text-sm lg:text-3xl"></i>
            </div>

            <div class="mt-5">
                <div class="text-xl md:text-2xl lg:text-2xl font-semibold">Doubt Clearing</div>
                <div class="text-sm md:text-lg lg:text-lg">Total Sessions Taken</div>
            </div>
        </div>

        <div class="bg-white py-4 px-5 md:w-[40vw] lg:w-[20vw] rounded-xl shadow-lg mt-2 mb-5 md:mt-0 md:mb-2">
            <div class="flex justify-between items-center h-[7vh]">
                <div class="text-xl md:text-3xl lg:text-4xl text-blue-500">20+</div>
                <i
                    class="fa-solid fa-heart flex items-center justify-center w-5 h-5 lg:w-12 lg:h-12 rounded-full bg-blue-100 text-blue-500 text-sm lg:text-xl"></i>
            </div>

            <div class="mt-5">
                <div class="text-xl md:text-2xl lg:text-2xl font-semibold">Mental Health</div>
                <div class="text-sm md:text-lg lg:text-lg">Total Sessions Taken</div>
            </div>
        </div>
    </div>

    <!-- Daily Progress -->
    <div class="w-full lg:w-[20vw] lg:h-[47vh] md:w-[60vw] p-6 bg-white border border-gray-200 rounded-lg shadow-lg mx-auto mb-3">
        <div class="text-xl md:text-3xl lg:text-3xl font-semibold text-center mb-4">Daily Progress</div>
        <div class="text-sm md:text-lg font-medium text-center mb-1">Keep improving the</div>
        <div class="text-sm md:text-lg font-medium text-center mb-6">quality of your study</div>

        <div class="flex justify-center">
            <div
                class="relative h-20 w-20 md:w-30 md:h-30 lg:w-40 lg:h-40 flex items-center justify-center progress-wrapper">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="relative w-full h-full flex items-center justify-center">
                        <div class="absolute inset-0 flex items-center justify-center text-black">
                            <div class="w-full h-full rounded-full overflow-hidden ">
                                <div class="w-full h-full bg-blue-500 rounded-full"
                                    style="clip-path: inset(0% 0% 0% 50%)">
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute inset-0 flex items-center justify-center text-xl md:text-3xl lg:text-5xl font-bold z-10">
                            50%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</div>