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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

</head>

<body>
  <?php
session_start();
include('./secondary-navbar.html');
?>

 <!-- hero -->
<div class="bg-[url('./assets/home-banner-bg.webp')] relative bg-no-repeat mt-10 h-[139vh] w-[100vw] lg:px-12">
    <section class="py-10 sm:py-16 lg:py-24" data-aos="fade-up">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" data-aos="fade-up">
            <div class="grid items-center justify-between grid-cols-1 gap-12 lg:grid-cols-2" data-aos="fade-up">
                <div data-aos="fade-right">
                    <h1 class="text-4xl mt-10 lg:mt-0 font-bold text-white sm:text-6xl lg:text-7xl">
                    Elevating education with
                        <div class="relative inline-flex">
                            <span class="absolute inset-x-0 bottom-0 border-b-[20px] border-blue-500"></span>
                            <span class="relative text-4xl font-bold text-white sm:text-6xl lg:text-7xl">joy and ease</span>
                        </div>
                    </h1>

                    <p class="mt-8 text-base text-white sm:text-xl">Connect, Collaborate, and Succeed: Revolutionize Your Study Sessions with StudyByU.</p>

                    <div class="mt-10 sm:flex sm:items-center sm:space-x-8">
                        <a href="#" title="" class="rounded-lg inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-orange-600" role="button" > Get Started </a>
                    </div>
                </div>

                <div class="w-[35vw] lg:max-w-md ml-auto" data-aos="fade-left">
                    <img src="assets/Hero.svg" class="-translate-y-20" alt="" />
                </div>
            </div>
        </div>
    </section>
</div>


<!-- classes -->
<div class="bg-[url('./assets/notebook-paper.jpg')]  mt-[-53vh] bg-contain   pt-[30vh] pb-[20vh]" >
  <div class="our-offer text-center" data-aos="fade-up">Our <span class="highlight">Offerings</span></div>
  <div class="flex justify-around gap-24" data-aos="fade-up">
    <div class="component" data-aos="fade-right">
      <div class="courses">
        <div class="course-card bg-[#02397c]" data-aos="flip-left">
          <h2 class="text-white">Class IX</h2>
          <h3 class="text-[aliceblue]">All Subjects</h3>
          <p class="text-white">Join our comprehensive Class 9 course Today!</p>
          <!-- <img style="width: 60px; height: auto;" src="assets/9.png" alt=""> -->
          <p class="standard text-white">9</p>
          <button class="bg-white">Explore</button>
        </div>
        <div class="course-card bg-[#CDDEFF]" data-aos="flip-right">
          <h2>Class X</h2>
          <h3>All Subjects</h3>
          <p>Join our comprehensive Class 10 course Today!</p>
          <!-- <img style="width: 70px; height: auto;" src="assets/10.png" alt=""> -->
          <p class="standard">10</p>
          <button class="text-black bg-white">Explore</button>
        </div>
      </div>
    </div>
  </div>
</div>


 <!-- newsletter -->
