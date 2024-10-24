document.addEventListener('DOMContentLoaded', () => {
    console.log("Page loaded and ready.");
    
    // Example interaction: Alert on feature click
    const featureBoxes = document.querySelectorAll('.feature-box');
    
    featureBoxes.forEach(box => {
        box.addEventListener('click', () => {
            alert("You clicked on: " + box.querySelector('h2').textContent);
        });
    });

    // Handle form submission
    document.getElementById('talkForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Collect form data
        const name = document.getElementById('name').value;
        const company = document.getElementById('company').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const city = document.getElementById('city').value;
        const message = document.getElementById('message').value;

        // Output collected data (You can replace this with AJAX or API calls)
        console.log("Form Submitted:");
        console.log("Name:", name);
        console.log("Company:", company);
        console.log("Email:", email);
        console.log("Phone:", phone);
        console.log("City:", city);
        console.log("Message:", message);

        alert("Form submitted successfully! We will contact you shortly.");

        // Clear form
        document.getElementById('talkForm').reset();
    });
});
