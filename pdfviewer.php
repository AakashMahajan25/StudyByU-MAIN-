<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
include('./components/header.html');
?>

    <div class="content-wrapper flex ">
        <div class="main-section">
            <div class="pdf-viewer" id="pdf-viewer"></div>
        </div>
        <div class="section-3 ">
            
            <div class="playlist">
                <div class="playlist-header">
                    <div class="chapter">Chapter-1</div>
                    <div class="subject"><div>Science</div><div id="video-number"> 1/5</div></div>
                </div>
                <div class="playlist-body" id="playlist-body">
                    <div class="video">
                        <div class="numbering">1</div>
                        <div class="thumbnail">
                            <img src="assets/new.webp" alt="Video 5 Thumbnail">
                        </div>
                        <div class="video-title">Physics</div>
                    </div>
                    <div class="video">
                        <div class="numbering">2</div>
                        <div class="thumbnail">
                            <img src="assets/new2.webp" alt="Video 5 Thumbnail">
                        </div>
                        <div class="video-title">Science</div>
                    </div>
                    <div class="video active">
                        <div class="numbering">3</div>
                        <div class="thumbnail">
                            <img src="assets/new3.webp" alt="Video 1 Thumbnail">
                        </div>
                        <div class="video-title">Graphics</div>
                    </div>
                    <div class="video">
                        <div class="numbering">4</div>
                        <div class="thumbnail">
                            <img src="assets/new4.webp" alt="Video 2 Thumbnail">
                        </div>
                        <div class="video-title">Accountancy</div>
                    </div>
                    <div class="video">
                        <div class="numbering">5</div>
                        <div class="thumbnail">
                            <img src="assets/new5.webp" alt="Video 3 Thumbnail">
                        </div>
                        <div class="video-title">Video Title 3</div>
                    </div>
                    <div class="video">
                        <div class="numbering">4</div>
                        <div class="thumbnail">
                            <img src="assets/icon4.jpg" alt="Video 4 Thumbnail">
                        </div>
                        <div class="video-title">Video Title 4</div>
                    </div>
                    <div class="video">
                        <div class="numbering">5</div>
                        <div class="thumbnail">
                            <img src="assets/icon5.avif" alt="Video 5 Thumbnail">
                        </div>
                        <div class="video-title">Video Title 5</div>
                    </div>
                    <div class="video">
                        <div class="numbering">5</div>
                        <div class="thumbnail">
                            <img src="assets/dummy-thumbnail.jpg" alt="Video 5 Thumbnail">
                        </div>
                        <div class="video-title">Video Title 5</div>
                    </div>
                    <div class="video">
                        <div class="numbering">5</div>
                        <div class="thumbnail">
                            <img src="assets/dummy-thumbnail.jpg" alt="Video 5 Thumbnail">
                        </div>
                        <div class="video-title">Video Title 5</div>
                    </div>
            </div>
        </div>

            <!-- Custom Video Player Ahead -->
            <!-- Video container -->
            <div class="video-container"> 
    <button id="fullscreen">
        <i class="fas fa-expand"></i>
    </button> 
    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20231020170918/Thumbnail-(1).jpg" id="video-thumbnail"> 
    <video id="video"> 
        <source src="https://media.geeksforgeeks.org/wp-content/uploads/20231020155223/Full-Stack-Development-_-LIVE-Classes-_-GeeksforGeeks.mp4" type="video/mp4"> 
    </video> 
    <div class="controls"> 
        <div class="left"> 
            <button id="skipminus-10">
                <i class="fa-solid fa-backward"></i> 
            </button> 
            <button id="play-pause"> 
                <i class="fa-solid fa-play"></i> 
            </button> 
            <button id="skip-10"> 
                <i class="fa-solid fa-forward"></i> 
            </button> 
        </div> 
        <div class="video-timer"> 
            <span id="current-time">00:00</span> 
            <span id="separator">/</span> 
            <span id="max-duration">00:00</span> 
        </div> 
        <div class="playback-line"> 
            <div class="progress-bar"></div> 
        </div> 
        <div class="right"> 
            <div class="volume-wrapper">
                <div id="mute">
                    <i class="fas fa-volume-up"></i>
                </div> 
                <div class="volume-container">
                    <input type="range" id="volume" min="0" max="1" step="0.01" value="1">
                </div>
            </div>
            <select id="playback-speed">
                <option value="0.5">0.5x</option>
                <option value="1" selected>1x</option>
                <option value="1.5">1.5x</option>
                <option value="2">2x</option>
            </select>
        </div> 
    </div> 
</div>





<script src="javascript/video-player.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js" ></script> -->
<script src="./javascript/pdf-viewer-cdn.js"></script>
<script>const pdfUrl = 'chemistry.pdf';</script>
<script src="javascript/pdf-viewer.js"></script>
<?php include('./components/footer.html');?>
</body>
</html>