pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
    const pdfViewer = document.getElementById('pdf-viewer');

    // Render each page in the PDF
    for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
        pdf.getPage(pageNumber).then(function(page) {
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');

            // Set canvas dimensions to match the PDF viewer div width and viewport height
            const viewerWidth = pdfViewer.offsetWidth;
            const viewport = page.getViewport({ scale: 1.45 });
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