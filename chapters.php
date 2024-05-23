 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapters Section</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/chapters.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<body>
<?php
session_start();
include('./secondary-navbar.html');
?>
    <div class="container mx-auto p-4">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-2/3 px-4">
                
                <div class="banner relative mb-5 overflow-hidden p-6">
                    <div class="banner-content">
                        <h1 class="banner-title text-2xl font-bold">Get <span class="text-blue-500">Science Notes for Class 9th</span></h1>
                        <p class="mt-4">
                            Purchase comprehensive Science notes for Standard 9th with detailed video explanations for only ₹500.
                        </p>
                        <a href="#" class="inline-flex items-center mt-4 text-blue-500 hover:text-blue-700">
                            <i class="fa-solid fa-arrow-right mr-2"></i> Buy Now
                        </a>
                    </div>
                    <div class="circle bottom-[-50px] right-[-18px]">
                        <img src="assets/science.png" alt="Image Description">
                    </div>
                </div>
                 

                <section class="chapters-section">
                    <header class="chapters-header">
                        <h2>Class 9 Science Notes</h2>
                    </header>
                    <ul class="chapters">
                        <li class="chapters-item">
                            <h2 class="title">Chapter 1 - Matter in Our Surroundings</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right" ></i></div>
                        </li>
                        <li class="chapters-item">
                            <h2 class="title">Chapter 2 - Is Matter Around Us Pure</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right"></i></div>
                        </li>
                        <li class="chapters-item">
                            <h2 class="title">Chapter 3 - Atoms and Molecules</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right"></i></div>
                        </li>
                        <li class="chapters-item">
                            <h2 class="title">Chapter 5 - The Fundamental Unit of Life</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right"></i></div>
                        </li>
                        <li class="chapters-item">
                            <h2 class="title">Chapter 6 - Tissues</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right"></i></div>
                        </li>
                        <li class="chapters-item">
                            <h2 class="title">Chapter 7 - Diversity in Living Organisms</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right"></i></div>
                        </li>
                        <li class="chapters-item">
                            <h2 class="title">Chapter 8 - Motion</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right"></i></div>
                        </li>
                        <li class="chapters-item">
                            <h2 class="title">Chapter 9 - Force and Laws of Motion</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right"></i></div>
                        </li>
                        <li class="chapters-item">
                            <h2 class="title">Chapter 10 - Gravitation</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right"></i></div>
                        </li>
                        <li class="chapters-item">
                            <h2 class="title">Chapter 11 - Work and Energy</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right"></i></div>
                        </li>
                        <li class="chapters-item">
                            <h2 class="title">Chapter 12 - Sound</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right"></i></div>
                        </li>
                        <li class="chapters-item">
                            <h2 class="title">Chapter 13 - Why Do We Fall ill</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right"></i></div>
                        </li>
                        <li class="chapters-item">
                            <h2 class="title">Chapter 14 - Natural Resources</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right"></i></div>
                        </li>
                        <li class="chapters-item">
                            <h2 class="title">Chapter 15 - Improvement in Food Resources</h2>
                            <div class="redirect"><i class="fa-solid fa-arrow-right"></i></div>
                        </li>
                    </ul>
                </section>
            </div>

            <div class="w-full lg:w-1/3 px-4">
                <div class="sidebar-widget mb-4">
                    <div class="sidebar-widget-header">Other Subjects</div>
                    <div class="sidebar-widget-body">
                        <ul>
                            <li>English</li>
                            <li>Maths</li>
                            <li>Science</li>
                            <li>Social Studies</li>
                        </ul>
                    </div>
                </div>

                <div class="sidebar-widget mb-4">
                    <img src="assets/dcs.webp" alt="" srcset="">
                </div>

            </div>
        </div>
    </div>

    <?php include('./footer.html');?>
</body>
</html> 

