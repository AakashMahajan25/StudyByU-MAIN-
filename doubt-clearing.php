<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/class.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <style>
     *{
        transition: all 0.45s;
     }
    </style>
  </head>
  <body>
    <?php
    session_start();
    include('./secondary-navbar.html');
    ?>
    
    <section>
      <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6 my-4">
          <div class="mt-4 md:mt-0" data-aos="fade-up">
              <h2 class="mb-4 text-4xl tracking-tight font-semibold text-[#003366]">
                  Empower Your Learning with Dedicated Doubt Clearing Sessions
              </h2>
              <p class="mb-6 text-[#333333] md:text-lg">
                  StudyByU's LIVE Doubt Clearing Sessions offer a this facility to address your questions and enhance your understanding. Engage with experts in interactive sessions designed to ensure no query is left unresolved.
              </p>
              <a href="#" class="inline-flex items-center text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-aos="zoom-in">
                  Get Started
                  <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
              </a>
          </div>
          <div data-aos="fade-left">
            <img src="assets/online-teaching.svg" alt="doubt clearing" data-aos="fade-left" />
           </div>
      </div>
    </section>


    <?php include('./footer.html');?>

  </body>
</html>
