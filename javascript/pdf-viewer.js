pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
    const pdfViewer = document.getElementById('pdf-viewer');

    // Render each page in the PDF
    for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
        pdf.getPage(pageNumber).then(function(page) {
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');

            // Set canvas dimensions to match the PDF viewer div width and viewport height
            const viewerWidth = pdfViewer.offsetWidth;
            const viewport = page.getViewport({ scale: 2 });
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