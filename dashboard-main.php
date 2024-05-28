<?php
session_start();
include('./components/header.html');
?>

<script src="./javascript/dashboard-main.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-eKsGq8FvZM4c5ZxoPsU43F+tc8tF+gdbfJQq6UOpjbvDhUMWcnnBkuY5jR7RuCI6uHIW2tHq30z7CGN2nnbkyA=="
    crossorigin="anonymous" />


<div class="fixed top-0 right-0">

    <div class="flex justify-around w-[95vw] h-[45vh]">
        <div class="h-fit w-[40vw] bg-white p-5 rounded-2xl my-5 shadow-lg">
            <div class="text-5xl text-[#013266] font-bold mb-4">
                Hi Aakash!
            </div>
            <div class="flex">
                <img class="w-[10vw] rounded-full" src="./assets/user.png" alt="User Profile">
                <div class="flex flex-col justify-center ml-5">
                    <ul class="space-y-2 text-lg text-gray-700">
                        <li><strong>Email ID:</strong> aakashmahajan2004@gmail.com</li>
                        <li><strong>Phone No.:</strong> +91 9582799219</li>
                        <li><strong>Blood Group:</strong> B+</li>
                        <li><strong>Postal Code:</strong> 110055</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="flex flex-col space-x-4 w-[20vw] justify-center gap-5">
            <div class="flex flex-col  mx-auto  p-6 rounded-lg shadow-lg w-[18vw] h-[15vh] justify-between text-white bg-[#ff839c]">
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold">99</span>
                </div>
                <div class="text-sm">Doubt Clearing Sessions Taken</div>
            </div>
            <div class="flex flex-col  p-6 rounded-lg shadow-lg w-[18vw] h-[15vh] justify-between text-white bg-[#5eb4ee]">
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold">50</span>
                </div>
                <div class="text-sm">Mental Health Sessions Taken</div>
            </div>
        </div>

        
        <!-- <div>
            <div class="h-[20vh] w-[30vw] bg-blue"></div>
            <div></div>
        </div> -->

        <div class="w-[30vw] border-4 border-indigo-500  px-5 py-4 rounded-lg bg-white shadow-lg mt-3">
            <div class="text-3xl font-semibold mb-4 text-[#013266]">Upcoming Appointments</div>
            <div class="h-[30vh] space-y-4 overflow-y-auto">
                <div class="bg-gray-200 p-4 rounded-lg shadow-sm ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-4 rounded-full" src="./assets/user.png" alt="Doctor Profile">
                            <div>
                                <div class="text-xl font-bold">Dr. S.P. Singh</div>
                                <div class="text-gray-600">Physics</div>
                            </div>
                        </div>
                        <button class="rounded-lg bg-blue-500 text-white px-4 py-2 hover:bg-blue-600">Details</button>
                    </div>
                    <div class="flex justify-between mt-4">
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-calendar-alt text-blue-500"></i>
                            <span class="ml-2">14 March, 2022</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-clock text-blue-500"></i>
                            <span class="ml-2">09:00 pm</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-200 p-4 rounded-lg shadow-sm ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-4 rounded-full" src="./assets/user.png" alt="Doctor Profile">
                            <div>
                                <div class="text-xl font-bold">Dr. S.P. Singh</div>
                                <div class="text-gray-600">Physics</div>
                            </div>
                        </div>
                        <button class="rounded-lg bg-blue-500 text-white px-4 py-2 hover:bg-blue-600">Details</button>
                    </div>
                    <div class="flex justify-between mt-4">
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-calendar-alt text-blue-500"></i>
                            <span class="ml-2">14 March, 2022</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-clock text-blue-500"></i>
                            <span class="ml-2">09:00 pm</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-200 p-4 rounded-lg shadow-sm ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-4 rounded-full" src="./assets/user.png" alt="Doctor Profile">
                            <div>
                                <div class="text-xl font-bold">Dr. S.P. Singh</div>
                                <div class="text-gray-600">Physics</div>
                            </div>
                        </div>
                        <button class="rounded-lg bg-blue-500 text-white px-4 py-2 hover:bg-blue-600">Details</button>
                    </div>
                    <div class="flex justify-between mt-4">
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-calendar-alt text-blue-500"></i>
                            <span class="ml-2">14 March, 2022</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-clock text-blue-500"></i>
                            <span class="ml-2">09:00 pm</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-200 p-4 rounded-lg shadow-sm ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-4 rounded-full" src="./assets/user.png" alt="Doctor Profile">
                            <div>
                                <div class="text-xl font-bold">Dr. S.P. Singh</div>
                                <div class="text-gray-600">Physics</div>
                            </div>
                        </div>
                        <button class="rounded-lg bg-blue-500 text-white px-4 py-2 hover:bg-blue-600">Details</button>
                    </div>
                    <div class="flex justify-between mt-4">
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-calendar-alt text-blue-500"></i>
                            <span class="ml-2">14 March, 2022</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-clock text-blue-500"></i>
                            <span class="ml-2">09:00 pm</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-200 p-4 rounded-lg shadow-sm ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-4 rounded-full" src="./assets/user.png" alt="Doctor Profile">
                            <div>
                                <div class="text-xl font-bold">Dr. S.P. Singh</div>
                                <div class="text-gray-600">Physics</div>
                            </div>
                        </div>
                        <button class="rounded-lg bg-blue-500 text-white px-4 py-2 hover:bg-blue-600">Details</button>
                    </div>
                    <div class="flex justify-between mt-4">
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-calendar-alt text-blue-500"></i>
                            <span class="ml-2">14 March, 2022</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-clock text-blue-500"></i>
                            <span class="ml-2">09:00 pm</span>
                        </div>
                    </div>
                </div>

                <!-- Additional appointments can be added here -->
            </div>
        </div>
    </div>


    <div class="h-[50vh] w-[95vw] flex space-x-6 p-4">
        <div class="w-fit">
            <!-- <div class="text-3xl font-semibold">Study Tracker</div> -->
            <div class="w-[40vw] h-[45vh] bg-white p-4 rounded-lg shadow-lg">
                <canvas id="myChart" width="80" height="40"></canvas>
            </div>
        </div>

        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg mt-12">
            <a href="#">
                <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900">Doubt Clearing Sessions</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">Resolve academic queries with expert guidance. Gain clarity and
                confidence in your studies through personalized doubt clearing sessions.</p>
            <div class="flex justify-between">
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <img src="assets/doubt.png" class="w-10" alt="" srcset="">
            </div>
        </div>

        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg mt-12">
            <a href="#">
                <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900">Mental Health Sessions</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">Prioritize well-being with professional support. Manage stress and
                improve focus for optimal learning through our mental health sessions.</p>
            <div class="flex justify-between">
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <img src="assets/m-health.png" class="w-12" alt="" srcset="">
            </div>
        </div>
    </div>

</div>