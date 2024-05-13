<?php
session_start();
include('./components/header.html');
?>

    <div>
        <div classname="section-1"></div>
        <div classname="main-section">
            <div class="pdf-viewer" id="pdf-viewer"></div>
        </div>
        <div classname="section-3"></div>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
<script>const pdfUrl = 'dummy.pdf';</script>
<script src="javascript/pdf-viewer.js"></script>
<?php include('./components/footer.html');?>