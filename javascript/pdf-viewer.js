pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
    const pdfViewer = document.getElementById('pdf-viewer');

    function renderPage(pageNumber) {
        pdf.getPage(pageNumber).then(function(page) {
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');

            // Get the viewport at scale 1
            const viewport = page.getViewport({ scale: 1.0 });

            // Calculate the scale to fit the width of the viewer
            const viewerWidth = pdfViewer.offsetWidth;
            const scale = viewerWidth / viewport.width;

            // Create a new viewport with the calculated scale
            const scaledViewport = page.getViewport({ scale: scale });

            // Set canvas dimensions to a higher resolution to maintain quality
            const outputScale = window.devicePixelRatio || 1;
            canvas.width = scaledViewport.width * outputScale;
            canvas.height = scaledViewport.height * outputScale;

            // Apply CSS transform to scale the canvas display size
            canvas.style.width = `${scaledViewport.width}px`;
            canvas.style.height = `${scaledViewport.height}px`;

            // Render the PDF page onto the canvas
            const renderContext = {
                canvasContext: context,
                viewport: scaledViewport,
                transform: [outputScale, 0, 0, outputScale, 0, 0] // scale the rendering context
            };
            page.render(renderContext);

            // Append the canvas to the PDF viewer div
            pdfViewer.appendChild(canvas);
        });
    }

    // Render each page in the PDF
    for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
        renderPage(pageNumber);
    }

    // Handle window resize to re-render the pages with the new scale
    window.addEventListener('resize', function() {
        // Clear the current PDF viewer
        pdfViewer.innerHTML = '';
        
        // Re-render each page with the new dimensions
        for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
            renderPage(pageNumber);
        }
    });
});


// Javascript for Playlist Logic
document.addEventListener('DOMContentLoaded', function() {
    const videos = document.querySelectorAll('.playlist-body .video');
    const videoNumberElement = document.getElementById('video-number');
    const playlist = document.getElementById('playlist-body');

    videos.forEach(video => {
        video.addEventListener('click', function() {
            // Remove active class from all videos
            videos.forEach(v => v.classList.remove('active'));

            // Add active class to the clicked video
            this.classList.add('active');

            // Parse video ID
            const videoId = parseInt(this.querySelector('.numbering').textContent.trim(), 10);

            // Count the number of direct child videos
            const videoCount = Array.from(playlist.children).filter(child => child.classList.contains('video')).length;

            // Update video number element
            videoNumberElement.textContent = `${videoId}/${videoCount}`;

            // Perform any additional actions, such as loading the selected video
            console.log(`Video ${videoId} clicked`);
        });
    });
});