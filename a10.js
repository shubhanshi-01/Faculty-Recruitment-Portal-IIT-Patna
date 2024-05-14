document.getElementById('viewUploadedFile10').addEventListener('click', viewPdf);

function viewPdf() {
    var fileInput = document.getElementById('u_i_f10');
    var file = fileInput.files[0]; // Get the uploaded file

    if (!file) {
        alert('Please select a PDF file.');
        return;
    }

    var reader = new FileReader(); // FileReader object to read file content

    reader.onload = function(event) {
        var pdfData = event.target.result; // File content as ArrayBuffer

        // Open a new window or tab and display the PDF content
        var pdfWindow = window.open('', '_blank');
        pdfWindow.document.write('<html><head><title>PDF Viewer</title></head><body>');
        pdfWindow.document.write('<embed width="100%" height="100%" name="plugin" src="' + pdfData + '" type="application/pdf">');
        pdfWindow.document.write('</body></html>');
    };

    reader.onerror = function(event) {
        console.error("File could not be read! Code " + event.target.error.code);
    };

    reader.readAsDataURL(file); // Read file as data URL
}
