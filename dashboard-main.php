<?php
session_start();
include('./components/header.html');
?>

<script src="./javascript/dashboard-main.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-eKsGq8FvZM4c5ZxoPsU43F+tc8tF+gdbfJQq6UOpjbvDhUMWcnnBkuY5jR7RuCI6uHIW2tHq30z7CGN2nnbkyA==" crossorigin="anonymous" />


<div class="fixed top-0 right-0">

    

    <div class="flex justify-between">
        <div class="h-fit w-[40vw] bg-[#e4e7ea] p-5 rounded-2xl">
            <div class="text-5xl font-bold">
                Hi Aakash!
            </div>    
        <div class="flex">
            <img class="w-[13vw]" src="./assets/user.png" alt="">
            <div >
                <ul class="flex flex-col items-center">
                    <li>Email ID: aakashmahajan2004@gmail.com</li>
                    <li>Phone No.: +91 9582799219</li>
                    <li>Blood Group: B+</li>
                    <li>Postal Code: 110055</li>
                </ul>
            </div>
        </div>
    </div>
        <div class="w-[20vw]">
            <div class="text-3xl">Upcoming Appointments</div>
            <div class="flex items-center justify-between bg-gray-200 p-4 rounded-lg">
    <div class="flex items-center">
        <img class="w-12 h-12 mr-4 rounded-full" src="./assets/user.png" alt="">
        <div>
            <div class="text-xl font-bold">Dr. S.P. Singh</div>
            <div class="text-gray-600">Physics</div>
        </div>
    </div>
    <button class="rounded-lg bg-blue-500 text-white px-4 py-2">Details</button>
</div>
<div class="flex justify-between mt-4">
    <div class="flex items-center">
        <div class="text-blue-500"><i class="far fa-calendar-days"></i></div>
        <div class="ml-2">14 March, 2022</div>
    </div>
    <div class="flex items-center">
        <div class="text-blue-500"><i class="far fa-clock"></i></div>
        <div class="ml-2">09:00 pm</div>
    </div>
</div>

        </div>
    </div>

    <div class="h-[50vh]">
        <div class="w-fit">
            <div class="text-3xl">Study Tracker</div>
            <div class="w-[40vw] h-[45vh]"><canvas id="myChart" width="60" height="40"></canvas></div>
        </div>
        <div>
            <div class="bg-[#fb7f9b]">
                <div>Total</div>
                <div>50</div>
                <div>Doubt Clearing</div>
                <div>Sessions Taken</div>
            </div>
            <div></div>
        </div>
    </div>

</div>