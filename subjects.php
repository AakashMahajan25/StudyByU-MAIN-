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

    <section class="w-[95vw] m-auto rounded-xl p-6 mt-10">
        <div class="flex pt-8 gap-4 overflow-x-scroll pb-5">


            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md ">
                <div><img src="https://img.freepik.com/free-vector/science-laboratory-objects-design_23-2148497351.jpg" alt="" class="rounded-xl"></div>
                <div class="p-6">
                    <div class="text-2xl font-semibold text-blue-700">Science</div>
                    <div class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, itaque.</div>
                    <div><button class="btn bg-black text-white text-sm py-2 px-4">Explore</button></div>
                </div>
            </div>

            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md ">
                <div><img src="https://img.freepik.com/free-vector/science-laboratory-objects-design_23-2148497351.jpg" alt="" class="rounded-xl"></div>
                <div class="p-6">
                    <div class="text-2xl font-semibold text-blue-700">Science</div>
                    <div class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, itaque.</div>
                    <div><button class="btn bg-black text-white text-sm py-2 px-4">Explore</button></div>
                </div>
            </div>

            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md ">
                <div><img src="https://img.freepik.com/free-vector/science-laboratory-objects-design_23-2148497351.jpg" alt="" class="rounded-xl"></div>
                <div class="p-6">
                    <div class="text-2xl font-semibold text-blue-700">Science</div>
                    <div class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, itaque.</div>
                    <div><button class="btn bg-black text-white text-sm py-2 px-4">Explore</button></div>
                </div>
            </div>

            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md ">
                <div><img src="https://img.freepik.com/free-vector/science-laboratory-objects-design_23-2148497351.jpg" alt="" class="rounded-xl"></div>
                <div class="p-6">
                    <div class="text-2xl font-semibold text-blue-700">Science</div>
                    <div class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, itaque.</div>
                    <div><button class="btn bg-black text-white text-sm py-2 px-4">Explore</button></div>
                </div>
            </div>

            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md ">
                <div><img src="https://img.freepik.com/free-vector/science-laboratory-objects-design_23-2148497351.jpg" alt="" class="rounded-xl"></div>
                <div class="p-6">
                    <div class="text-2xl font-semibold text-blue-700">Science</div>
                    <div class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, itaque.</div>
                    <div><button class="btn bg-black text-white text-sm py-2 px-4">Explore</button></div>
                </div>
            </div>

            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md ">
                <div><img src="https://img.freepik.com/free-vector/science-laboratory-objects-design_23-2148497351.jpg" alt="" class="rounded-xl"></div>
                <div class="p-6">
                    <div class="text-2xl font-semibold text-blue-700">Science</div>
                    <div class="text-sm text-gray-500 py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, itaque.</div>
                    <div><button class="btn bg-black text-white text-sm py-2 px-4">Explore</button></div>
                </div>
            </div>

            <div class="rounded-xl w-1/4 min-w-[22vw] shadow-md ">
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
    <section class="container mx-auto my-20" data-aos="fade-up">
        <div class="gap-8 items-center px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 lg:px-6">
            <img class="w-2/3 hidden dark:block mx-auto" src="assets/Book lover-amico.svg" alt="">
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
        </div>
    </section>
    
    <!-- register -->
    <div class="mx-auto max-w-[1170px] rounded-md bg-[#37474f] p-20 my-20">
      <div class="items-center space-x-4 space-y-5 text-center lg:flex lg:space-y-0 lg:text-left">
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

    
    <div class="py-12">
        <div class="container-custom">
            <div class="grid grid-cols-12 gap-10">
                <div class="xl:col-span-7 lg:col-span-6 col-span-12">
                    <img src="assets/about3.png" alt="">
                </div>
                <div class="xl:col-span-5 lg:col-span-6 col-span-12">
                    <div class="mini-title font-semibold">Discover StudyByU</div>
                    <h4 class="mb-4 text-4xl tracking-tight font-semibold text-[#003366]">
                        Clarity with Real-Life
                        <span class="highlight leading-[4rem]">Applications</span>
                    </h4>
                    <div class="mb-8">
                        At StudyByU, we bridge the gap between theoretical concepts and real-world applications. Our resources are designed to make learning clear, relevant, and engaging.
                    </div>
                    <div class="space-y-8">
                        <div class="progressbar-group">
                            <div class="flex justify-between" data-width="90%" style="max-width: 90%;">
                                <span class="block text-black font-semibold mb-2">Mathematics</span>
                                <span class="block mb-2 text-black font-semibold">90%</span>
                            </div>
                            <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative">
                                <div class="ani h-[6px] bg-[#ff7e84] block absolute left-0 top-1/2 -translate-y-1/2" data-progress="90" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="progressbar-group">
                            <div class="flex justify-between" data-width="80%" style="max-width: 80%;">
                                <span class="block text-black font-semibold mb-2">Science</span>
                                <span class="block mb-2 text-black font-semibold">80%</span>
                            </div>
                            <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative">
                                <div class="ani h-[6px] bg-[#30bead] block absolute left-0 top-1/2 -translate-y-1/2" data-progress="80" style="width: 80%;"></div>
                            </div>
                        </div>
                        <div class="progressbar-group">
                            <div class="flex justify-between" data-width="95%" style="max-width: 95%;">
                                <span class="block text-black font-semibold mb-2">English</span>
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

    <div class="feature-area bg-[url('../images/all-img/section-bg-1.png')] bg-cover bg-no-repeat bg-center section-padding">
    <div class="container-custom">
        <div class="text-center">
            <div class="font-semibold">Core Features</div>
            <div class="mb-4 text-4xl tracking-tight font-semibold">
                Why
                <span class="highlight leading-[4rem]">Choose</span>
                StudyByU
            </div>
        </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5 pt-10">
            <div class="bg-white shadow-xl rounded-[8px] p-10 group hover:bg-primary transition duration-150 hover:-translate-y-1">
                <div class="h-[72px] w-[72px] rounded-full flex flex-col items-center justify-center text-secondary bg-green-paste mb-8 text-5xl group-hover:bg-black group-hover:bg-opacity-[0.1] group-hover:text-white transition duration-150">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h4 class="lg:text-2xl text-[22px] leading-[30px] mb-4 transition duration-150 group-hover:text-white">Drafted by Proficient Faculty and Toppers</h4>
                <div class="transition duration-150 group-hover:text-white">Our content is meticulously crafted by experienced educators and top-performing students.</div>
            </div>

            <div class="bg-white shadow-xl rounded-[8px] p-10 group hover:bg-primary transition duration-150 hover:-translate-y-1">
                <div class="h-[72px] w-[72px] rounded-full flex flex-col items-center justify-center text-secondary bg-green-paste mb-8 text-5xl group-hover:bg-black group-hover:bg-opacity-[0.1] group-hover:text-white transition duration-150">
                    <i class="fas fa-palette"></i>
                </div>
                <h4 class="lg:text-2xl text-[22px] leading-[30px] mb-4 transition duration-150 group-hover:text-white">Designed Vibrantly</h4>
                <div class="transition duration-150 group-hover:text-white">Engage with our visually appealing and interactive educational materials.</div>
            </div>

            <div class="bg-white shadow-xl rounded-[8px] p-10 group hover:bg-primary transition duration-150 hover:-translate-y-1">
                <div class="h-[72px] w-[72px] rounded-full flex flex-col items-center justify-center text-secondary bg-green-paste mb-8 text-5xl group-hover:bg-black group-hover:bg-opacity-[0.1] group-hover:text-white transition duration-150">
                    <i class="fas fa-brain"></i>
                </div>
                <h4 class="lg:text-2xl text-[22px] leading-[30px] mb-4 transition duration-150 group-hover:text-white">Concept Understanding Under 1 Min</h4>
                <div class="transition duration-150 group-hover:text-white">Grasp complex concepts quickly with our concise and effective explanations.</div>
            </div>
        </div>
    </div>
</div>


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