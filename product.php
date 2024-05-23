<?php
session_start();
include('./secondary-navbar-white.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-page container px-4 md:px-8 mx-auto mt-20">
        
        <div class="hero">
            <div class="image-container">
                <img src="assets/product-image.jpg" alt="">
            </div>
            <div class="content">
                <div class="company-name">
                    StudyByU
                </div>
                <div class="subject-heading">
                    Class IX English Course A for CBSE Schools
                </div>
                <div class="subject-price">
                    Rs.499
                </div>
                <div class="subject-about">
                    This is a collection of articles written by the coordinating author and many of his dear friends. These articles were arranged in this book so that math lovers and anyone interested in expanding their mathematical horizons can benefit from it. Articles range from intermediate to advanced. 
                </div>
                <div class="buy-now-button">
                    <button>Buy Now</button>
                </div>
            </div>
        </div>



        <!-- Description Section -->
        <div class="description">
            <div class="description-heading">
                Description
            </div>
            <div class="description-section">
                This specialization provides a comprehensive introduction to machine learning, data mining, and statistical pattern recognition. The courses draw from numerous case studies and applications, enabling students to apply the theoretical concepts to practical real-world scenarios.
            </div>
            <div class="description-content">
                Certainly! Here is a specifications list for a doubt-solving sessions program: <br>

Doubt-Solving Sessions Specifications: <br>

1. Expert Tutors:<br>
    - Highly qualified and experienced in their respective fields.<br>
    - Specialize in personalized tutoring and doubt resolution.<br>

2. One-on-One Sessions:<br>
    - Individual attention to address specific doubts and questions.<br>
    - Tailored explanations and teaching methods.<br>

3. Flexible Scheduling:<br>
    - Sessions available at convenient times for students.<br>
    - Easy to book through an online portal.<br>

4. Interactive Platform:<br>
    - Use of advanced online tools for real-time interaction.<br>
    - Virtual whiteboards, screen sharing, and annotation features.<br>

5. Comprehensive Coverage:<br>
    - Addressing doubts across various subjects and topics.<br>
    - Including STEM subjects, humanities, languages, and more.<br>

6. Instant Doubt Resolution:<br>
    - Quick response time for resolving urgent academic queries.<br>
            </div>
            <button class="toggle-button" onclick="toggleDescription()">Show more</button>
        </div>

       
    </div>

    <div class="hero">
        <div class="hero-banner">
            <div class="hero-banner-content">
                <div class="hero-banner-content-heading">
                    "Unravel Your Doubts, Excel in Your Studies!"
                </div>
                <div class="hero-banner-content-text">
                    Get our Doubt Solving Sessions Today!
                </div>
                <div class="banner-button-get-started">
                    <button>Get Started <div class="button-right-arrow"><i class="fa-solid fa-arrow-right"></div></i></button>
                </div>
            </div>
            <div class="hero-banner-image"><img src="assets/doubt.png" alt=""></div>
        </div>
    </div>


    <script>
        function toggleDescription() {
            var content = document.querySelector('.description-content');
            var button = document.querySelector('.toggle-button');
            if (content.style.display === "none") {
                content.style.display = "inline-block";
                button.textContent = "Show less";
            } else {
                content.style.display = "none";
                button.textContent = "Show more";
            }
        }
    </script>
</body>
</html>

<?php include('./footer.html');?>


