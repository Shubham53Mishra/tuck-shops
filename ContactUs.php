<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Section</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
     * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

/* Header Styles */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff;
    padding: 10px 50px;
    border-bottom: 2px solid #f4f4f4;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logo img {
    height: 80px;
    margin-left: 90px;
}

/* Menu Toggle Button */
.menu-toggle {
    display: none; /* Hidden by default, shown in mobile */
    font-size: 24px;
    background: none;
    border: none;
    cursor: pointer;
    color: #333;
}

/* Navigation */
nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
    padding: 0;
    margin: 0;
    background-color: white;
}

nav ul li {
    position: relative;
}

nav ul li a {
    text-decoration: none;
    color: #333; /* Initial text color */
    font-size: 16px;
    padding: 10px;
    transition: background-color 0.3s, color 0.3s; /* Smooth transition */
}

nav ul li a:hover {
    background-color: black; /* Background color on hover */
    color: white; /* Text color on hover */
}

nav ul li a.btn-quote {
    background-color: black;
    color: yellow;
    padding: 10px 20px;
    border-radius: 5px;
}

.btn-quote:hover {
    background-color: black; /* Keep background black on hover */
    color: white; /* Change text color to white on hover */
}

.contact-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 50px;
    background-color: #f8f8f8;
    max-width: 1400px;
    margin: 0 auto;
}

.contact-section h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}

.contact-section h3 {
    font-size: 28px;
    color: #333;
    font-weight: bold;
    margin-bottom: 20px;
}

.underline {
    width: 60px;
    height: 3px;
    background-color: #ffc107;
    margin: 0 auto 40px;
}

.contact-info {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 40px;
    text-align: center;
    margin-bottom: 40px;
}

.info-item {
    max-width: 200px;
}

.icon {
    font-size: 40px;
    color: #ffc107;
    margin-bottom: 15px;
}

.info-item h4 {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.info-item p {
    font-size: 16px;
    color: #666;
    line-height: 1.5;
    font-weight: bold;
}

.talk-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 50px;
    max-width: 1200px;
    margin: 0 auto;
    background-color: white;
}

.talk-info {
    flex: 1;
    display: flex;
    flex-direction: column; /* Stack children vertically */
    align-items: flex-start; /* Align all items to the left */
}

.talk-info h1 {
    font-size: 2.5rem;
    color: black;
    margin-bottom: 30px;
}

.talk-info p {
    font-size: 1.1rem;
    font-weight: bold;
    color: #666;
}

.talk-info img {
    width: 100%;
    height: auto;
    max-width: 400px;
    border-radius: 8px;
}

.talk-info {
    text-align: center; /* Centers all content inside this container */
}

.talk-info a {
    color: black; /* Makes the link text black */
    font-weight: bold; /* Optional: Makes the link text bold */
    display: inline-block;
    margin-top: 10px; /* Adds spacing between the elements */
}

