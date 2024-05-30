<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/home.css" />
  <link rel="stylesheet" href="css/about1.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <?php
session_start();
include('./secondary-navbar.html');
?>
  <div
    class="bg-[url('./assets/home-banner-bg.webp')] mt-12 h-[120vh] w-[100vw] bg-cover flex flex-col lg:flex-row justify-around ">
    <div class="mt-24  lg:pl-24 flex flex-col gap-3 text-center lg:text-left px-4 lg:px-0">
      <div class="text-white font-black text-[8vw]  lg:text-[3.5vw] mt-[-100px] lg:mt-0 leading-tight">
        Embark on your educational <br class="hidden lg:block"> journey with us today.
      </div>
      <div class="text-white font-semibold text-[4vw] lg:text-[1.4vw] pt-6">
        In the realm of modern education, <br class="hidden lg:block"> few advancements rival the impact of our
        platform. <br class="hidden lg:block"> Join us in exploring the vast universe of learning.
      </div>
    </div>
    <div class="lg:mt-8 mt-[-16rem]  px-4 lg:px-0">
      <img src="assets/Hero.svg" alt="Hero Image" class="w-[30vw]  lg:max-w-md">
    </div>
  </div>


  <!-- Another Section -->
  <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
    <h2 class="mb-4 text-4xl tracking-tight text-center w-full font-semibold">
      Tailored for <span class="dark-color">learners</span> like you,
    </h2>
    <div class="services-2 section py-12 bg-white" id="services-2">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <div class="service-item rounded-lg p-6 ">
              <div class="icon mb-4 bg-[#02397c]">
                <img src="assets/service-02.png" alt="online degrees" class="w-full h-auto bg-[#02397c]" />
              </div>
              <div class="main-content">
                <h4 class="text-xl font-semibold mb-2">Interactive Learning Hub</h4>
                <li class="text-gray-700 mb-4">
                  Engage with dynamic tools for immersive learning experiences.
                </li>
                <li class="text-gray-700 mb-4">
                  Access diverse resources tailored to individual learning styles.
                </li>
                <li class="text-gray-700 mb-4">
                  Collaborate with peers and educators in interactive study groups.
                </li>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <div class="service-item rounded-lg p-6 ">
              <div class="icon mb-4 bg-[#02397c]">
                <img src="assets/service-01.png" alt="online degrees" class="w-full h-auto bg-[#02397c]" />
              </div>
              <div class="main-content">
                <h4 class="text-xl font-semibold mb-2">Personalized Study Suite</h4>
                <li class="text-gray-700 mb-4">
                  Customize study plans to match your unique learning needs.
                </li>
                <li class="text-gray-700 mb-4">
                  Track progress and receive tailored recommendations for improvement.
                </li>
                <li class="text-gray-700 mb-4">
                  Utilize adaptive technology for personalized learning pathways.
                </li>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <div class="service-item rounded-lg p-6 ">
              <div class="icon mb-4 bg-[#02397c]">
                <img src="assets/service-03.png" alt="online degrees" class="w-full h-auto bg-[#02397c]" />
              </div>
              <div class="main-content">
                <h4 class="text-xl font-semibold mb-2">Live Tutoring Network</h4>
                <li class="text-gray-700 mb-4">
                  Connect with expert tutors in real-time for personalized assistance.
                </li>
                <li class="text-gray-700 mb-4">
                  Schedule one-on-one sessions or join group tutorials.
                </li>
                <li class="text-gray-700 mb-4">
                  Receive instant feedback and guidance to enhance understanding.
                </li>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <!-- Slider -->
  <div
    class="flex flex-col lg:flex-row items-center h-screen w-screen bg-[url('assets/video-area-bg.png')] bg-cover p-6 lg:p-0">
    <div class="w-full lg:w-1/2 mt-14 lg:mt-0 lg:px-20 pb-10 lg:pb-40 text-center lg:text-left">
      <div class="text-2xl md:text-4xl font-bold text-white mb-6">
        Watch Our Trainers in Live Action
      </div>
      <div class="text-base md:text-lg text-white">
        In the history of modern astronomy, there is probably no one greater
        leap forward than the building and launch of the space telescope known
        as the Hubble.
      </div>
    </div>

    <div class="carousal w-full lg:w-1/2 lg:px-10">
      <div class="swiper mySwiper rounded-xl">
        <div class="swiper-wrapper rounded-xl">
          <div class="swiper-slide rounded-xl">
            <div class="overflow-hidden">
              <img
                src="https://st3.depositphotos.com/4218696/18211/i/450/depositphotos_182119506-stock-photo-back-to-school-conceptual-background.jpg"
                alt="Slide Image">
            </div>
          </div>
          <div class="swiper-slide rounded-xl">
            <div class="overflow-hidden">
              <img
                src="https://st3.depositphotos.com/4218696/18211/i/450/depositphotos_182119506-stock-photo-back-to-school-conceptual-background.jpg"
                alt="Slide Image">
            </div>
          </div>
          <div class="swiper-slide rounded-xl">
            <div class="overflow-hidden">
              <img
                src="https://st3.depositphotos.com/4218696/18211/i/450/depositphotos_182119506-stock-photo-back-to-school-conceptual-background.jpg"
                alt="Slide Image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Four Element Below -->
  <div class="flex flex-col items-center mt-16">
    <div class="our-offer">Our <span class="highlight">Offerings</span></div>
    <div class="flex justify-around gap-24">
      <div class="component">
        <div class="courses">
          <div class="course-card bg-[#02397c]">
            <h2 class="text-white">Class IX</h2>
            <h3 class="text-[aliceblue]">All Subjects</h3>
            <p class="text-white">Join our comprehensive Class 9 course Today!</p>
            <!-- <img style="width: 60px; height: auto;" src="assets/9.png" alt=""> -->
            <p class="standard text-white">9</p>
            <button class="bg-white">Explore</button>
          </div>
          <div class="course-card bg-[#CDDEFF]">
            <h2>Class X</h2>
            <h3>All Subjects</h3>
            <p>Join our comprehensive Class 10 course Today!</p>
            <!-- <img style="width: 70px; height: auto;" src="assets/10.png" alt=""> -->
            <p class="standard">10</p>
            <button class="text-black bg-white">Explore</button>
          </div>
          <!-- <div class="course-card bg-[#FFF0CB]">
            <h2>LIVE</h2>
            <h3>Doubt Clearing Sessions</h3>
            <p>Get personalized help in our doubt clearing sessions.</p>
            <img style="width: 70px; height: auto" src="assets/doubt.png" alt="" />
            <button>Explore</button>
          </div>
          <div class="course-card new bg-[#B6FFE4]">
            <h2>LIVE</h2>
            <h3>Mental Health Sessions</h3>
            <p>Enhance well-being with our mental health sessions.</p>
            <img style="width: 70px; height: auto" src="assets/m-health.png" alt="" />
            <button>Explore</button>
          </div> -->
        </div>
        <!-- <img src="assets/4-element-image.webp" class="" alt="" /> -->
      </div>
    </div>
  </div>

  <!-- AboutUS -->
  <div class="about-us mt-24">
    <div class="container mx-auto max-w-screen-lg px-4">
      <div class="lg:flex flex-wrap">
        <div class="lg:w-1/2 lg:ml-1/12">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item mb-4 border-b">
              <h2 class="accordion-header mb-0" id="headingOne">
                <button
                  class="accordion-button flex items-center justify-between w-full py-4 text-left"
                  type="button"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  Where shall we begin?
                </button>
              </h2>
              <div
                id="collapseOne"
                class="accordion-collapse expanding"
                aria-labelledby="headingOne"
              >
                <div class="accordion-body p-4">
                  Our academy excels with expert instructors, interactive lessons, flexible schedules, and personalized support. We offer diverse courses, innovative technology, and a vibrant community, ensuring an exceptional online learning experience for every student.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-4 border-b">
              <h2 class="accordion-header mb-0" id="headingTwo">
                <button
                  class="accordion-button flex items-center justify-between w-full py-4 text-left collapsed"
                  type="button"
                  aria-expanded="false"
                  aria-controls="collapseTwo"
                >
                How does StudyBYU involves parents?
                </button>
              </h2>
              <div
                id="collapseTwo"
                class="accordion-collapse"
                aria-labelledby="headingTwo"
              >
                <div class="accordion-body p-4">
                  DStudyBYU supports parents with regular progress updates, home learning resources, and open communication, ensuring they are informed and equipped to foster their child's educational success.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-4 border-b">
              <h2 class="accordion-header mb-0" id="headingThree">
                <button
                  class="accordion-button flex items-center justify-between w-full py-4 text-left collapsed"
                  type="button"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  Why StudyByU is the best?
                </button>
              </h2>
              <div
                id="collapseThree"
                class="accordion-collapse"
                aria-labelledby="headingThree"
              >
                <div class="accordion-body p-4">
                  StudyBYU is the best because it combines high-quality education with flexibility, expert faculty, and a supportive online community. Its diverse course offerings, innovative teaching methods, and personalized learning paths cater to various student needs, ensuring success.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-4 border-b">
              <h2 class="accordion-header mb-0" id="headingFour">
                <button
                  class="accordion-button flex items-center justify-between w-full py-4 text-left collapsed"
                  type="button"
                  aria-expanded="false"
                  aria-controls="collapseFour"
                >
                  Do we get the best support?
                </button>
              </h2>
              <div
                id="collapseFour"
                class="accordion-collapse"
                aria-labelledby="headingFour"
              >
                <div class="accordion-body p-4">
                  Yes, at StudyBYU, you receive the best support. Our dedicated team offers personalized assistance, timely responses, and comprehensive resources to ensure you succeed in your educational journey.
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-1/2 lg:ml-auto lg:self-center">
          <div class="section-heading mb-8">
            <h6 class="text-lg font-medium mt-20">About Us</h6>
            <h2 class="text-3xl font-semibold mb-4">
              What makes us the best academy online?
            </h2>
            <p class="text-gray-600">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              repellendus vitae cum soluta animi ullam, corporis voluptatum
              consequatur? Quae, illum cum ipsam magnam dolor autem! Non eaque
              nostrum iure cum.
            </p>
            <div class="mt-6">
              <a
                href="#"
                class="inline-block bg-blue-500 text-white py-2 px-4 rounded-full"
                >Discover More</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Quote -->
  <div class="max-w-screen-xl mt-24 px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
    <figure class="max-w-screen-md mx-auto">
      <svg class="h-12 mx-auto mb-3 text-[#6181f6] " viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
          fill="currentColor" />
      </svg>
      <blockquote>
        <p class="text-2xl font-medium text-gray-900 ">"Education is the most powerful weapon which you can use to change the world"</p>
      </blockquote>
      <figcaption class="flex items-center justify-center mt-6 space-x-3">
        <!-- <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture"> -->
        <div class="flex items-center divide-x-2 divide-gray-500 ">
          <div class="pr-3 font-medium text-gray-900 ">Nelson Mandela</div>
          <div class="pl-3 text-sm font-light text-gray-500 ">S.Africa's First President</div>
        </div>
      </figcaption>
    </figure>
  </div>

  <!-- Stripe -->
  <!-- <div class="">
    <img src="assets/stripe.webp" alt="" class="w-full">
  </div> -->


  <?php include('./footer.html');?>

  <script>
    document.querySelectorAll('.accordion-button').forEach(button => {
      button.addEventListener('click', () => {
        const collapse = button.parentElement.nextElementSibling;
        const expanded = button.getAttribute('aria-expanded') === 'true';

        // Collapse all other accordion items
        document.querySelectorAll('.accordion-collapse').forEach(item => {
          if (item !== collapse) {
            item.classList.add('hidden');
            item.classList.remove('expanding');
            item.style.maxHeight = '0';
            const siblingButton = item.previousElementSibling.querySelector('.accordion-button');
            siblingButton.classList.add('collapsed');
            siblingButton.setAttribute('aria-expanded', 'false');
          }
        });

        // Toggle the clicked accordion item
        button.classList.toggle('collapsed', expanded);
        button.setAttribute('aria-expanded', !expanded);

        if (expanded) {
          collapse.classList.add('hidden');
          collapse.classList.remove('expanding');
          collapse.style.maxHeight = '0';
        } else {
          collapse.classList.remove('hidden');
          collapse.classList.add('expanding');
          collapse.style.maxHeight = collapse.scrollHeight + 'px';
        }
      });
    });
  </script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  </script>
</body>

</html>