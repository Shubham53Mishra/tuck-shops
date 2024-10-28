<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Tuck Shops</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="./image/MunchMart Logo.png" alt="THF Kitchens Logo">
        </div>
        <nav>
            <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="ContactUs.php">Contact Us</a></li>



                <li><a href="#" class="btn-quote">Get a Quote</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Section -->
    <main>
        <section class="hero">
            <h1>Corporate Tuck Shops</h1>
            <p>We set up our tuck shops in Corporates, Schools, Factories, and building cafeterias. With nearly two decades of expertise, we specialize in establishing well-designed tuck shops that offer a variety of eateries and MRP supplies. Our commitment to excellence ensures workplace convenience and their immediate needs for a seamless workday experience.</p>
            <p>Modern Tuck Shops with Extensive Menus at Best Rates</p>
            <a href="#" class="btn-talk">Talk to Us</a>
        </section>

        <section class="content">
            <img src="image/MUNCH MART Reference 2.png" alt="Snack Bar" style="width: 50%; height: auto;">
        </section>
    </main>

    <!-- Feature Section -->
    <section class="features">
        <div class="container">
            <div class="feature-box">
                <div class="icon">&#9632;&#9651;&#9733;&#9650;</div>
                <h2>Unmatched Variety</h2>
                <p>  A wide range of menu items is available at our counters, designed to cater to diverse tastes and preferences. From refreshing, healthy juices to gourmet sandwiches, delectable pastries, and a selection of beverages, each item reflects our dedication to quality. We regularly update our menu with exciting new options, ensuring there’s always something fresh and enjoyable for everyone to savor</p>
             </div>
            <div class="feature-box">
                <div class="icon">&#127970;</div>
                <h2>Elegant and Modern Design</h2>
                <p>
                Our attractively designed and vibrant outlets perfectly complement corporate cafeterias. Each unit is thoughtfully crafted to create a welcoming and enjoyable atmosphere, enhancing the overall experience for all. The contemporary design not only adds aesthetic appeal but also optimizes space, allowing for an efficient layout that reduces wait times and ensures seamless service</p>
             </div>
            <div class="feature-box">
                <div class="icon">&#127869;</div>
                <h2>Quality and Hygiene</h2>
                <p>We exclusively use high-quality raw materials for food preparation and maintain a strict focus on cleanliness throughout all working hours. Our dedication to hygiene is a fundamental aspect of our operations, ensuring a safe and sanitary environment for both staff and customers.</p>
            </div>
            <div class="feature-box">
                <div class="icon">&#128104;&#8205;&#128295;</div>
                <h2>Process-Oriented & Trained Staff</h2>
                <p>Our staff is highly skilled and dedicated to providing exceptional service at our tuck shop. We conduct regular health checkups, perform background checks, and ensure compliance with all necessary regulations. Each team member receives comprehensive training in food safety and customer service. Through consistent audits and supervisor evaluations, we ensure our staff exceeds the highest standards of quality and service.</p>
             </div>
        </div>
    </section>

    <div class="container1">
        <div class="image-section">
            <img src="image/MUNCH MART Reference.png" alt="Tuck shop" class="shop-image">
        </div>
        <div class="text-section">
            <h2>Convenience And Customization</h2>
            <p>Our tuck shops are tailored to meet the unique needs of schools, hospitals, corporates, and large residential premises. We offer highly customizable menus, allowing you to choose from a wide range of delicious and nutritious options. Additionally, our flexible pricing options are designed to accommodate various budgets, making it easier for you to provide top-quality food services to your community.</p>
        </div>
    </div>
    

    <div class="contact-section">
        <div class="contact-info">
            <h1>Talk with THF Kitchens for 15 minutes</h1>
            <p>Learn how our popular amenity can help your team</p>
            <img src="image/contact-info.png" alt="Communication" class="contact-image" style="width: 50%; height: auto;">
        </div>
        <div class="contact-form">
            <form id="talkForm" method="POST">
                <input type="text" id="name" name="name" placeholder="Complete Name" required>
                <input type="text" id="company" name="company" placeholder="Company Name" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="text" id="phone" name="phone" placeholder="Phone Number" required>
                <input type="text" id="city" name="city" placeholder="City" required>
                <textarea id="message" name="message" placeholder="Your Message Here..." required></textarea>
                <p>Your email is safe with us. We hate SPAM too.</p>
                <button type="submit">Let's Talk</button>
            </form>
            <div id="responseMessage"></div>
        </div>
    </div>

    <!-- Footer Section -->
    <!-- <div class="footer">
        <div class="footer-content">
            <div class="logo-section">
                <img src="image/MunchMart Logo.png" alt="THF Kitchens Logo">
            </div>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="contact-info">
                <p>We’re always happy to help.</p>
                <p>info@thfkitchens.com</p>
            </div>
        </div>
        <p>&copy; 2024 THF Kitchens. All rights reserved.</p>
    </div> -->

    <script src="script.js"></script>
    <script>
        document.getElementById('talkForm').addEventListener('submit', function(e) {
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
        
    </script>
</body>

</html>