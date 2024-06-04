<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/class.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
    session_start();
    include('./secondary-navbar.html');
    ?>
    
    <div class="pt-[10rem] pb-[7rem] breadcrumbs bg-[url('./assets/bred.png')] bg-cover bg-center bg-no-repeat">
        <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold">Classes</h2>
        <nav>
            <ol class="flex items-center justify-center space-x-3">
            <li class="breadcrumb-item"><a href="index.html">Home </a></li>
            <li class="breadcrumb-item">-</li>
            <li class="text-primary">Classes </li>
            </ol>
        </nav>
        </div>
    </div>

    <!-- classes -->
    <div class="pt-10 pb-20">
      <div class="text-center text-4xl font-semibold mb-5">Select Your <span class="highlight">Class</span></div>
      <div class="flex justify-around gap-24 bg-[url('assets/section-bg-14.png')] bg-no-repeat bg-center" style="background-size: 95%;">
        <div class="component">
          <div class="courses">
            <div class="course-card bg-[#02397c] shadow-xl">
              <h2 class="text-white">Class IX</h2>
              <h3 class="text-[aliceblue]">All Subjects</h3>
              <p class="text-white">Join our comprehensive Class 9 course Today!</p>
              <p class="standard text-white">9</p>
              <button class="bg-white">Explore</button>
            </div>
            <div class="course-card bg-[#CDDEFF] shadow-xl">
              <h2>Class X</h2>
              <h3 class="text-[#0057ff]">All Subjects</h3>
              <p>Join our comprehensive Class 10 course Today!</p>
              <p class="standard">10</p>
              <button class="text-black bg-white">Explore</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="container mx-auto">
      <div class="gap-8 items-center px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 lg:px-6">
          <img class="w-2/3 hidden dark:block mx-auto" src="assets/Grades-pana.svg" alt="dashboard image">
          <div class="mt-4 md:mt-0">
              <h2 class="mb-4 text-4xl tracking-tight font-semibold text-[#003366]">Enhance Your Learning with Comprehensive <span class="text-primary">Study Resources</span></h2>
              <p class="mb-6 font-light text-[#333333] md:text-lg">Explore our extensive collection of notes and explanation videos tailored to your class and curriculum. StudyByU provides high-quality, easy-to-understand resources designed to help you excel in your studies. Select your class below to get started with the best study materials available.</p>
      
              <a href="#" class="inline-flex items-center text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                  Get Started
                  <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </a>
          </div>
      </div>
    </section>


    <div class="my-20">
      <div class="container-custom mx-auto">
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-7">
          <div class="bg-[url('assets/bg-ins-1.webp')] bg-cover bg-no-repeat p-10 rounded-md">
            <div class="w-2/3">
              <div class="text-xs">Enhance Your Learning</div>
              <div class="text-2xl font-semibold leading-[41px]">
                Doubt <span class="text-primary">Clearing</span> Sessions
              </div>
              <div class="mt-6 mb-12 text-sm">
                Resolve your queries, understand concepts better with expert help.
              </div>
              <a href="#" class="btn bg-black text-white">Contact Us</a>
            </div>
          </div>
          
          <div class="bg-[url('assets/bg-ins-2.png')] bg-cover bg-no-repeat p-10 rounded-md">
            <div class="w-2/3">
              <div class="text-xs">Prioritize Your Well-being</div>
              <div class="text-2xl font-semibold leading-[41px]">
                Mental
                <span class="text-primary">Health</span>
                Advice
              </div>
              <div class="mt-6 mb-12 text-sm">
                Access professional support, take care of your mental health.
              </div>
              <a href="#" class="btn bg-black text-white">Contact Us</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    
    <?php include('./footer.html');?>


<script>
    window.onscroll = function() {stickNavbar()};

    const navbar = document.getElementById("navbar");
    const sticky = navbar.offsetTop;

    function stickNavbar() {
      if (window.pageYOffset > sticky) {
        navbar.classList.add("sticky");
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>


</body>
</html>