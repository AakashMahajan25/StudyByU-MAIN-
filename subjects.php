<?php
session_start();
include('./secondary-navbar.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: "Poppins", sans-serif;
    }
    .subjects {
        margin: auto;
        margin-top: -60px;
        /* background-color: #efeeec; */
        background-color: white;
        border: 1px solid #ecedef;
        padding: 25px 25px;
        width:fit-content;
        box-shadow: 0 3.56158px 0 #f6f6f6;
        z-index: 200;
    }
    .subjects-heading {
        color: white;
        background-color: #5e71ff;
        border-radius: 20px;
        padding: 4px 10px;
        margin-bottom: 18px;
        font-size: 20px;
        font-weight: 600;
        width: fit-content;
    }
    .subjects-container {
        display: flex;
        justify-content: space-around;
        width: 70vw;
        cursor: pointer;
        font-weight: 500;
        font-size: 14px;
        overflow-x: auto; 
        white-space: nowrap; 
    }
    .subject-element {
        border-radius: 8px;
        padding: 12px;
        padding-bottom: 30px;
        margin-bottom: 4px;
        margin-right: 16px; 
        width: 164px;
        color: #01202b;
        display: inline-block; 
    }
    .subject-element-content {
        display: flex;
        justify-content: space-between;
    }
    .subject-logo img {
        height: auto;
        width: 40px;
    }
    .subject-heading {
        margin-top: 3px;
        font-weight: 600;
        font-size: 18px;
    }
    .subject-link-logo img {
        width: 10px;
        height: auto;
    }
    .subject-1 {
        background-color: #e8dfff;   
    }
    .subject-2 {
        background-color: rgb(255, 240, 203);   
    }
    .subject-3 {
        background-color: rgb(182, 255, 228);   
    }
    .subject-4 {
        background-color: rgb(252, 228, 236);   
    }
    .subject-5 {
        background-color: rgb(205, 222, 255);   
    }
    .hero {
        display: flex;
        justify-content: center;
        margin-top
    }
    .hero-banner {
        height: 35vh;
        width: 80vw;
        border-radius: 20px;
        background-color: #ccdefe;
        z-index: -1;
    }

    /* Four Element Container CSS Below */
    .four-element-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    position: relative; /* Added to position the background image */
    overflow: hidden; /* Added to ensure the background image doesn't affect the four-element-container's size */
}

.four-element-container::before {
    content: "";
    position: absolute;
    top: 0;
    right: -200px; /* Adjust this value to position the image as desired */
    width: 40vw;
    height: 100%;
    background: url('assets/chemistry.png') no-repeat ;
    /* background-size: cover; */
    z-index: -1; /* Ensures the image is behind other content */
    /* margin-left: -50px; */
}

h1 {
    font-size: 36px;
    color: #333;
}

.highlight {
    color: #ff6f3d;
    text-decoration: underline;
}

.courses {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-top: 20px;
    width: 50vw;
}

.course-card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    padding: 20px;
    text-align: left;
    position: relative;
    width: 20vw;
}

.course-card h2 {
    font-size: 18px;
    color: #333;
}

.course-card h3 {
    font-size: 20px;
    color: #ff6f3d;
}

.course-card p {
    font-size: 14px;
    color: #666;
}

.course-card button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

.course-card button:hover {
    background-color: #555;
}

.new::before {
    content: "NEW";
    color: #fff;
    background-color: #ff6f3d;
    padding: 3px 8px;
    border-radius: 5px;
    font-size: 12px;
    position: absolute;
    top: 10px;
    right: 10px;
}

.bg-four-element-container {
    /* z-index: 100; */
    width: 30vw;
    background-image: url(assets/biology.png);
}

</style>
<body>
    <div class="hero">
        <div class="hero-banner">
        </div>
    </div>
    <div class="subjects">
        <div class="subjects-heading">Our Courses</div>
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

    <div class="four-element-container">
        <h1>Courses for <span class="highlight">Kids</span></h1>
        <div class="component">
            <div class="courses">
                <div class="course-card new">
                    <h2>Class LKG - 5</h2>
                    <h3>Summer Camp</h3>
                    <p>4 fun and exciting courses to choose from this summer</p>
                    <button>Explore</button>
                </div>
                <div class="course-card">
                    <h2>Class LKG - 5</h2>
                    <h3>Learn English</h3>
                    <p>Level based holistic English Program</p>
                    <button>Explore</button>
                </div>
                <div class="course-card">
                    <h2>Class 1 and 2</h2>
                    <h3>Learn math</h3>
                    <p>Turn your child into a Math wizard</p>
                    <button>Explore</button>
                </div>
                <div class="course-card">
                    <h2>Class 1 - 8</h2>
                    <h3>Coding classes</h3>
                    <p>Learn to build apps and games, be future ready</p>
                    <button>Explore</button>
                </div>
            </div>
            <div class="bg-four-element-container"></div>
        </div>

</body>
</html>
