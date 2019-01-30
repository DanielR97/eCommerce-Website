// Function to preview an image before uploading
var loadFile = function (event) {
    var output = document.getElementById('preview');
    output.src = URL.createObjectURL(event.target.files[0]);
    document.getElementById('upload-img').style.display = 'none';
};