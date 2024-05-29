<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/about1.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <style></style>
  </head>
  <body>
    
    <?php
    session_start();
    include('./secondary-navbar.html');
    ?>

  <div class="bg-gradient-to-b from-[#627de3] to-[#aec1f8]">
      <header class="">
          <div class="px-4 mx-auto sm:px-6 lg:px-8">
              <div class="flex items-center justify-between h-16 lg:h-20">
                  <div class="flex-shrink-0">
                      <a href="#" title="" class="flex">
                          <img class="w-auto h-8" src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/2/logo.svg" alt="" />
                      </a>
                  </div>

                  <button type="button" class="inline-flex p-1 text-black transition-all duration-200 border border-black lg:hidden focus:bg-gray-100 hover:bg-gray-100">
                      <!-- Menu open: "hidden", Menu closed: "block" -->
                      <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>

                      <!-- Menu open: "block", Menu closed: "hidden" -->
                      <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                  </button>

                  <div class="hidden ml-auto lg:flex lg:items-center lg:justify-center lg:space-x-10">
                      <a href="#" title="" class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80"> Features </a>

                      <a href="#" title="" class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80"> Solutions </a>

                      <a href="#" title="" class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80"> Resources </a>

                      <a href="#" title="" class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80"> Pricing </a>

                      <div class="w-px h-5 bg-black/20"></div>

                      <a href="#" title="" class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80"> Log in </a>

                      <a href="#" title="" class="inline-flex items-center justify-center px-5 py-2.5 text-base font-semibold text-black border-2 border-black hover:bg-black hover:text-white transition-all duration-200 focus:bg-black focus:text-white" role="button"> Try for free </a>
                  </div>
              </div>
          </div>
      </header>

      <section class="py-10 sm:py-16 lg:py-24">
          <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
              <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                  <div>
                      <h1 class="text-4xl font-bold text-white sm:text-6xl lg:text-7xl">
                      Transform Your Learning Experience with
                          <div class="relative inline-flex">
                              <span class="absolute inset-x-0 bottom-0 border-b-[20px] border-blue-500"></span>
                              <h1 class="relative text-4xl font-bold text-white sm:text-6xl lg:text-7xl">StudyByU.</h1>
                          </div>
                      </h1>

                      <p class="mt-8 text-base text-[#333333] sm:text-xl">Connect, Collaborate, and Succeed: Revolutionize Your Study Sessions with StudyByU.</p>

                      <div class="mt-10 sm:flex sm:items-center sm:space-x-8">
                          <a href="#" title="" class="rounded-lg inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-orange-600" role="button"> Get Started </a>

                          <!-- <a href="#" title="" class="inline-flex items-center mt-6 text-base font-semibold transition-all duration-200 sm:mt-0 hover:opacity-80">
                              <svg class="w-10 h-10 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path fill="#F97316" stroke="#F97316" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                              Watch video
                          </a> -->
                      </div>
                  </div>

                  <div>
                      <img class="w-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/2/hero-img.png" alt="" />
                  </div>
              </div>
          </div>
      </section>
  </div>




    <div class="about-us">
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

    <div class="services-2 section py-12 bg-white" id="services-2">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <div class="service-item rounded-lg p-6">
              <div class="icon mb-4">
                <img
                  src="assets/service-01.png"
                  alt="online degrees"
                  class="w-full h-auto"
                />
              </div>
              <div class="main-content">
                <h4 class="text-xl font-semibold mb-2">Global Collaboration</h4>
                <p class="text-gray-700 mb-4">
                  Break geographical barriers and collaborate with students worldwide.
                </p>
                <div class="main-button">
                  <a href="#" class="text-blue-500 hover:text-blue-700"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <div class="service-item rounded-lg p-6">
              <div class="icon mb-4">
                <img
                  src="assets/service-02.png"
                  alt="short courses"
                  class="w-full h-auto"
                />
              </div>
              <div class="main-content">
                <h4 class="text-xl font-semibold mb-2">Efficient Communication</h4>
                <p class="text-gray-700 mb-4">
                  Streamline your study sessions with seamless communication tools.
                </p>
                <div class="main-button">
                  <a href="#" class="text-blue-500 hover:text-blue-700"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <div class="service-item rounded-lg p-6">
              <div class="icon mb-4">
                <img
                  src="assets/service-03.png"
                  alt="web experts"
                  class="w-full h-auto"
                />
              </div>
              <div class="main-content">
                <h4 class="text-xl font-semibold mb-2">Empowering Education</h4>
                <p class="text-gray-700 mb-4">
                  Access resources, support, and opportunities to excel academically with StudyByU.
                </p>
                <div class="main-button">
                  <a href="#" class="text-blue-500 hover:text-blue-700"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-2 fun-facts py-12 pt-20 mt-20">
      <div class="container mx-auto max-w-screen-lg px-4">
        <div class="flex flex-wrap justify-center">
          <div class="w-full lg:w-3/4">
            <div class="wrapper">
              <div class="flex flex-wrap items-center">
                <div class="w-full md:w-1/2 lg:w-1/4 p-4">
                  <div class="counter text-center">
                    <h2
                      class="text-4xl font-bold timer count-title count-number"
                      data-to="150"
                      data-speed="1000"
                    >
                      150
                    </h2>
                    <p class="count-text text-gray-600">Happy Students</p>
                  </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-4">
                  <div class="counter text-center">
                    <h2
                      class="text-4xl font-bold timer count-title count-number"
                      data-to="804"
                      data-speed="1000"
                    >
                      804
                    </h2>
                    <p class="count-text text-gray-600">Course Hours</p>
                  </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-4">
                  <div class="counter text-center">
                    <h2
                      class="text-4xl font-bold timer count-title count-number"
                      data-to="50"
                      data-speed="1000"
                    >
                      50
                    </h2>
                    <p class="count-text text-gray-600">Employed Students</p>
                  </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-4">
                  <div class="counter text-center">
                    <h2
                      class="text-4xl font-bold timer count-title count-number"
                      data-to="15"
                      data-speed="1000"
                    >
                      15
                    </h2>
                    <p class="count-text text-gray-600">Years Experience</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="team py-12" id="team">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
            <div class="team-member rounded-lg p-6">
              <div class="main-content text-center">
                <img
                  src="assets/member-01.jpg"
                  alt=""
                  class="w-full h-auto rounded-full mb-4"
                />
                <span class="category text-sm text-gray-500">UX Teacher</span>
                <h4 class="text-xl font-semibold mt-2">Sophia Rose</h4>
                <ul class="social-icons flex justify-center mt-4">
                  <li class="mx-2">
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                      <i class="fab fa-facebook"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
            <div class="team-member rounded-lg p-6">
              <div class="main-content text-center">
                <img
                  src="assets/member-02.jpg"
                  alt=""
                  class="w-full h-auto rounded-full mb-4"
                />
                <span class="category text-sm text-gray-500"
                  >Graphic Teacher</span
                >
                <h4 class="text-xl font-semibold mt-2">Cindy Walker</h4>
                <ul class="social-icons flex justify-center mt-4">
                  <li class="mx-2">
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                      <i class="fab fa-facebook"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
            <div class="team-member rounded-lg p-6">
              <div class="main-content text-center">
                <img
                  src="assets/member-03.jpg"
                  alt=""
                  class="w-full h-auto rounded-full mb-4"
                />
                <span class="category text-sm text-gray-500"
                  >Full Stack Master</span
                >
                <h4 class="text-xl font-semibold mt-2">David Hutson</h4>
                <ul class="social-icons flex justify-center mt-4">
                  <li class="mx-2">
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                      <i class="fab fa-facebook"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
            <div class="team-member rounded-lg p-6">
              <div class="main-content text-center">
                <img
                  src="assets/member-04.jpg"
                  alt=""
                  class="w-full h-auto rounded-full mb-4"
                />
                <span class="category text-sm text-gray-500"
                  >Digital Animator</span
                >
                <h4 class="text-xl font-semibold mt-2">Stella Blair</h4>
                <ul class="social-icons flex justify-center mt-4">
                  <li class="mx-2">
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                      <i class="fab fa-facebook"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('./footer.html');?>
  </body>

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
</html>
