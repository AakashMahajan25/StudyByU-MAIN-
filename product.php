<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <style>

        body{
            background: rgb(246, 246, 248);
            padding-top: 100px;
        }
      .description {
        background-color: white;
        box-shadow: 0px 0px 10px 2px rgb(230, 230, 230);
        margin: 30px 10px 10px 40px;
        border-radius: 20px;
        padding: 18px 14px 18px 24px;
      }
      .description-section {
        display: flex;
        /* margin-top: 20px; */
        margin: 10px;
        font-size: 18px;
      }
      .description-content {
        display: none;
        margin-top: 20px;
        margin: 10px;
        font-size: 18px;
        /* color: rgb(119, 119, 119); */
      }
      .toggle-button {
        cursor: pointer;
        color: #0057d3;
        font-size: 18px;
        background: none;
        border: none;
        display: block;
        padding: 0px 0px 0px 10px;
        text-decoration: underline;
      }

      .description-heading {
        /* margin-top: 25px; */
        margin-left: 10px;
        color: #003267;
        font-size: 22px;
        font-weight: 500;
      }

      .buy-now-btn{
        background: #062c60;
        
      }

      .fixed{
        background: #e4ecfa;
      }

      .other-ch{
        color: #062c60;
        font-weight: 500;
      }

      .ch-title{
        font-weight: 500;
      }

      .ch-name{
        font-weight: 600;
      }

      /* CSS for two-banners ahead */
.hero {
    display: flex;
    /* background: #000; */
    justify-content: center;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 66vw;
    padding: 0px 38px 0px 38px ;
}

@media only screen and (max-width:1024px){
    .respo-hero{
        display: block;
    }

    .image-container{
        width: 100%;
    }

    .content{
        width: 100%;
        margin-top: 10px;
        
    }

    .description-content{
        color: rgb(100, 100, 100);
    }

    .description-section{
        color: rgb(109, 109, 109);
    }

    .hero-banner{
        display: flex !important;
        flex-direction: column !important;
        justify-content: space-around !important;
        padding: 20px !important;
        height: 30vh !important;
    }

    

    .hero-banner img{
        display: none;
    }

    .hero-banner-content-heading{
       font-size: 25px !important;
       /* text-align: center !important; */
       padding-left: 0px;
    }

    .hero-banner-content-text{
        margin-left: 0px !important;
        padding: 5px 0px !important;
    }

    .banner-button-get-started button{
        margin: 0px !important;
        margin: 10px 0px !important;
    }
}


.hero-banner {
    height: 34vh;
    width: 100%;
    border-radius: 20px;
    background-color: aliceblue;
    z-index: -1;
    display: flex;
    justify-content: space-around;
    align-items: center;
    box-shadow: 0px 0px 10px 2px rgb(230, 230, 230);
    padding: 0px 20px;
}

.hero-banner img {
    height: auto;
    width: 19vw;
}

.hero-banner-content-heading {
    color: #003366;
    font-size: 2.4vw;
    font-weight: 700;
    line-height: 40px;
}

.hero-banner-content-text {
    font-size: 17px;
    font-weight: 500;
    padding: 5px 0px;
}

.hero-banner-content-list {
    margin-bottom: 2px;
}

.banner-button-get-started button {
    display: flex;
    justify-content: center;
    background: #062c60;
    font-size: 15px;
    color: white;
    padding: 6px 10px;
    border-radius: 40px;
    margin: 10px 0px;
    align-items: center;
}

.button-right-arrow {
    margin-left: 2px;
}