.contact-form {
    flex: 1;
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-form form {
    display: flex;
    flex-direction: column;
}

.contact-form input,
.contact-form textarea {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
    width: 100%;
}

.contact-form textarea {
    resize: none;
    height: 100px;
}

.contact-form button {
    background-color: black;
    color: yellow;
    padding: 12px;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.contact-form button:hover {
    background-color: black;
    color: white;
}

.contact-form p {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 10px;
    text-align: center;
}

.logo-section img {
    max-width: 100px;
    height: auto;
    margin-left: 110px;
}

.social-icons {
    display: flex;
    justify-content: center;
    margin: 0 20px;
}

.social-icons a {
    margin: 0 10px;
    text-decoration: none;
    color: #666;
    font-size: 24px;
}

.contacts-info {
    text-align: center;
    margin-right: 20px;
}

.contact-info p {
    margin: 0;
    margin-right: 20px;
}

.footer {
    background-color: #f2e8d8;
    padding: 30px 20px;
    text-align: center; /* Center all text in the footer */
    margin-top: 40px;
}

.footer-content {
    display: flex; /* Use flexbox to align items */
    justify-content: space-between; /* Space between logo and contact info */
    align-items: center; /* Center align vertically */
}

.logo-section img {
    max-width: 100px; /* Set a max width for the logo */
    height: auto; /* Maintain aspect ratio */
    margin-left: 110px;
}

.social-icons {
    display: flex; /* Use flexbox to arrange icons */
    justify-content: center; /* Center the icons horizontally */
    margin: 0 20px; /* Optional: add some margin around the icons */
}

.social-icons a {
    margin: 0 10px; /* Space between icons */
    text-decoration: none;
    color: black;
    font-size: 24px;
}

.Contact-info {
    text-align: center; /* Center align contact info */
}

.Contact-info p {
    font-size: 18px;
    margin: 0; /* Remove default margin */
   
}
 


/* Mobile View for 480px */
 
   /* Mobile View for 480px */
@media (max-width: 480px) {
 /* Mobile View for 480px */
 @media (max-width: 480px) {
    header {
        padding: 10px;
        display: flex;
        flex-direction: column; /* Stack items vertically */
        align-items: center; /* Center items */
    }

    .logo {
        display: flex; /* Use flex to center */
        justify-content: center; /* Center the logo */
        width: 100%; /* Full width for the logo container */
        margin-bottom: 10px; /* Space between logo and menu */
    }

    .logo img {
        height: 50px; /* Adjust height as needed */
        margin: 0; /* Remove margin */
    }

    .menu-toggle {
        display: inline-block;
        margin-bottom: 10px; /* Space between toggle and menu */
    }

    /* Navigation styles */
    nav ul {
        display: none;
        flex-direction: column;
        align-items: center; /* Center items in nav */
        gap: 10px;
        width: 100%; /* Full width for nav */
    }

    nav.show-menu ul {
        display: flex;
    }

    nav ul li a {
        font-size: 14px;
        padding: 8px;
        text-align: center; /* Center text in links */
    }

    .btn-quote {
        padding: 6px 12px;
        font-size: 14px;
    }
}
    .contact-section {
        padding: 20px;
    }

    .contact-section h2,
    .contact-section h3 {
        text-align: center;
    }

    .contact-info {
        flex-direction: column;
        align-items: center;
    }

    .info-item {
        max-width: 80%;
    }

    .talk-section {
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .talk-info img {
        max-width: 80%;
    }

    .contact-form {
        width: 100%;
        padding: 15px;
    }

    .footer-content {
        flex-direction: column;
        align-items: center;
    }

    .logo-section img {
        max-width: 80px;
    }

    .contacts-info {
        margin-right: 0;
        text-align: center;
    }
}
.footer-content {
            align-items: center;
        }

        .logo-section img {
            max-width: 80px;
            margin: 0 auto;
        }

        .social-icons {
            font-size: 18px;
        }
        .Contacts-info {
        text-align: center; /* Center text for mobile view */
        margin-right: 0; /* Remove right margin */
    }

    .Contacts-info p {
        margin-right: 0; /* Ensure no margin for paragraphs */
    }


/* Mobile View for 320px */
@media (max-width: 320px) {
    header {
                padding: 8px;
            }

            .logo img {
                height: 40px;
                /* Adjust logo height */
            }

            nav ul li a {
                font-size: 12px;
                /* Smaller font size for links */
                padding: 6px;
                /* Reduced padding */
            }

            .btn-quote {
                padding: 4px 8px;
                /* Smaller button padding */
                font-size: 12px;
                /* Smaller button font size */
            }

    .contact-section {
        padding: 15px;
    }

    .contact-section h2,
    .contact-section h3 {
        font-size: 18px;
    }

    .contact-info {
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    .info-item {
        max-width: 90%;
    }

    .talk-section {
        padding: 15px;
    }

    .talk-info img {
        max-width: 100%;
    }

    .contact-form {
        padding: 10px;
    }

    .footer {
    text-align: center; /* Center all text in the footer */
}

.footer-content {
    align-items: center;
    display: flex; /* Ensure flexbox is applied */
    flex-direction: column; /* Stack items vertically */
}

.logo-section img {
    max-width: 80px;
    margin: 0 auto;
}

.social-icons {
    font-size: 18px;
}

/* Center all <p> tags in the footer */
.footer p {
    text-align: center; /* Center the text */
    margin: 0; /* Optional: remove default margins */
}
}

 


    </style>
</head>

<body>
    <!-- Header Section -->
    <header>
    <div class="logo">
        <img src="./image/MunchMart Logo.png" alt="THF Kitchens Logo">
    </div>
    <button class="menu-toggle" style="position: absolute; right: 20px; top: 10px;" onclick="toggleMenu()">☰</button> <!-- Toggle Button for Mobile View -->
    <nav>
        <ul>
            <li><a href="about.php">About Us</a></li>
            <li><a href="ContactUs.php">Contact Us</a></li>
            <li><a href="#" class="btn-quote" onclick="scrollToTalkSection(event)">Get a Quote</a></li>
         </ul>
    </nav>
</header>


    <section class="contact-section">
        <h2>OUR ADDRESS</h2>
        <h3>WHERE YOU CAN FIND US</h3>
        <div class="underline"></div>

        <div class="contact-info">
            <div class="info-item">
                <img src="image/location.png" alt="Office Location" style="width: 30px; height: auto;">
                <h4>OFFICE LOCATION</h4>
                <p>91 SpringBoard, C-2, Sector 1,<br>Noida</p>
            </div>
            <div class="info-item">
                <img src="image/CALL.png" alt="Call Us" style="width: 50px; height: auto;">
                <h4>CALL US</h4>
                <p>+91 9411278008</p>
            </div>
            <div class="info-item">
                <img src="image/message.png" alt="Email Address" style="width: 70px; height: auto;">
                <h4>EMAIL ADDRESS</h4>
                <p>munchmart2024@gmail.com</p>
            </div>
            <div class="info-item">
                <img src="image/WATCH.png" alt="Working Hours" style="width: 55px; height: auto;">
                <h4>WORKING HOURS</h4>
                <p>Monday - Saturday 10 AM - 07 PM</p>
            </div>
        </div>


        <div class="talk-section" id="talkSection">
    <div class="talk-info">
        <h1>Talk with THF Kitchens for 15 minutes</h1>
        <p>Learn how our popular amenity can help your team</p>
        <p>Mobile: <a class="contact-link" href="tel:+91">+91 9411278008</a></p>
        <p>Email: <a class="contact-link" href="mailto:munchmart2024@gmail.com">munchmart2024@gmail.com</a></p>
        <img src="image/truk shop.png" alt="Communication" class="contact-image" style="width: 50%; height: auto;">
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

    </section>

    <div class="footer">
        <div class="footer-content">
            <div class="logo-section">
                <img src="image/MunchMart Logo.png" alt="THF Kitchens Logo" style="max-width: 100px;">
            </div>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="Contacts-info">
                <p style=  " color: gray;">We’re always happy to help.</p>
                <p style=  "color: gray;">munchmart2024@gmail.com</p>

            </div>
        </div>
        <p style="color: gray;">&copy; 2024 Ridobiko Solutions Private Limited. All rights reserved.</p>
    </div>
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
        function toggleMenu() {
            const nav = document.querySelector("nav");
            nav.classList.toggle("show-menu");
        }   
        
        function scrollToTalkSection(event) {
    event.preventDefault(); // Prevent default anchor behavior
    const talkSection = document.getElementById('talkSection');
    const offset = 100; // Adjust this value to scroll higher or lower
    const elementPosition = talkSection.getBoundingClientRect().top;
    const offsetPosition = elementPosition + window.pageYOffset - offset;

    window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth' // Smooth scroll to the section
    });
}
 

    </script>
</body>

</html>