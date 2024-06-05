<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/subjects.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

</head>

<body>
    <?php
    session_start();
    include('./secondary-navbar.html');
    ?>
    <div class="pt-[10rem] pb-[7rem] breadcrumbs bg-[url('./assets/bred.png')] bg-cover bg-center bg-no-repeat">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold">Subjects</h2>
            <nav>
                <ol class="flex items-center justify-center space-x-3">
                    <li class="breadcrumb-item"><a href="index.html">Home </a></li>
                    <li class="breadcrumb-item">-</li>
                    <li class="text-primary">Subjects </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- <section class="bg-[url('assets/section-bg-14.png')] bg-no-repeat bg-center" style="background-size: 95%;"">
        <div class=" subjects mt-10">
        <div class="subjects-heading">Subjects</div>
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
    </section> -->

    <!-- subjects -->
    <section class="w-[95vw] m-auto rounded-xl px-6 pb-3 my-20 bg-[var(--tertiary-color)]">
        <div class="flex pt-8 gap-4 overflow-x-scroll pb-5">


            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md bg-white" data-aos="fade-up">
                <div><img src="https://img.freepik.com/free-vector/science-laboratory-objects-design_23-2148497351.jpg" alt="" class="rounded-xl"></div>
                <div class="p-6">
                    <div class="text-2xl font-semibold text-blue-700">Science</div>
                    <div class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, itaque.</div>
                    <div><button class="btn bg-black text-white text-sm py-2 px-4">Explore</button></div>
                </div>
            </div>

            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md bg-white" data-aos="fade-up">
                <div><img src="https://img.freepik.com/free-vector/science-laboratory-objects-design_23-2148497351.jpg" alt="" class="rounded-xl"></div>
                <div class="p-6">
                    <div class="text-2xl font-semibold text-blue-700">Science</div>
                    <div class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, itaque.</div>
                    <div><button class="btn bg-black text-white text-sm py-2 px-4">Explore</button></div>
                </div>
            </div>

            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md bg-white" data-aos="fade-up">
                <div><img src="https://img.freepik.com/free-vector/science-laboratory-objects-design_23-2148497351.jpg" alt="" class="rounded-xl"></div>
                <div class="p-6">
                    <div class="text-2xl font-semibold text-blue-700">Science</div>
                    <div class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, itaque.</div>
                    <div><button class="btn bg-black text-white text-sm py-2 px-4">Explore</button></div>
                </div>
            </div>

            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md bg-white" data-aos="fade-up">
                <div><img src="https://img.freepik.com/free-vector/science-laboratory-objects-design_23-2148497351.jpg" alt="" class="rounded-xl"></div>
                <div class="p-6">
                    <div class="text-2xl font-semibold text-blue-700">Science</div>
                    <div class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, itaque.</div>
                    <div><button class="btn bg-black text-white text-sm py-2 px-4">Explore</button></div>
                </div>
            </div>

            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md bg-white" data-aos="fade-up">
                <div><img src="https://img.freepik.com/free-vector/science-laboratory-objects-design_23-2148497351.jpg" alt="" class="rounded-xl"></div>
                <div class="p-6">
                    <div class="text-2xl font-semibold text-blue-700">Science</div>
                    <div class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, itaque.</div>
                    <div><button class="btn bg-black text-white text-sm py-2 px-4">Explore</button></div>
                </div>
            </div>

            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md bg-white" data-aos="fade-up">
                <div><img src="https://img.freepik.com/free-vector/science-laboratory-objects-design_23-2148497351.jpg" alt="" class="rounded-xl"></div>
                <div class="p-6">
                    <div class="text-2xl font-semibold text-blue-700">Science</div>
                    <div class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, itaque.</div>
                    <div><button class="btn bg-black text-white text-sm py-2 px-4">Explore</button></div>
                </div>
            </div>

            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md bg-white" data-aos="fade-up">
                <div><img src="https://img.freepik.com/free-vector/science-laboratory-objects-design_23-2148497351.jpg" alt="" class="rounded-xl"></div>
                <div class="p-6">
                    <div class="text-2xl font-semibold text-blue-700">Science</div>
                    <div class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, itaque.</div>
                    <div><button class="btn bg-black text-white text-sm py-2 px-4">Explore</button></div>
                </div>
            </div>

            
        </div>
    </section>

    <!-- content -->
    <div class="my-20">
        <div class="container-custom">
            <div class="grid grid-cols-12 gap-10 items-center">
                <div class="xl:col-span-7 lg:col-span-6 col-span-12" data-aos="slide-right">
                    <img src="assets/real-life-applications.webp" alt="" class="rounded-3xl overflow-hidden">
                </div>

                <div class="xl:col-span-5 lg:col-span-6 col-span-12" data-aos="slide-left">
                    <div class="mini-title font-semibold">Discover StudyByU</div>
                    <h4 class="mb-4 text-4xl tracking-tight font-semibold text-[#003366]">
                        Clarity with Real-Life
                        <span class="text-primary">Applications</span>
                    </h4>
                    <div class="mb-8">
                        At StudyByU, we bridge the gap between theoretical concepts and real-world applications. Our resources are designed to make learning clear, relevant, and engaging. By offering well-structured materials and interactive content, we enhance students' understanding and retention of complex concepts. Join us at StudyByU to transform your educational journey and connect academic knowledge with practical, real-world scenarios.
                    </div>
                    <div class="space-y-8">
                        <div class="progressbar-group">
                            <div class="flex justify-between" data-width="90%" style="max-width: 90%;">
                                <span class="block text-black font-semibold mb-2">Concept Application</span>
                                <span class="block mb-2 text-black font-semibold">90%</span>
                            </div>
                            <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative">
                                <div class="ani h-[6px] bg-[#ff7e84] block absolute left-0 top-1/2 -translate-y-1/2" data-progress="90" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="progressbar-group">
                            <div class="flex justify-between" data-width="80%" style="max-width: 80%;">
                                <span class="block text-black font-semibold mb-2">Engagement Rate</span>
                                <span class="block mb-2 text-black font-semibold">80%</span>
                            </div>
                            <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative">
                                <div class="ani h-[6px] bg-[#30bead] block absolute left-0 top-1/2 -translate-y-1/2" data-progress="80" style="width: 80%;"></div>
                            </div>
                        </div>
                        <div class="progressbar-group">
                            <div class="flex justify-between" data-width="95%" style="max-width: 95%;">
                                <span class="block text-black font-semibold mb-2">Retention Improvement</span>
                                <span class="block mb-2 text-black font-semibold">95%</span>
                            </div>
                            <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative">
                                <div class="ani h-[6px] bg-[#ffbc1f] block absolute left-0 top-1/2 -translate-y-1/2" data-progress="95" style="width: 95%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- register -->
    <div class="mx-auto rounded-md bg-[#37474f] p-20 mb-20">
      <div class="container-custom items-center space-x-4 space-y-5 text-center lg:flex lg:space-y-0 lg:text-left">
        <div class="flex-1">
          <div class="max-w-[590px] text-3xl font-bold text-white md:text-3xl lg:text-[33px]">
            Education Is About Creating Leaders For Tomorrow
          </div>
        </div>
        <div class="flex-none">
          <button class="btn bg-white font-bold text-black">
            Register Today
          </button>
        </div>
      </div>
    </div>

    <!-- content -->
    <section class="container-custom" data-aos="fade-up">
        <div class="items-center px-4 mx-auto max-w-screen-xl  md:grid md:grid-cols-2 lg:px-6">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-semibold text-[#003366]">Enhance Your Learning with <span class="text-primary">Class 9 Study Resources</span></h2>
                <p class="mb-6 font-light text-[#333333] md:text-lg">Explore our extensive collection of notes and explanation videos tailored specifically for Class 9 and your curriculum. StudyByU provides high-quality, easy-to-understand resources designed to help you excel in your studies. Select your subjects below to get started with the best study materials available for Class 9.</p>

                <a href="#" class="inline-flex items-center text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Get Started
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <img class="w-[30vw] hidden dark:block mx-auto" src="assets/astronaut-studying.webp" alt="">
        </div>
    </section>
       
    <!-- features -->
    <div class="feature-area bg-[url('assets/section-bg-8.png')] bg-contain bg-no-repeat bg-center py-[20vh]">
        <div class="container-custom" data-aos="fade-up">
            <div class="text-center" data-aos="fade-up">
                <div class="font-semibold">Core Features</div>
                <div class="text-3xl font-semibold" >
                    Why
                    <span class="highlight">Choose</span>
                    StudyByU
                </div>
            </div>
            <div class="grid-container pt-10">
                <div class="feature-card group" data-aos="zoom-in">
                    <div class="icon-container group-hover">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="96.000000pt" height="96.000000pt" viewBox="0 0 96.000000 96.000000"
                        preserveAspectRatio="xMidYMid meet">
    
                        <g transform="translate(0.000000,96.000000) scale(0.100000,-0.100000)">
                        <path d="M325 907 c-95 -35 -140 -57 -140 -67 0 -8 26 -28 57 -45 l58 -30 0
                        -65 c0 -79 23 -133 73 -177 64 -56 150 -56 214 0 49 43 73 98 73 173 0 53 3
                        64 23 77 31 21 10 43 -30 30 -21 -7 -29 -17 -31 -40 l-3 -31 -107 5 c-59 2
                        -113 0 -121 -5 -28 -20 1 -32 77 -32 118 0 152 -8 152 -35 0 -38 -43 -107 -80
                        -126 -44 -24 -76 -24 -120 0 -53 28 -80 88 -80 177 l0 74 -41 20 c-23 12 -38
                        24 -34 28 3 3 53 23 111 43 l105 37 129 -46 129 -46 3 -100 c2 -82 6 -101 18
                        -101 12 0 15 19 15 115 l0 115 -140 52 c-77 28 -147 51 -155 51 -8 0 -78 -23
                        -155 -51z"/>
                        <path d="M359 421 c-101 -32 -187 -108 -238 -208 -28 -55 -27 -69 8 -104 l29
                        -29 322 0 322 0 29 29 c35 35 36 49 8 104 -91 180 -293 268 -480 208z m275
                        -55 c95 -46 200 -182 176 -226 -10 -19 -22 -20 -330 -20 -308 0 -320 1 -330
                        20 -20 38 65 161 148 212 89 55 239 61 336 14z"/>
                        </g>
                        </svg>
                    </div>
                    <h4 class="feature-title group-hover" data-aos="fade-up">Drafted by Proficient Faculty and Toppers</h4>
                    <div class="feature-description group-hover" data-aos="fade-up">Our content is meticulously crafted by experienced educators and top-performing students.</div>
                </div>
    
                <div class="feature-card group" data-aos="zoom-in">
                    <div class="icon-container group-hover">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="100.000000pt" height="100.000000pt" viewBox="0 0 100.000000 100.000000"
                        preserveAspectRatio="xMidYMid meet">
    
                        <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)">
                        <path d="M407 990 c-99 -25 -183 -94 -229 -188 l-33 -66 -3 -288 c-4 -327 -3
                        -329 75 -378 77 -49 143 -64 283 -64 140 0 206 15 283 64 78 49 79 51 75 378
                        l-3 288 -33 66 c-58 119 -165 187 -302 194 -41 2 -92 -1 -113 -6z m237 -64
                        c60 -29 138 -108 154 -156 6 -16 9 -30 8 -30 -2 0 -21 7 -42 16 -132 55 -396
                        55 -528 0 -21 -9 -40 -16 -42 -16 -12 0 25 67 57 104 74 84 154 118 266 112
                        52 -2 86 -10 127 -30z m54 -190 c121 -33 152 -81 78 -122 -58 -33 -149 -49
                        -276 -49 -127 0 -218 16 -276 49 -90 50 -33 103 146 137 63 11 265 3 328 -15z
                        m-479 -231 c19 -83 61 -105 127 -64 l34 21 10 -27 c5 -14 10 -54 10 -88 0
                        -114 29 -167 91 -167 18 0 35 9 48 26 18 23 21 41 21 129 0 78 4 105 15 115
                        20 17 31 6 39 -39 10 -65 69 -91 116 -53 18 14 26 37 36 101 7 46 21 95 31
                        110 18 25 18 21 21 -189 2 -196 1 -217 -16 -240 -95 -128 -501 -131 -601 -4
                        -20 25 -21 38 -21 243 1 179 3 213 14 199 7 -10 18 -42 25 -73z m281 21 c89 0
                        162 5 189 13 23 7 44 11 46 9 3 -4 -13 -127 -21 -150 -6 -21 -37 -24 -51 -5
                        -6 6 -13 27 -17 46 -3 19 -11 40 -17 48 -18 21 -58 15 -84 -12 -23 -22 -25 -31
                        -25 -124 0 -112 -4 -131 -30 -131 -32 0 -43 29 -50 130 -8 110 -25 150 -64
                        150 -12 0 -31 -9 -41 -20 -35 -39 -68 -22 -79 41 l-6 36 52 -15 c36 -10 100
                        -15 198 -16z"/>
                        </g>
                        </svg>
    
                    </div>
                    <h4 class="feature-title group-hover" data-aos="fade-up">Designed Vibrantly for Better Learning</h4>
                    <div class="feature-description group-hover" data-aos="fade-up">Engage with our visually appealing and interactive educational materials.</div>
                </div>
    
                <div class="feature-card group" data-aos="zoom-in">
                    <div class="icon-container group-hover">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="128.000000pt" height="128.000000pt" viewBox="0 0 128.000000 128.000000"
                        preserveAspectRatio="xMidYMid meet">
    
                        <g transform="translate(0.000000,128.000000) scale(0.100000,-0.100000)">
                        <path d="M516 1154 c-189 -46 -346 -205 -391 -396 -88 -375 259 -721 634 -633
                        193 46 350 204 396 397 89 377 -262 723 -639 632z m215 -54 c134 -25 267 -127
                        328 -251 140 -285 -36 -623 -349 -672 -255 -39 -496 140 -533 398 -46 318 235
                        584 554 525z"/>
                        <path d="M617 1014 c-4 -4 -7 -69 -7 -145 0 -129 -1 -138 -20 -144 -23 -7 -50
                        -53 -50 -85 0 -52 49 -100 101 -100 30 0 77 27 84 50 5 17 17 20 98 22 91 3
                        92 3 92 28 0 25 -1 25 -91 28 -85 3 -92 4 -104 27 -7 14 -21 27 -31 30 -17 6
                        -19 21 -21 148 -3 134 -4 142 -23 145 -12 2 -24 0 -28 -4z m53 -349 c26 -32
                        -13 -81 -47 -59 -35 22 -23 74 17 74 10 0 23 -7 30 -15z"/>
                        </g>
                        </svg>
                    </div>
                    <h4 class="feature-title group-hover" data-aos="fade-up">Concept Understanding Under 1 Minute</h4>
                    <div class="feature-description group-hover" data-aos="fade-up">Grasp complex concepts quickly with our concise and effective explanations.</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- session cards -->
    <div class="mt-10 mb-20">
        <div class="container-custom mx-auto" data-aos="fade-up">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-7">
                <div class="bg-[url('assets/bg-ins-1.webp')] card-respo  bg-cover  bg-no-repeat lg:p-10 p-6 rounded-md" data-aos="fade-right">
                    <div class="w-2/3">
                        <div class="text-xs">Enhance Your Learning</div>
                        <div class="text-2xl font-semibold lg:leading-[41px]">
                            Doubt <span class="text-primary">Clearing</span> Sessions
                        </div>
                        <div class="md:mt-6 md:mb-12 mb-4 mt-2 text-sm">
                            Resolve your queries, understand concepts better with expert help.
                        </div>
                        <a href="#" class="btn bg-black text-white">Contact Us</a>
                    </div>
                </div>

                <div class="bg-[url('assets/bg-ins-2.png')] card-respo  bg-cover bg-no-repeat lg:p-10 p-6 rounded-md" data-aos="fade-left">
                    <div class="w-2/3">
                        <div class="text-xs">Prioritize Your Well-being</div>
                        <div class="text-2xl font-semibold lg:leading-[41px]">
                            Mental
                            <span class="text-primary">Health</span>
                            Advice
                        </div>
                        <div class="md:mt-6 md:mb-12 mb-4 mt-2 text-sm">
                            Access professional support, take care of your mental health.
                        </div>
                        <a href="#" class="btn bg-black text-white">Contact Us</a>
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

    <?php include('./footer.html'); ?>

    <!-- Include AOS library script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    // Initialize AOS
    AOS.init();
</script>
</body>

</html>