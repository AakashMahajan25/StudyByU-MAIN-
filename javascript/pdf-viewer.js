pdfjs.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.min.js';

(async function () {

    // Specified the workerSrc property
    // pdfjsLib.GlobalWorkerOptions.workerSrc = "//mozilla.github.io/pdf.js/build/pdf.worker.js";

    // Creating the PDF Document
    var loadingTask = await pdfjsLib.getDocument('https://pdfobject.com/pdf/sample.pdf');
    loadingTask.promise.then(function(pdf) {
        console.log('PDF loaded');
    });

})();


