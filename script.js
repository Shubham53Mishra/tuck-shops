// Placeholder for future interaction if needed

document.addEventListener('DOMContentLoaded', () => {
    console.log("Page loaded and ready.");
    
    // Example interaction: Alert on feature click
    const featureBoxes = document.querySelectorAll('.feature-box');
    
    featureBoxes.forEach(box => {
        box.addEventListener('click', () => {
            alert("You clicked on: " + box.querySelector('h2').textContent);
        });
    });
});