<div class="bg-primary py-20" data-aos="fade-up">
  <div class="container mx-auto">
    <div class="lg:flex lg:items-center lg:space-x-[70px]">
      <div class="flex-none" data-aos="fade-right">
        <div class="flex items-center space-x-8 text-white max-w-[327px] mx-auto lg:mb-0 md:mb-10 mb-5">
          <div class="flex-none">
            <img src="assets/big-mail.svg" alt="">
          </div>
          <div class="flex-1 lg:text-3xl font-semibold">
            Subscribe to My Newsletter
          </div>
        </div>
      </div>
      <div class="flex-1" data-aos="fade-left">
        <div class="md:flex items-center relative md:space-x-6 md:space-y-0 space-y-4">
          <div class="flex-1 relative">
            <span class="absolute left-0 top-1/2 -translate-y-1/2">
              <img src="assets/mail-white.svg" alt="">
            </span>
            <input type="text" placeholder="Enter your mail address" 
              class="w-full border-b border-t-0 border-l-0 border-r-0 border-[#CDDEFF] ring-0 focus:ring-0 bg-transparent text-white
              placeholder:text-[#CDDEFF] focus:outline-0 focus:border-[#CDDEFF] transition pl-8 text-lg">
          </div>
          <div class="flex-none">
            <button class="btn bg-white text-secondary md:w-auto w-full">Get Started Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 <!-- features Section -->
<div class="mt-16 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6" data-aos="fade-up">
  <h2 class="mb-4 text-4xl tracking-tight text-center w-full font-semibold">
    Why <span class="highlight">Choose</span> StudyByU
  </h2>
  <div class="services-2 section pt-6 bg-white" id="services-2">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item rounded-lg p-6">
            <div class="icon mb-4 bg-[#02397c]">
              <img src="assets/service-02.png" alt="study resources" class="w-full h-auto bg-[#02397c]" />
            </div>
            <div class="main-content">
              <h4 class="text-xl font-semibold mb-2">Comprehensive Study Resources</h4>
              <p>
                Enhance your knowledge with detailed explanations and examples.
              </p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item rounded-lg p-6">
            <div class="icon mb-4 bg-[#02397c]">
              <img src="assets/service-01.png" alt="doubt clearing sessions" class="w-full h-auto bg-[#02397c]" />
            </div>
            <div class="main-content">
              <h4 class="text-xl font-semibold mb-2">Doubt Clearing Sessions</h4>
              <p>
                Join interactive webinars to deepen your understanding of complex topics.
              </p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item rounded-lg p-6">
            <div class="icon mb-4 bg-[#02397c]">
              <img src="assets/service-03.png" alt="mental health support" class="w-full h-auto bg-[#02397c]" />
            </div>
            <div class="main-content">
              <h4 class="text-xl font-semibold mb-2">Mental Health Consultancy</h4>
              <p>
                Consult with mental health professionals for personalized guidance.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- Stripe -->
  <div class="">
    <img src="assets/stripe.webp" alt="" class="lg:w-full ">
  </div>

<!-- AboutUS -->
<div class="about-us mt-24" data-aos="fade-up">
  <div class="container mx-auto max-w-screen-lg px-4">
    <div class="lg:flex flex-wrap">
      <div class="lg:w-1/2 lg:ml-1/12" data-aos="fade-right">
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
              How does StudyBYU involve parents?
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse"
              aria-labelledby="headingTwo"
            >
              <div class="accordion-body p-4">
                StudyBYU supports parents with regular progress updates, home learning resources, and open communication, ensuring they are informed and equipped to foster their child's educational success.
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
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="lg:w-1/2 lg:ml-auto lg:self-center" data-aos="fade-left">
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
              class="inline-block bg-primary hover:bg-blue-500 text-white py-2 px-4 rounded-full"
              >Discover More</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Slider -->
<div class="flex flex-col lg:flex-row items-center h-screen w-screen bg-[url('assets/video-area-bg.png')] bg-cover p-6 lg:p-0" data-aos="fade-up">
  <div class="w-full lg:w-1/2 mt-14 lg:mt-0 lg:px-20 pb-10 lg:pb-40 text-center lg:text-left" data-aos="fade-right">
    <div class="text-2xl md:text-4xl font-bold text-white mb-6">
      Watch Our Trainers in Live Action
    </div>
    <div class="text-base md:text-lg text-white">
      In the history of modern astronomy, there is probably no one greater
      leap forward than the building and launch of the space telescope known
      as the Hubble.
    </div>
  </div>

  <div class="carousal w-full lg:w-1/2 lg:px-10" data-aos="fade-left">
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


  <!-- testimonial -->
  <section class="py-12 bg-gray-50 sm:py-16 lg:py-20">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex flex-col items-center">
            <div class="text-center">
                <p class="text-lg font-medium text-gray-600 font-pj" data-aos="fade-up">Don't just take our words.</p>
                <h2 class="mt-4 text-3xl font-bold text-gray-900 sm:text-4xl xl:text-5xl font-pj" data-aos="fade-up">Over <span class="highlight">1000+</span> people trust us.</h2>
            </div>


            <div class="relative mt-10 md:mt-24 md:order-2">
                <div class="absolute -inset-x-1 inset-y-16 md:-inset-x-2 md:-inset-y-6">
                    <div class="w-full h-full max-w-5xl mx-auto rounded-3xl opacity-30 blur-lg filter"></div>
                </div>

                <div class="relative grid max-w-lg grid-cols-1 gap-6 mx-auto md:max-w-none lg:gap-10 md:grid-cols-3">
                    <div class="flex flex-col rounded-xl overflow-hidden shadow-xl" data-aos="fade-right">
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white lg:py-8 lg:px-7">
                            <div class="flex-1">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                </div>

                                <blockquote class="flex-1 mt-8">
                                    <p class="text-lg leading-relaxed text-gray-900 font-pj">“I've tried many online platforms, but StudyByU stands out for its quality study materials and interactive learning methods. Highly recommended!”</p>
                                </blockquote>
                            </div>

                            <div class="flex items-center mt-8">
                                <img class="flex-shrink-0 object-cover rounded-full w-11 h-11" src="https://cdn.rareblocks.xyz/collection/clarity/images/testimonial/4/avatar-male-1.png" alt="" />
                                <div class="ml-4">
                                    <p class="text-base font-bold text-gray-900 font-pj">Rahul Gupta</p>
                                    <p class="mt-0.5 text-sm font-pj text-gray-600">High School Student</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-xl overflow-hidden shadow-xl" data-aos="fade-right">
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white lg:py-8 lg:px-7">
                            <div class="flex-1">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                </div>

                                <blockquote class="flex-1 mt-8">
                                    <p class="text-lg leading-relaxed text-gray-900 font-pj">“Thanks to StudyByU, I was able to ace my exams. The practice quizzes and video lectures helped me grasp difficult concepts with ease.”</p>
                                </blockquote>
                            </div>

                            <div class="flex items-center mt-8">
                                <img class="flex-shrink-0 object-cover rounded-full w-11 h-11" src="https://cdn.rareblocks.xyz/collection/clarity/images/testimonial/4/avatar-male-2.png" alt="" />
                                <div class="ml-4">
                                    <p class="text-base font-bold text-gray-900 font-pj">Akash Sharma</p>
                                    <p class="mt-0.5 text-sm font-pj text-gray-600">High School Student</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-xl overflow-hidden shadow-xl" data-aos="fade-right">
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white lg:py-8 lg:px-7">
                            <div class="flex-1">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-5 h-5 text-[#FDB241]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                </div>

                                <blockquote class="flex-1 mt-8">
                                    <p class="text-lg leading-relaxed text-gray-900 font-pj">“StudyByU has been a game-changer for me. The study resources provided here are comprehensive and easy to understand, making learning enjoyable”</p>
                                </blockquote>
                            </div>

                            <div class="flex items-center mt-8">
                                <img class="flex-shrink-0 object-cover rounded-full w-11 h-11" src="https://cdn.rareblocks.xyz/collection/clarity/images/testimonial/4/avatar-female.png" alt="" />
                                <div class="ml-4">
                                    <p class="text-base font-bold text-gray-900 font-pj">Priya Patel</p>
                                    <p class="mt-0.5 text-sm font-pj text-gray-600">High School Student</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>


<!-- Quote -->
<div class="max-w-screen-xl my-10 px-4 py-8 mx-auto text-center lg:py-16 lg:px-6" data-aos="fade-up">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>