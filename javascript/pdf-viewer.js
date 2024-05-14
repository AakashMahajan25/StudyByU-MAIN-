pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
    const pdfViewer = document.getElementById('pdf-viewer');

    // Render each page in the PDF
    for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
        pdf.getPage(pageNumber).then(function(page) {
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');

            // Set canvas dimensions to match the PDF viewer div width and viewport height
            const viewerWidth = pdfViewer.offsetWidth;
            const viewport = page.getViewport({ scale: 1.8 });
            const viewerHeight = viewport.height * (viewerWidth / viewport.width); // Maintain aspect ratio
            canvas.width = viewerWidth;
            canvas.height = viewerHeight;

            // Render the PDF page onto the canvas
            const renderContext = {
                canvasContext: context,
                viewport: viewport
            };
            page.render(renderContext);

            // Append the canvas to the PDF viewer div
            pdfViewer.appendChild(canvas);
        });
    }
});



// Javascript for Playlist Logic
document.addEventListener('DOMContentLoaded', function() {
    const videos = document.querySelectorAll('.playlist-body .video');

    videos.forEach(video => {
        video.addEventListener('click', function() {
            // Remove active class from all videos
            videos.forEach(v => v.classList.remove('active'));

            // Add active class to the clicked video
            this.classList.add('active');

            // Get the video id
            const videoId = this.getAttribute('data-video-id');

            // Perform any additional actions, such as loading the selected video
            console.log(`Video ${videoId} clicked`);
        });
    });
});
