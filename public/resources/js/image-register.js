document.getElementById('imageInput').addEventListener('change', function (e) {
    const file = e.target.files[0]; // Get the file
    const reader = new FileReader(); // Create a file reader
    reader.onload = function (e) {
        const previewImage = document.getElementById('previewImage');
        previewImage.src = e.target.result; // Set the src of the image to the file content
    };
    reader.readAsDataURL(file); // Read the file as a Data URL
});

