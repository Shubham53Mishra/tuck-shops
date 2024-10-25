document.getElementById('talkForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent page reload

    // Gather form data
    var formData = new FormData(this);

    // Send form data to the PHP file via AJAX
    fetch('process_form.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.text())
    .then(result => {
        // Display server response in the div
        document.getElementById('responseMessage').innerHTML = result;
    })
    .catch(error => {
        console.error('Error:', error); // Log any errors
    });
});