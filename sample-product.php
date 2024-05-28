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
      body {
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
        margin: 10px;
        font-size: 18px;
      }
      .description-content {
        display: none;
        margin-top: 20px;
        margin: 10px;
        font-size: 18px;
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
        margin-left: 10px;
        color: #003267;
        font-size: 22px;
        font-weight: 500;
      }
      .buy-now-btn {
        background: #062c60;
      }
      .fixed {
        background: #e4ecfa;
      }
      .other-ch {
        color: #062c60;
        font-weight: 500;
      }
      .ch-title {
        font-weight: 500;
      }
      .ch-name {
        font-weight: 600;
      }
      .hero {
        display: flex;
        justify-content: center;
        margin-top: 30px;
        margin-bottom: 30px;
        width: 66vw;
        padding: 0px 38px 0px 38px;
      }
      @media only screen and (max-width: 1024px) {
        .respo-hero {
          display: block;
        }
        .image-container {
          width: 100%;
        }
        .content {
          width: 100%;
          margin-top: 10px;
        }
        .description-content {
          color: rgb(100, 100, 100);
        }
        .description-section {
          color: rgb(109, 109, 109);
        }
        .hero-banner {
          display: flex !important;
          flex-direction: column !important;
          justify-content: space-around !important;
          padding: 20px !important;
          height: 30vh !important;
        }
        .hero-banner img {
          display: none;
        }
        .hero-banner-content-heading {
          font-size: 25px !important;
          padding-left: 0px;
        }
        .hero-banner-content-text {
          margin-left: 0px !important;
          padding: 5px 0px !important;
        }
        .banner-button-get-started button {
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
      .blue-bg:hover {
        background-color: rgb(246, 246, 248);
      }
      .scrolling-section {
        position: fixed;
        bottom: 20px;
        right: 0;
        top: 16px;
        width: 25%;
        z-index: 10;
        transition: top 0.3s;
      }
    </style>
  </head>
  <body>
    <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="assets/logo.png" class="h-10" alt="StudyByU Logo" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <button
            type="button"
            class="hover:bg-blue-800 hover:text-white focus:ring-4 border-solid border-2 border-blue-500 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          >
            Sign In
          </button>
          <button
            data-collapse-toggle="navbar-sticky"
            type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-sticky"
            aria-expanded="false"
          >
            <span class="sr-only">Open main menu</span>
            <svg
              class="w-5 h-5"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 17 14"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15"
              />
            </svg>
          </button>
        </div>
        <div
          class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
          id="navbar-sticky"
        >
          <ul
            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700"
          >
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-black rounded md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:border-gray-700"
                aria-current="page"
                >Home</a
              >
            </li>
            <li class="relative">
              <button
                id="dropdownNavbarLink"
                class="dropdown flex items-center justify-between w-full py-2 px-3 rounded md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto md:dark:hover:text-blue-500 dark:border-gray-700"
              >
                Classes
                <svg
                  class="w-2.5 h-2.5 ml-2.5"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 10 6"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m1 1 4 4 4-4"
                  />
                </svg>
              </button>
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-black rounded md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:border-gray-700"
                >College Admissions</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-black rounded md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:border-gray-700"
                >Learning</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-black rounded md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:border-gray-700"
                >More</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="flex justify-center">
      <div class="hero respo-hero">
        <div class="image-container">
          <img src="assets/img/hero-banner.png" alt="Hero Image" />
        </div>
        <div class="content">
          <h1 class="hero-banner-content-heading">
            Improve your academic performance with the best tutors
          </h1>
          <p class="hero-banner-content-text">
            Book classes with the best tutors and mentors now!
          </p>
          <ul>
            <li class="hero-banner-content-list">Personalized teaching plans</li>
            <li class="hero-banner-content-list">Certified and experienced tutors</li>
            <li class="hero-banner-content-list">Affordable prices</li>
          </ul>
          <div class="banner-button-get-started">
            <button type="button">
              Get Started <i class="fas fa-arrow-right button-right-arrow"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="flex justify-center">
      <div class="fixed z-30 scrolling-section w-full sm:w-3/12 bg-white shadow-lg">
        <h2 class="text-center py-3 font-bold text-lg">Fixed Section</h2>
        <div class="py-3">
          <p class="text-center">This section should scroll up after the last section.</p>
        </div>
      </div>
      <div class="w-2/3 flex flex-col">
        <div class="description">
          <h2 class="description-heading">Description Section 1</h2>
          <div class="description-section">
            <p>Content of the first description section.</p>
          </div>
        </div>
        <div class="description">
          <h2 class="description-heading">Description Section 2</h2>
          <div class="description-section">
            <p>Content of the second description section.</p>
          </div>
        </div>
        <div class="description">
          <h2 class="description-heading">Description Section 3</h2>
          <div class="description-section">
            <p>Content of the third description section.</p>
          </div>
        </div>
      </div>
    </div>
    <footer class="bg-gray-800 text-white py-8">
      <div class="container mx-auto text-center">
        <p>Footer Content</p>
      </div>
    </footer>
    <script>
      window.addEventListener('scroll', function() {
        const fixedSection = document.querySelector('.scrolling-section');
        const footer = document.querySelector('footer');
        const fixedSectionHeight = fixedSection.offsetHeight;
        const footerOffsetTop = footer.offsetTop;
        const windowScrollTop = window.pageYOffset;
        const windowInnerHeight = window.innerHeight;

        if (windowScrollTop + windowInnerHeight > footerOffsetTop) {
          fixedSection.style.top = `${footerOffsetTop - fixedSectionHeight - windowScrollTop}px`;
        } else {
          fixedSection.style.top = '16px';
        }
      });
    </script>
  </body>
</html>
