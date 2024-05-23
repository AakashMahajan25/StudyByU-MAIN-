
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/subjects.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script defer src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<?php
session_start();
include('./secondary-navbar.html');
?>
    <div class="hero">
        <div class="hero-banner">
            <div class="hero-banner-content">
                <div class="hero-banner-content-heading">
                    Maximize Your Preparation
                </div>
                <div class="hero-banner-content-text">
                    Buy our Courses Today and Get,
                </div>
                <div class="hero-banner-content-list">
                    <i class="fa-regular fa-circle-check"></i> Animated Videos
                </div>
                <div class="hero-banner-content-list">
                    <i class="fa-regular fa-circle-check"></i> Visually Rich Notes
                </div>
                <div class="hero-banner-content-list">
                    <i class="fa-regular fa-circle-check"></i> Live Doubt Clearing Sessions
                </div>
            </div>
            <div class="hero-banner-image"><img src="assets/banner-astronaut.png" alt=""></div>
        </div>
    </div>
    <div class="subjects">
        <div class="subjects-heading">Our Courses</div>
        <div class="subjects-container">
            <div class="subject-element subject-1">
                <div class="subject-logo"><img src="assets/english-icon.png" alt=""></div>
                <div class="subject-element-content">
                    <div class="subject-heading">English</div>
                    <div class="subject-link-logo"><img src="assets/right-arrow.png" alt=""></div>
                </div>
            </div>
            <div class="subject-element subject-2">
                <div class="subject-logo"><img src="assets/science.png" alt=""></div>
                <div class="subject-element-content">
                    <div class="subject-heading">Science</div>
                    <div class="subject-link-logo"><img src="assets/right-arrow.png" alt=""></div>
                </div>
            </div>
            <div class="subject-element subject-3">
                <div class="subject-logo"><img src="assets/biology.png" alt=""></div>
                <div class="subject-element-content">
                    <div class="subject-heading">Biology</div>
                    <div class="subject-link-logo"><img src="assets/right-arrow.png" alt=""></div>
                </div>
            </div>
            <div class="subject-element subject-4">
                <div class="subject-logo"><img src="assets/physics.png" alt=""></div>
                <div class="subject-element-content">
                    <div class="subject-heading">Physics</div>
                    <div class="subject-link-logo"><img src="assets/right-arrow.png" alt=""></div>
                </div>
            </div>
            <div class="subject-element subject-5">
                <div class="subject-logo"><img src="assets/chemistry.png" alt=""></div>
                <div class="subject-element-content">
                    <div class="subject-heading">Chemistry</div>
                    <div class="subject-link-logo"><img src="assets/right-arrow.png" alt=""></div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="four-element-container">
        <h1>Our <span class="highlight">Offerings</span></h1>
        <div class="component">
            <div class="courses">
                <div class="course-card bg-[#FCE4EC]">
                    <h2>Class IX</h2>
                    <h3>All Subjects</h3>
                    <p>Join our comprehensive Class 9 course Today!</p>
                    <img style="width: 60px; height: auto;" src="assets/9.png" alt="">
                    <button>Explore</button>
                </div>
                <div class="course-card bg-[#CDDEFF]">
                    <h2>Class X</h2>
                    <h3>All Subjects</h3>
                    <p>Join our comprehensive Class 10 course Today!</p>
                    <img style="width: 70px; height: auto;" src="assets/10.png" alt="">
                    <button>Explore</button>
                </div>
                <div class="course-card bg-[#FFF0CB]">
                    <h2>LIVE</h2>
                    <h3>Doubt Clearing Sessions</h3>
                    <p>Get personalized help in our doubt clearing sessions.</p>
                    <img style="width: 70px; height: auto;" src="assets/doubt.png" alt="">
                    <button>Explore</button>
                </div>
                <div class="course-card new bg-[#B6FFE4]">
                    <h2>LIVE</h2>
                    <h3>Mental Health Sessions</h3>
                    <p>Enhance well-being with our mental health sessions.</p>
                    <img style="width: 70px; height: auto;" src="assets/m-health.png" alt="">
                    <button>Explore</button>
                </div>
            </div>
            <div class="bg-four-element-container"></div>
        </div>
    </div>

        <section class="bg-[aliceblue]">
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6 my-4">
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-[#003366]">Empower Your Learning with Dedicated Doubt Clearing Sessions</h2>
                    <p class="mb-6 font-light text-[#333333] md:text-lg">StudyByU's LIVE Doubt Clearing Sessions offer a this facility to address your questions and enhance your understanding. Engage with experts in interactive sessions designed to ensure no query is left unresolved.</p>
                    <a href="#" class="inline-flex items-center text-white bg-[#28a745] hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                        Get Started
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                <img class="w-1/2 hidden dark:block mx-auto" src="assets/teacher.png" alt="dashboard image">
            </div>
        </section>

        <section class="">
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img class="w-2/3 hidden dark:block mx-auto" src="assets/mental-health.png" alt="dashboard image">
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-[#003366]">Prioritize Your Well-being with Dedicated Mental Health Sessions</h2>
                    <p class="mb-6 font-light text-[#333333] md:text-lg">StudyByU's Mental Health Sessions provide a supportive environment to address your concerns and enhance your well-being. Connect with experts in interactive sessions designed to ensure your mental health needs are met with care and understanding.
                    </p>
                    <a href="#" class="inline-flex items-center text-white bg-[#28a745] hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                        Get Started
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        </section>

        
        <?php include('./footer.html');?>
</body>
</html>

