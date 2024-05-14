<?php
session_start();
include('./components/header.html');
?>

    <div class="flex">
        <div class="section-1"></div>
        <div class="main-section">
            <div class="pdf-viewer" id="pdf-viewer"></div>
        </div>
        <div class="section-3">

            <div class="playlist">
                <div class="playlist-header">
                    <div class="chapter">Chapter-1</div>
                    <div class="subject">Science <span>1/5</span></div>
                </div>
                <div class="playlist-body">

                    <div class="video active">
                        <div class="numbering">1</div>
                        <div class="thumbnail">
                            <img src="assets/dummy-thumbnail.jpg">
                        </div>
                        <div class="video-title">Video Title</div>
                    </div>

                    <div class="video">
                        <div class="numbering">2</div>
                        <div class="thumbnail">
                            <img src="assets/dummy-thumbnail.jpg">
                        </div>
                        <div class="video-title">Video Title</div>
                    </div>

                    <div class="video">
                        <div class="numbering">3</div>
                        <div class="thumbnail">
                            <img src="assets/dummy-thumbnail.jpg">
                        </div>
                        <div class="video-title">Video Title</div>
                    </div>

                    <div class="video">
                        <div class="numbering">4</div>
                        <div class="thumbnail">
                            <img src="assets/dummy-thumbnail.jpg">
                        </div>
                        <div class="video-title">Video Title</div>
                    </div>

                    <div class="video">
                        <div class="numbering">5</div>
                        <div class="thumbnail">
                            <img src="assets/dummy-thumbnail.jpg">
                        </div>
                        <div class="video-title">Video Title</div>
                    </div>

                </div>
            </div>

        </div>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
<script>const pdfUrl = 'dummy.pdf';</script>
<script src="javascript/pdf-viewer.js"></script>
<?php include('./components/footer.html');?>