.blue-bg:hover{
  background-color: rgb(246, 246, 248);
}
    </style>
    <script>
     window.addEventListener('scroll', function() {
    const fixedSection = document.querySelector('.fixed-section');
    const scrollPoint = 1; // Change this value to the point where you want the section to stop being fixed
    const offsetTop = fixedSection.offsetTop;

    if (window.scrollY >= scrollPoint) {
      fixedSection.style.display = 'none';
        fixedSection.style.position = 'absolute';
        fixedSection.style.top = `${scrollPoint}px`;
    } else {
        fixedSection.style.position = 'fixed';
        fixedSection.style.top = '0px';
    }
});

    </script>
  </head>
  <body>
    <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="assets/logo.png" class="h-10" alt="StudyByU Logo">
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="hover:bg-blue-800 hover:text-white focus:ring-4 border-solid border-2 border-blue-500 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign In</button>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700">
                <li>
                    <a href="#" class="block py-2 px-3 text-black rounded md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:border-gray-700" aria-current="page">Home</a>
                </li>
                <!-- Dropdown Added Below -->
                <li class="relative">
                    <button id="dropdownNavbarLink" class="dropdown flex items-center justify-between w-full py-2 px-3 rounded md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto md:dark:hover:text-blue-500 dark:border-gray-700">
                        Classes
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="dropdown-menu absolute left-0 z-10 hidden font-normal bg-white  rounded-lg shadow w-44 divide-y divide-gray-100dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm" aria-labelledby="dropdownNavbarLink">
                            <li>
                                <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Class IX</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Class X</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-black rounded md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500   dark:border-gray-700">Doubt Clearing Sessions</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-black rounded  md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500   dark:border-gray-700">Mental Health</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-black rounded  md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500   dark:border-gray-700">About Us</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-black rounded  md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500   dark:border-gray-700">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div>
      <div>
        <!-- <h1 class="pb-6 pt-4 text-xl px-10 other-ch">StudyByU </h1> -->
        <div class="flex  w-2/3">
          <div class="w-1/3 px-10">
            <img
              src="https://wallpapers.com/images/hd/physics-1651-x-2550-picture-bonim27whwjunncg.jpg"
              alt=""
              class="rounded-lg"
            />
          </div>
          <div class="pr-[44px]  w-[60%] flex flex-col justify-around ">
          <div>
            <h1 class="text-[3vw] ch-title leading-10 2xl:leading-[60px]">
              <span class="  text-xl leading-none  other-ch block xl:mb-4">Chapter 4 </span>
               Linear Equations in Two Variables</h1>
               <div class="text-[1.5vw] ">Rs. 150 <del class="text-[1vw]">Rs. 200</del></div>
          </div>
      
            <div class="text-[1.1vw] text-gray-600">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae
              neque recusandae aliquid officiis dolores mollitia quod ipsam sunt
              quo dolor laudantium vero, debitis iste aut? Tempore debitis
              doloremque quasi minima.
            </div>
            <div><button class="buy-now-btn py-2 px-8 text-white text-[1vw] rounded-3xl">Buy Now</button></div>
          </div>
        </div>
        <!-- Description Section -->
        <div class="description w-[60%]">
          <div class="description-heading">Description</div>
          <div class="description-section">
            This specialization provides a comprehensive introduction to machine
            learning, data mining, and statistical pattern recognition. The
            courses draw
          </div>
          <div class="description-content">
            Certainly! Here is a specifications list for a doubt-solving sessions
            program: <br />
            Doubt-Solving Sessions Specifications: <br />
            1. Expert Tutors:<br />
            - Highly qualified and experienced in their respective fields.<br />
            - Specialize in personalized tutoring and doubt resolution.<br />
            2. One-on-One Sessions:<br />
            - Individual attention to address specific doubts and questions.<br />
            - Tailored explanations and teaching methods.<br />
            3. Flexible Scheduling:<br />
            - Sessions available at convenient times for students.<br />
            - Easy to book through an online portal.<br />
            4. Interactive Platform:<br />
            - Use of advanced online tools for real-time interaction.<br />
            - Virtual whiteboards, screen sharing, and annotation features.<br />
            5. Comprehensive Coverage:<br />
            - Addressing doubts across various subjects and topics.<br />
            - Including STEM subjects, humanities, languages, and more.<br />
            6. Instant Doubt Resolution:<br />
            - Quick response time for resolving urgent academic queries.<br />
          </div>
          <button
            class="toggle-button"
            id="toggle-btn"
            onclick="toggleDescription()"
          >
            Show more
          </button>
        </div>
      </div>
      <div class="hero hero-2">
        <div class="hero-banner">
            <div class="hero-banner-content">
                <div class="hero-banner-content-heading">
                    Unravel Your Doubts, Excel in Your Studies!
                </div>
                <div class="hero-banner-content-text">
                    Get our Doubt Solving Sessions Today!
                </div>
                <div class="banner-button-get-started">
                    <button>Get Started <div class="button-right-arrow"><i class="fa-solid fa-arrow-right"></div></i></button>
                </div>
            </div>
            <div class="hero-banner-image"><img src="assets/doubt.png" alt=""></div>
        </div>
        </div>
      <div class="fixed-section fixed px-4 bottom-0 right-0 top-16 w-1/3 -z-12">
        <div class="py-5 other-ch px-2 text-xl">Other Chapters</div>
        <div class="overflow-y-scroll h-[70vh]">
          <div class="flex items-center justify-between blue-bg  rounded-2xl my-1">
            <div class="w-[15vh] p-2">
              <img
                src="https://wallpapers.com/images/hd/physics-1651-x-2550-picture-bonim27whwjunncg.jpg"
                alt=""
                class="w-full rounded-lg"
              />
            </div>
            <h2 class="w-2/3 font-ch-name">
              <span class="block block text-sm other-ch">Chapter - 1</span>
              Number Systems</h2>
            <div class="px-4">></div>
          </div>
          <div class="flex items-center justify-between  blue-bg rounded-2xl my-1">
            <div class="w-[15vh] p-2">
              <img
                src="https://wallpapers.com/images/hd/physics-1651-x-2550-picture-bonim27whwjunncg.jpg"
                alt=""
                class="w-full rounded-lg"
              />
            </div>
            <h2 class="w-2/3 font-ch-name">
               <span class="block text-sm other-ch">Chapter - 1</span>
              Polynomials</h2>
            <div class="px-4">></div>
          </div>
          <div class="flex items-center justify-between  blue-bg rounded-2xl my-1">
            <div class="w-[15vh] p-2">
              <img
                src="https://wallpapers.com/images/hd/physics-1651-x-2550-picture-bonim27whwjunncg.jpg"
                alt=""
                class="w-full rounded-lg"
              />
            </div>
            <h2 class="w-2/3 font-ch-name">
               <span class="block text-sm other-ch">Chapter - 1</span>
              Coordinate Geometry</h2>
            <div class="px-4">></div>
          </div>
          <div class="flex items-center justify-between blue-bg rounded-2xl my-1">
            <div class="w-[15vh] p-2">
              <img
                src="https://wallpapers.com/images/hd/physics-1651-x-2550-picture-bonim27whwjunncg.jpg"
                alt=""
                class="w-full rounded-lg"
              />
            </div>
            <h2 class="w-2/3 font-ch-name">
               <span class="block text-sm other-ch">Chapter - 1</span>
              Linear Equations in Two Variables</h2>
            <div class="px-4">></div>
          </div>
        </div>
        <div class="p-4 text-center"><a href="" class="underline text-blue-900">View all ></a></div>
      </div>
    </div>

    

    <!-- <script>
      function toggleDescription() {
        var content = document.querySelector(".description-content");
        var button = document.querySelector(".toggle-button");
        if (content.style.display === "none" || content.style.display === "") {
          content.style.display = "inline-block";
          button.textContent = "Show less";
        } else {
          content.style.display = "none";
          button.textContent = "Show more";
        }
      }
    </script>
        <script >
          document.addEventListener('DOMContentLoaded', function () {
              const toggleButton = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
              const menu = document.getElementById('navbar-sticky');
      
              toggleButton.addEventListener('click', function () {
                  menu.classList.toggle('hidden');
              });
      
              // Dropdown functionality
              const dropdownButton = document.getElementById('dropdownNavbarLink');
              const dropdownMenu = document.getElementById('dropdownNavbar');
      
              // Function to open dropdown on mouseenter
              const openDropdown = function () {
                  dropdownMenu.classList.remove('hidden');
              };
      
              // Function to close dropdown on mouseleave
              const closeDropdown = function () {
                  dropdownMenu.classList.add('hidden');
              };
      
              // Add event listeners for mouseenter and mouseleave
              dropdownButton.addEventListener('mouseenter', openDropdown);
              dropdownButton.addEventListener('mouseleave', closeDropdown);
              dropdownMenu.addEventListener('mouseenter', openDropdown);
              dropdownMenu.addEventListener('mouseleave', closeDropdown);
          });
      </script> -->
      
    <!-- <?php include('./footer.html');?> -->
  </body>
</html>
