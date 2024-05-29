

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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
  <body>
  <?php
session_start();
include('./secondary-navbar.html');
?>
    <div class="bg-[url('./assets/home-banner-bg.webp')] mt-12 h-[100vh] w-[100vw] bg-cover flex flex-col lg:flex-row justify-around ">
        <div class="mt-16  lg:pl-24 flex flex-col gap-3 text-center lg:text-left px-4 lg:px-0">
          <div class="text-white font-black text-[8vw] lg:text-[3.5vw] mt-[-100px] lg:mt-0 leading-tight">
            Embark on your educational <br class="hidden lg:block"> journey with us today.
          </div>
          <div class="text-white font-semibold text-[4vw] lg:text-[1.4vw] pt-6">
            In the realm of modern education, <br class="hidden lg:block"> few advancements rival the impact of our platform. <br class="hidden lg:block"> Join us in exploring the vast universe of learning.
          </div>
        </div>
        <div class="lg:mt-8 mt-[-16rem]  px-4 lg:px-0">
          <img src="assets/home-hero-image.png" alt="Hero Image" class="w-full  lg:max-w-md">
        </div>
      </div>

    <!-- Four Element Below -->
    <div class="four-element-container container">
      <div class="our-offer">Our <span class="highlight">Offerings</span></div>
      <div class="component">
        <div class="courses">
          <div class="course-card bg-[#FCE4EC]">
            <h2>Class IX</h2>
            <h3>All Subjects</h3>
            <p>Join our comprehensive Class 9 course Today!</p>
            <!-- <img style="width: 60px; height: auto;" src="assets/9.png" alt=""> -->
            <p class="standard">9</p>
            <button>Explore</button>
          </div>
          <div class="course-card bg-[#CDDEFF]">
            <h2>Class X</h2>
            <h3>All Subjects</h3>
            <p>Join our comprehensive Class 10 course Today!</p>
            <!-- <img style="width: 70px; height: auto;" src="assets/10.png" alt=""> -->
            <p class="standard">10</p>
            <button>Explore</button>
          </div>
          <div class="course-card bg-[#FFF0CB]">
            <h2>LIVE</h2>
            <h3>Doubt Clearing Sessions</h3>
            <p>Get personalized help in our doubt clearing sessions.</p>
            <img
              style="width: 70px; height: auto"
              src="assets/doubt.png"
              alt=""
            />
            <button>Explore</button>
          </div>
          <div class="course-card new bg-[#B6FFE4]">
            <h2>LIVE</h2>
            <h3>Mental Health Sessions</h3>
            <p>Enhance well-being with our mental health sessions.</p>
            <img
              style="width: 70px; height: auto"
              src="assets/m-health.png"
              alt=""
            />
            <button>Explore</button>
          </div>
        </div>
        <img src="assets/4-element-image.webp" class="" alt="" />
      </div>
    </div>

    <!-- Another Section -->
    <section class="bg-white">
      <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
          <h2
            class="mb-4 text-4xl tracking-tight font-extrabold text-[#6180f7]"
          >
            Tailored for learners like you,
          </h2>
          <p class="text-gray-500 sm:text-xl">
            Here at StudyByU, we focus on areas where technology, innovation,
            and knowledge can unlock long-term value and drive educational
            growth.
          </p>
        </div>
        <div
          class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0"
        >
          <div class="bg-[#fde5ec] p-5 rounded-2xl">
            <div
              class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12"
            >
              <svg
                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold">Course Catalog</h3>
            <p class="text-gray-500">
              Explore, enroll, excel. Discover a wide range of courses tailored
              to meet your learning needs and help you achieve your academic
              goals with our comprehensive course catalog.
            </p>
          </div>
          <div class="bg-[#cddeff] p-5 rounded-2xl">
            <div
              class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12"
            >
              <svg
                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold">Interactive Learning</h3>
            <p class="text-gray-500">
              Engage, interact, succeed. Dive into an immersive learning
              experience with interactive lessons and real-time feedback
              designed to enhance your understanding and retention.
            </p>
          </div>
          <div class="bg-[#fef1cb] p-5 rounded-2xl">
            <div
              class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12"
            >
              <svg
                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold">Personalized Pathways</h3>
            <p class="text-gray-500">
              Customize, progress, achieve. Tailor your learning journey with
              personalized pathways that align with your interests and career
              aspirations, ensuring you stay motivated and on track.
            </p>
          </div>
          <div class="bg-[#b7ffe5] p-5 rounded-2xl">
            <div
              class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12"
            >
              <svg
                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold">Collaborative Projects</h3>
            <p class="text-gray-500">
              Connect, collaborate, innovate. Work together with peers from
              around the world on group projects that foster teamwork,
              creativity, and practical problem-solving skills.
            </p>
          </div>
          <div class="bg-[#FFA6A0] p-5 rounded-2xl">
            <div
              class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12"
            >
              <svg
                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold">Expert Instructors</h3>
            <p class="text-gray-500">
              Learn from the best. Gain insights and knowledge from industry
              experts and experienced educators who are dedicated to helping you
              succeed in your studies.
            </p>
          </div>
          <div class="bg-[#FDFD96] p-5 rounded-2xl">
            <div
              class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12"
            >
              <svg
                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold">Career Support</h3>
            <p class="text-gray-500">
              Prepare, apply, succeed. Access a range of career support
              services, including resume building, interview preparation, and
              job placement assistance, to help you transition from learning to
              earning.
            </p>
          </div>
        </div>
      </div>
    </section>

    <div class="flex flex-col lg:flex-row items-center h-screen w-screen bg-[url('assets/video-area-bg.png')] bg-cover p-6 lg:p-0">
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
                  <img src="https://st3.depositphotos.com/4218696/18211/i/450/depositphotos_182119506-stock-photo-back-to-school-conceptual-background.jpg" alt="Slide Image">
                </div>
              </div>
              <div class="swiper-slide rounded-xl">
                <div class="overflow-hidden">
                  <img src="https://st3.depositphotos.com/4218696/18211/i/450/depositphotos_182119506-stock-photo-back-to-school-conceptual-background.jpg" alt="Slide Image">
                </div>
              </div>
              <div class="swiper-slide rounded-xl">
                <div class="overflow-hidden">
                  <img src="https://st3.depositphotos.com/4218696/18211/i/450/depositphotos_182119506-stock-photo-back-to-school-conceptual-background.jpg" alt="Slide Image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- <div class="h-screen w-full">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="flex items-center">
              <div class="w-1/2 px-20 pb-10">
                <div class="text-left mb-20">
                  <div class="w-10 py-10">
                    <img
                      src="https://themewagon.github.io/eclipse/img/quote.png"
                      alt=""
                    />
                  </div>
                  <p class="pb-10 text-gray-600 text-xl text-left leading-8">
                    As conscious traveling Paup ers we must always be oncerned
                    about our dear Mother Earth. If you think about it, you
                    travel across her face
                  </p>
                  <h4 class="text-lg font-bold">Fanny Spencer</h4>
                  <p>Chief Executive , Amazon</p>
                </div>
              </div>
              <div class="w-1/2">
                <div>
                  <img
                    src="https://themewagon.github.io/eclipse/img/testimonial/t1.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex items-center">
              <div class="w-1/2 px-20 pb-10">
                <div class="text-left mb-20">
                  <div class="w-10 py-10">
                    <img
                      src="https://themewagon.github.io/eclipse/img/quote.png"
                      alt=""
                    />
                  </div>
                  <p class="pb-10 text-gray-600 text-xl text-left leading-8">
                    As conscious traveling Paup ers we must always be oncerned
                    about our dear Mother Earth. If you think about it, you
                    travel across her face
                  </p>
                  <h4 class="text-lg font-bold">Fanny Spencer</h4>
                  <p>Chief Executive , Amazon</p>
                </div>
              </div>
              <div class="w-1/2">
                <div>
                  <img
                    src="https://themewagon.github.io/eclipse/img/testimonial/t1.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    
      <div class="about-us">
    <div class="container mx-auto max-w-screen-lg px-4">
      <div class="flex flex-wrap">
        <div class="lg:w-1/2 lg:ml-1/12">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item mb-4 border-b">
              <h2 class="accordion-header mb-0" id="headingOne">
                <button class="accordion-button flex items-center justify-between w-full py-4 text-left" type="button" aria-expanded="true" aria-controls="collapseOne">
                  Where shall we begin?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse expanding" aria-labelledby="headingOne">
                <div class="accordion-body p-4">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-4 border-b">
              <h2 class="accordion-header mb-0" id="headingTwo">
                <button class="accordion-button flex items-center justify-between w-full py-4 text-left collapsed" type="button" aria-expanded="false" aria-controls="collapseTwo">
                  How do we work together?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse" aria-labelledby="headingTwo">
                <div class="accordion-body p-4">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-4 border-b">
              <h2 class="accordion-header mb-0" id="headingThree">
                <button class="accordion-button flex items-center justify-between w-full py-4 text-left collapsed" type="button" aria-expanded="false" aria-controls="collapseThree">
                  Why SCHOLAR is the best?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse" aria-labelledby="headingThree">
                <div class="accordion-body p-4">
                  There are more than one hundred responsive HTML templates to choose from <strong>Template</strong>Mo website. You can browse by different tags or categories.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-4 border-b">
              <h2 class="accordion-header mb-0" id="headingFour">
                <button class="accordion-button flex items-center justify-between w-full py-4 text-left collapsed" type="button" aria-expanded="false" aria-controls="collapseFour">
                  Do we get the best support?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse" aria-labelledby="headingFour">
                <div class="accordion-body p-4">
                  You can also search on Google with specific keywords such as <code>templatemo business templates, templatemo gallery templates, admin dashboard templatemo, 3-column templatemo, etc.</code>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-1/2 lg:ml-auto lg:self-center">
          <div class="section-heading mb-8">
            <h6 class="text-lg font-medium">About Us</h6>
            <h2 class="text-3xl font-semibold mb-4">What makes us the best academy online?</h2>
            <p class="text-gray-600">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit repellendus vitae cum soluta animi ullam, corporis voluptatum consequatur? Quae, illum cum ipsam magnam dolor autem! Non eaque nostrum iure cum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit repellendus vitae cum soluta animi ullam, corporis voluptatum consequatur? Quae, illum cum ipsam magnam dolor autem! Non eaque nostrum iure cum.
            </p>
            <div class="main-button mt-6">
              <a href="#" class="inline-block bg-blue-500 text-white py-2 px-4 rounded-full">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="bg-white ">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <figure class="max-w-screen-md mx-auto">
                <svg class="h-12 mx-auto mb-3 text-gray-400 " viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                </svg> 
                <blockquote>
                    <p class="text-2xl font-medium text-gray-900 ">"An invaluable resource for students, this EdTech site excels in providing comprehensive lectures, expert guidance, and well-organized notes. Highly recommend for anyone looking to enhance their learning experience!"</p>
                </blockquote>
                <figcaption class="flex items-center justify-center mt-6 space-x-3">
                    <!-- <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture"> -->
                    <div class="flex items-center divide-x-2 divide-gray-500 ">
                        <div class="pr-3 font-medium text-gray-900 ">Pallak Khullar</div>
                        <div class="pl-3 text-sm font-light text-gray-500 ">CEO at StudyByU</div>
                    </div>
                </figcaption>
            </figure>
        </div>
      </section>


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
