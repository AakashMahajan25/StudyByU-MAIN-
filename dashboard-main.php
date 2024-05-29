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
          background-color: white; /* Tailwind gray-200 color */
        }
      </style>


<div class="fixed top-0 right-0">

    <div class="flex flex-wrap justify-between gap-6 w-[95vw] my-5 mx-6">
        <!-- info -->
        <div class="h-[40vh] w-[40vw] bg-white p-5 rounded-xl shadow-lg">
            <div class="flex justify-between">
                <div class="text-5xl text-[#013266] font-bold mb-4">
                    Hi Aakash!
                </div>
                <div><i class="fa-solid fa-user-pen fa-3x"></i></div>
            </div>
            <div class="flex">
                <img class="w-[10vw] rounded-full" src="./assets/user.png" alt="User Profile">
                <div class="flex flex-col justify-center ml-5">
                    <ul class="space-y-2 text-lg text-gray-700">
                        <li><i class="fa-solid fa-envelope"></i> aakashmahajan2004@gmail.com</li>
                        <li><i class="fa-solid fa-phone"></i> +91 9582799219</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- upcoming sessions -->
        <div class="w-[30vw] border-1 border-indigo-500 px-5 py-4 rounded-xl bg-white shadow-lg">
            <div class="text-3xl font-semibold text-[#013266] mb-4">Upcoming Sessions</div>
            <div class="h-[28vh] space-y-4 overflow-y-auto">

                <div class="bg-[aliceblue] py-2 px-4 rounded-lg shadow-sm ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-4 rounded-full" src="./assets/user.png" alt="Doctor Profile">
                            <div>
                                <div class="text-lg font-semibold">Dr. S.P. Singh</div>
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

                <div class="bg-[aliceblue] py-2 px-4 rounded-lg shadow-sm ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-4 rounded-full" src="./assets/user.png" alt="Doctor Profile">
                            <div>
                                <div class="text-lg font-semibold">Dr. S.P. Singh</div>
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

                <div class="bg-[aliceblue] py-2 px-4 rounded-lg shadow-sm ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-4 rounded-full" src="./assets/user.png" alt="Doctor Profile">
                            <div>
                                <div class="text-lg font-semibold">Dr. S.P. Singh</div>
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

                <div class="bg-[aliceblue] py-2 px-4 rounded-lg shadow-sm ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-4 rounded-full" src="./assets/user.png" alt="Doctor Profile">
                            <div>
                                <div class="text-lg font-semibold">Dr. S.P. Singh</div>
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
            </div>
        </div>

        <div>
            <div class="w-[20vw] h-[20vh] bg-white p-6 border border-gray-200 rounded-lg shadow-lg flex flex-col justify-between gap-4">
            
                <div class="flex h-fit">
                    <div class="text-sm">
                        DCS
                    </div>
                    <div class="font-bold mx-4 text-sm">·</div>
                    <div class="text-sm">
                        StudyByU
                    </div>
                </div>
                <div>
                    <div class="text-2xl">Doubt Clearing Sessions</div>
                    <div class="text-base">
                        Clear All your Doubts!
                    </div>
                </div>
                <div class="text-xl text-blue-500">
                    BOOK NOW <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>
            </div>
            
            <div class="w-[20vw] h-[20vh] mt-2 bg-white p-6 border border-gray-200 rounded-lg shadow-lg flex flex-col justify-between gap-4">
            
                <div class="flex h-fit">
                    <div class="text-sm">
                        MHS
                    </div>
                    <div class="font-bold mx-4 text-sm">·</div>
                    <div class="text-sm">
                        StudyByU
                    </div>
                </div>
                <div>
                    <div class="text-2xl">Mental Health Sessions</div>
                    <div class="text-base">
                        Addressing All Your Concerns.
                    </div>
                </div>
                <div class="text-xl text-blue-500">
                    BOOK NOW <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>
            
            </div>
            
        </div>

        <!-- chart -->
        <div class="w-fit bg-white p-4 rounded-xl shadow-lg">
            <div class="text-4xl font-semibold text-[#013266]">Your Weekly Progress</div>
            <div class="w-[44vw]">
                <canvas id="myChart" width="80" height="35"></canvas>
            </div>
        </div>

        <!-- number of sessions -->
        <div class="flex flex-col justify-between w-1/4 h-full">
            <div class="bg-white py-6 px-5 rounded-xl shadow-lg">
                <div class="flex justify-between items-center h-[7vh]">
                    <div class="text-5xl text-blue-500">10+</div>
                    <i class="fa-solid fa-question flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 text-blue-500 text-3xl"></i>
                </div>
                
                <div class="mt-5">
                    <div class="text-3xl font-semibold">Doubt Clearing</div>
                    <div class="text-xl">Total Sessions Taken</div>
                </div>
            </div>

            <div class="bg-white py-6 px-5 rounded-xl shadow-lg">
                <div class="flex justify-between items-center h-[7vh]">
                    <div class="text-5xl text-blue-500">20+</div>
                    <i class="fa-solid fa-heart flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 text-blue-500 text-2xl"></i>
                </div>
                
                <div class="mt-5">
                    <div class="text-3xl font-semibold">Mental Health</div>
                    <div class="text-xl">Total Sessions Taken</div>
                </div>
            </div>
        </div>

        <div class="w-[20vw] p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
            <div class="text-4xl font-semibold text-center mb-4">Daily Progress</div>
            <div class="text-lg font-medium text-center mb-1">Keep improving the</div>
            <div class="text-lg font-medium text-center mb-6">quality of your health</div>
            
            <div class="relative w-40 h-40 flex items-center justify-center progress-wrapper">
              <div class="absolute inset-0 flex items-center justify-center">
                <div class="relative w-full h-full flex items-center justify-center">
                  <div class="absolute inset-0 flex items-center justify-center text-black">
                    <div class="w-full h-full rounded-full overflow-hidden ">
                      <div class="w-full h-full bg-blue-500 rounded-full" style="clip-path: inset(0% 0% 0% 50%)"></div>
                    </div>
                  </div>
                  <div class="absolute inset-0 flex items-center justify-center text-xl font-bold">50%</div>
                </div>
              </div>
            </div>
          </div>
         
         

    </div>

</div>