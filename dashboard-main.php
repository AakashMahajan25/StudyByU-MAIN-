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

    .selectable-image.selected {
    border-color: blue;
}


.user-card-bg{
    background-image: url('./assets/user-card-bg.webp');
    background-size: 100% 100%;
}

</style>


<div class="lg:fixed lg:top-0 lg:right-0">

    <div class="flex flex-wrap justify-around items-start gap-5 lg:w-[93vw] m-3">
        
        <!-- info -->
        <div class="md:h-[38vh] lg:h-[45vh] lg:w-[39vw] w-full md:w-[53vw] user-card-bg bg-white p-5 rounded-xl shadow-lg bg-gradient-to-b from-blue-200 to-white">
        <div class="flex flex-col justify-between h-full mx-5">
            <div class="flex justify-between">
                <div class="text-xs">June 30, Thursday</div>
                <div class="text-gray-600"><i class="fa-solid fa-user-pen fa-md"></i></div>
            </div>
            <div class="relative w-fit group" id="profile-image-container">
                <img id="profile-image" class="w-[15vw] lg:w-[10vw] rounded-full hover:opacity-50 transition-all cursor-pointer" src="./assets/avatar1.jpg" alt="User Profile">
                <div class="absolute transition-all -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-0 group-hover:opacity-100"><i class="fa-regular fa-pen-to-square fa-xl"></i></div>
            </div>
            <div>
                <div class="text-3xl font-semibold">Welcome back, User!</div>
                <div>Unlocking potential with every step.</div>
            </div>
        </div>    
    </div>


    <!-- modal -->
    <div id="image-modal" class="hidden fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-11/12 md:w-1/2 lg:w-1/3">
            <span class="close absolute top-0 right-0 m-4 text-gray-500 text-xl cursor-pointer">&times;</span>
            <div class="flex justify-around mb-4">
                <img class="selectable-image w-24 h-24 rounded-full border-2 border-transparent cursor-pointer transition-all" src="./assets/avatar1.jpg" alt="User Image 1">
                <img class="selectable-image w-24 h-24 rounded-full border-2 border-transparent cursor-pointer transition-all" src="./assets/avatar2.jpg" alt="User Image 2">
                <img class="selectable-image w-24 h-24 rounded-full border-2 border-transparent cursor-pointer transition-all" src="./assets/avatar3.avif" alt="User Image 3">
                <img class="selectable-image w-24 h-24 rounded-full border-2 border-transparent cursor-pointer transition-all" src="./assets/avatar4.jpg" alt="User Image 4">
            </div>
            <button id="submit-image" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </div>
    </div>



        <!-- upcoming sessions -->
        <div class="w-full md:w-[38vw] lg:w-[30vw]  md:h-[38vh] lg:h-[45vh] border-1 border-indigo-500 px-5 py-4 rounded-xl bg-white shadow-lg ">
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
        <div class="w-full lg:w-[50vw] lg:h-[47vh] bg-white p-4 rounded-xl shadow-lg">
            <div class="text-2xl md:text-3xl lg:text-2xl font-semibold">Your Weekly Progress</div>
            <div class="w-full lg:w-[45vw]">
                <canvas id="myChart" width="100vh" height="40vh"></canvas>
            </div>
        </div>

        <!-- number of sessions -->
        <div class="flex gap-4 lg:flex-col lg:h-[47vh] lg:w-[19vw] justify-around w-full">
            <div class="h-1/2 bg-white py-3 px-5 rounded-xl shadow-lg">
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

            <div class="h-1/2 bg-white py-3 px-5 rounded-xl shadow-lg">
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
        <div class="w-full lg:w-[20.5vw] lg:h-[47vh]  p-3 bg-white border border-gray-200 rounded-lg shadow-lg flex flex-col justify-evenly">
            <div class="text-xl md:text-2xl lg:text-2xl 2xl:text-3xl font-semibold text-center">Daily Progress</div>
            <div class="text-sm md:text-md 2xl:text-xl text-center mt-2 mb-4">Keep improving the <br>quality of your study</div>

            <div class="flex justify-center 2xl:translate-y-1/2">
                <div class="relative h-20 w-20 md:w-30 md:h-30 lg:w-40 lg:h-40 flex items-center justify-center progress-wrapper">
                    <div class="absolute inset-0 flex items-center  justify-center">
                        <div class="relative w-full h-full flex items-center justify-center">
                            <div class="absolute inset-0 flex items-center justify-center text-black">
                                <div class="w-full h-full rounded-full overflow-hidden ">
                                    <div class="w-full h-full bg-gradient-to-b to-blue-500 from-blue-100 rounded-full"
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


<script>
    document.addEventListener('DOMContentLoaded', (event) => {
    const modal = document.getElementById("image-modal");
    const profileImageContainer = document.getElementById("profile-image-container");
    const profileImage = document.getElementById("profile-image");
    const closeBtn = document.querySelector(".close");
    const submitBtn = document.getElementById("submit-image");
    let selectedImage = null;

    profileImageContainer.onclick = function() {
        modal.classList.remove("hidden");
    }

    closeBtn.onclick = function() {
        modal.classList.add("hidden");
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.classList.add("hidden");
        }
    }

    const images = document.querySelectorAll('.selectable-image');
    images.forEach(image => {
        image.onclick = function() {
            images.forEach(img => img.classList.remove('selected'));
            image.classList.add('selected');
            selectedImage = image.src;
        }
    });

    submitBtn.onclick = function() {
        if (selectedImage) {
            profileImage.src = selectedImage;
            modal.classList.add("hidden");
        }
    }
});

</script>