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

    <div class="overflow-x-hidden bg-[#f1f0fe] py-20">
        <section class="pt-12 sm:pt-16">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto text-center">
                    <h1 class="px-6 text-lg text-gray-600 font-inter">StudyByU - Your Ultimate Learning Companion</h1>
                    <p class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-4xl lg:leading-tight">
                        Empower Your Journey with Tailored Resources
                    </p>

                    <div class="px-8 sm:items-center sm:justify-center sm:px-0 sm:space-x-5 sm:flex mt-9">
                        <a
                            href="#"
                            title=""
                            class="inline-flex items-center justify-center w-full px-8 py-3 text-lg font-bold text-white transition-all duration-200 bg-gray-900 border-2 border-transparent sm:w-auto rounded-xl font-pj hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                            role="button"
                        >
                            Explore Resources
                        </a>

                        <a
                            href="#"
                            title=""
                            class="bg-white inline-flex items-center justify-center w-full px-6 py-3 mt-4 text-lg font-bold text-gray-900 transition-all duration-200 border-2 border-gray-400 sm:w-auto sm:mt-0 rounded-xl font-pj focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 hover:bg-gray-900 focus:bg-gray-900 hover:text-white focus:text-white hover:border-gray-900 focus:border-gray-900"
                            role="button"
                        >
                            <svg class="w-5 h-5 mr-2" viewBox="0 0 18 18" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.18003 13.4261C6.8586 14.3918 5 13.448 5 11.8113V5.43865C5 3.80198 6.8586 2.85821 8.18003 3.82387L12.5403 7.01022C13.6336 7.80916 13.6336 9.44084 12.5403 10.2398L8.18003 13.4261Z"
                                    stroke-width="2"
                                    stroke-miterlimit="10"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                            Watch Free Demo
                        </a>
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
                  class="inline-block bg-primary hover:bg-blue-500 text-white py-2 px-4 rounded-full"
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

    <div class="section-2 fun-facts my-20">
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
