<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/contact.css" />
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

  <div class="contact-us section my-20" id="contact">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full lg:w-1/2 self-center px-4">
          <div class="section-heading">
            <h6 class="text-lg font-semibold">Contact Us</h6>
            <h2 class="text-3xl font-bold">Feel free to contact us anytime</h2>
            <p class="mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fuga earum cum voluptate possimus quasi eum asperiores pariatur atque
            </p>
            <div class="special-offer mt-8">
              <span class="offer block text-xl font-bold">off<br><em class="text-4xl">50%</em></span>
              <h6 class="mt-4">Valid: <em>24 April 2036</em></h6>
              <h4 class="text-2xl font-semibold mt-2">Special Offer <em class="text-4xl">50%</em> OFF!</h4>
              <a href="#" class="text-blue-500 mt-4 inline-block"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 px-4">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
              <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 mb-4">
                  <fieldset>
                    <input type="text" name="name" id="name" placeholder="Your Name..." autocomplete="on" required class="w-full p-3 border border-gray-300 rounded">
                  </fieldset>
                </div>
                <div class="w-full px-4 mb-4">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required class="w-full p-3 border border-gray-300 rounded">
                  </fieldset>
                </div>
                <div class="w-full px-4 mb-4">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Your Message" class="w-full p-3 border border-gray-300 rounded"></textarea>
                  </fieldset>
                </div>
                <div class="w-full px-4 mb-4">
                  <fieldset>
                    <button type="submit" id="form-submit" class="bg-orange-500 text-white py-3 px-6 rounded hover:bg-orange-600">Send Message Now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


    <?php include('./footer.html');?>
  </body>
</html>