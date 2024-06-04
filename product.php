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
    <link rel="stylesheet" href="css/product.css">
  </head>
  <body>
    
<?php
session_start();
include('./secondary-navbar.html');
?>
    <section class="one clearfix">
      <div class="left">
        <div class="flex  w-full pt-10">
          <div class="w-1/3 px-10 ">
            <img src="assets/4.webp" alt="" class="rounded-lg img" />
          </div> 

          <div class="  w-[60%] flex flex-col justify-around ">
            <div>
              <h1 class="text-[2.5vw] ch-title leading-10 2xl:leading-[60px]">
                <span class="  text-xl leading-none  other-ch block xl:mb-4">Chapter 4 </span>
                Linear Equations in Two Variables
              </h1>
              <div class="text-[1.6vw] font-semibold">₹48 <del class="text-[1vw] text-gray-500">50</del></div>
            </div>
  
            <div class="text-[1.15vw] text-gray-600">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae
              neque recusandae aliquid officiis dolores mollitia quod ipsam sunt
              quo dolor laudantium vero, debitis iste aut?
            </div>
            <div>
              <button class="buy-now-btn">Buy Now</button>
            </div>
          </div>
        </div>

        <div class="description w-[90%]">
          <div class="description-heading">Description</div>
          <div class="description-section text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat labore fuga deserunt. Modi, atque nostrum officiis mollitia saepe ducimus tenetur vitae vero, fugit, omnis aliquam at totam...
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
          <button class="toggle-button" id="toggle-btn" onclick="toggleDescription()">
            Show more
          </button>
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

      </div>
      <div class="right">
          <div class="right-child">
              <div class="px-4 bottom-0 right-0 top-16 w-full -z-12">
                  <div class="py-5 other-ch px-2 text-xl">Other Chapters</div>
                  <div class="other-ch-body rounded-xl p-4 right-body overflow-y-scroll h-[70vh] w-full">
                      <div class="flex items-center justify-between blue-bg rounded-2xl my-1">
                          <div class="w-[15vh] p-2">
                              <img src="assets/2.webp" alt="" class="w-full rounded-lg" />
                          </div>
                          <h2 class="w-2/3 font-ch-name">
                              <span class="block text-xs text-gray-500">Chapter - 1</span>
                              Number Systems
                          </h2>
                          <div class="arrow-circle">></div>
                      </div>
                      <div class="flex items-center justify-between blue-bg rounded-2xl my-1">
                          <div class="w-[15vh] p-2">
                              <img src="assets/3.webp" alt="" class="w-full rounded-lg" />
                          </div>
                          <h2 class="w-2/3 font-ch-name">
                              <span class="block text-xs text-gray-500">Chapter - 2</span>
                              Polynomials
                          </h2>
                          <div class="arrow-circle">></div>
                      </div>
                      <div class="flex items-center justify-between blue-bg rounded-2xl my-1">
                          <div class="w-[15vh] p-2">
                              <img src="assets/4.webp" alt="" class="w-full rounded-lg" />
                          </div>
                          <h2 class="w-2/3 font-ch-name">
                              <span class="block text-xs text-gray-500">Chapter - 3</span>
                              Coordinate Geometry
                          </h2>
                          <div class="arrow-circle">></div>
                      </div>
                      <div class="flex items-center justify-between blue-bg rounded-2xl my-1">
                          <div class="w-[15vh] p-2">
                              <img src="assets/5.webp" alt="" class="w-full rounded-lg" />
                          </div>
                          <h2 class="w-2/3 font-ch-name">
                              <span class="block text-xs text-gray-500">Chapter - 4</span>
                              Linear Equations in Two Variables
                          </h2>
                          <div class="arrow-circle">></div>
                      </div>
                  </div>
                  <div class="text-center underline text-blue-800 p-4">
                      <a href="">View All ></a>
                  </div>
              </div>
          </div>
      </div>

    </section>
  <?php include('./footer.html'); ?>

    

    <script>
      window.addEventListener("scroll", reOrder);
      window.addEventListener("resize", reOrder);

      function reOrder() {
        var mq = window.matchMedia("(min-width: 992px)");
        var rightChild = document.querySelector(".right-child");
        var rightChildH2 = rightChild.querySelector("h2");
        var left = document.querySelector(".left");
        var sectionOne = document.querySelector(".one");

        if (mq.matches) {
          rightChild.classList.add("customm");

          var scroll = window.scrollY;
          var topContent = sectionOne.offsetTop;
          var sectionHeight = left.offsetHeight;
          var rightHeight = rightChild.offsetHeight;
          var bottomContent = topContent + sectionHeight - rightHeight - 45;

          if (scroll > topContent && scroll < bottomContent) {
            rightChild.classList.remove("posAbs");
            rightChild.classList.add("posFix");
          } else if (scroll > bottomContent) {
            rightChild.classList.remove("posFix");
            rightChild.classList.add("posAbs");
          } else if (scroll < topContent) {
            rightChild.classList.remove("posFix");
          }
        } else {
          rightChild.classList.remove("customm", "posAbs", "posFix");
          
        }
      }

      function toggleDescription() {
        var content = document.querySelector(".description-content");
        var button = document.querySelector(".toggle-button");
        if (content.style.display === "none" || content.style.display === "") {
          content.style.display = "inline-block";
          button.textContent = "Show less";
          reOrder();
        } else {
          content.style.display = "none";
          button.textContent = "Show more";
        }
      }
    </script>
  </body>
</html>