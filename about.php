<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THF Kitchens & Bhushan Ingle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
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
            display: none;
            /* Hidden by default, shown in mobile */
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
            color: #333;
            font-size: 16px;
            padding: 10px;
            transition: background-color 0.3s, color 0.3s;
        }

        nav ul li a:hover {
            background-color: black;
            color: white;
        }

        nav ul li a.btn-quote {
            background-color: black;
            color: yellow;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-quote:hover {
            background-color: black;
            color: white;
        }

        /* General Styles */
        .container,
        .section {
            max-width: 1000px;
            margin: 0 auto;
            padding: 50px;
        }

        h1,
        h2 {
            color: black;
        }

        p {
            font-size: 18px;
            color: #666;
        }

        .underline {
            width: 80px;
            height: 4px;
            background-color: yellow;
            margin: 10px auto 30px;
        }

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            padding: 50px 0;
        }

        .text-content {
            max-width: 50%;
            padding: 20px;
        }

        .chef-image {
            max-width: 50%;
            padding: 20px;
        }

        .chef-image img {
            max-width: 100%;
            height: auto;
        }

        /* About Section */
        .about-section {
            background-color: #f5f5f5;
            text-align: center;
        }

        /* Geographic Reach Section */
        .geo-section {
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .geo-text {
            flex: 1;
            padding: 20px;
            text-align: center;
        }

        .geo-image {
            flex: 1;
            padding: 20px;
            margin-right: 40px;
        }

        .geo-image img {
            max-width: 250px;
            height: auto;
        }

        /* Founder Section */
        .founder-section {
            background-color: #f8f8f8;
            padding: 50px;
        }

        .profile {
            display: flex;
            align-items: center;
        }

        .profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ccc;
            margin-right: 20px;
        }

        hr {
            border: none;
            height: 1px;
            background-color: yellow;
            margin: 20px 0;
        }

        /* Features Section */
        .features {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            flex-wrap: wrap;
        }

        .feature-box {
            background-color: white;
            padding: 30px;
            margin: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            flex: 1 1 30%;
            min-width: 280px;
            text-align: center;
            transition: transform 0.3s ease;
            border: 1px solid #e0e0e0;
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .feature-box h2 {
            color: black;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .feature-box p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
        }

        /* Footer Section */
        .footer {
            background-color: #f2e8d8;
            padding: 30px 20px;
            text-align: center;
            margin-top: 40px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
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
            color: black;
            font-size: 24px;
        }

        .contact-info {
            text-align: center;
        }

        .contact-info p {
            margin: 0;
            font-size: 15px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                padding: 10px 20px;
            }

            .logo img {
                height: 60px;
                margin: 0 auto;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
                align-items: center;
            }

            .btn-quote {
                padding: 8px 16px;
            }

            .hero {
                flex-direction: column;
                text-align: center;
            }

            .chef-image,
            .text-content {
                max-width: 100%;
                padding: 10px;
            }

            .geo-section {
                flex-direction: column;
            }

            .geo-image img {
                max-width: 100%;
                margin: 0 auto;
            }

            .features {
                flex-direction: column;
            }

            .feature-box {
                max-width: 90%;
                margin: 10px auto;
            }

            .footer-content {
                flex-direction: column;
                align-items: center;
            }

            .logo-section img {
                max-width: 80px;
            }

            .social-icons a {
                font-size: 20px;
            }

            .contact-info p {
                font-size: 14px;
                margin-right: 0;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 10px;
                display: flex;
                justify-content: space-between;
                /* Keep toggle button on the right */
                align-items: center;
                position: relative;
                /* To allow positioning of elements */
            }

            .logo {
                display: flex;
                /* Use flex to center */
                justify-content: center;
                /* Center the logo */
                flex: 1;
                /* Allow the logo to take up space */
            }

            .logo img {
                height: 50px;
                margin: 0;
                /* Remove margin */
            }

            .menu-toggle {
                display: inline-block;
                position: absolute;
                /* Position the button absolutely */
                right: 10px;
                /* Position on the right */
                top: 10px;
                /* Adjust vertical position */
            }

            /* Navigation styles remain the same */
            nav ul {
                display: none;
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            nav.show-menu ul {
                display: flex;
            }

            nav ul li a {
                font-size: 14px;
                padding: 8px;
            }

            .btn-quote {
                padding: 6px 12px;
                font-size: 14px;
            }

            .hero {
                flex-direction: column;
                text-align: center;
            }

            .chef-image {
                max-width: 100%;
                display: flex;
                justify-content: center;
                /* Center the image */
                padding: 10px;
            }

            .chef-image img {
                max-width: 80%;
                /* Adjust size if needed */
                height: auto;
            }


            h1 {
                font-size: 24px;
            }

            h2 {
                font-size: 20px;
            }

            p {
                font-size: 16px;
            }

            .container,
            .section,
            .about-section,
            .geo-section,
            .footer {
                text-align: center;
                /* Center text */
                padding: 10px;
                /* Adjust padding if needed */
                margin: 0 auto;
                /* Center the sections */
            }

            .text-content {
                max-width: 100%;
                /* Full width */
                padding: 10px;
                /* Adjust padding */
            }

            .geo-section {
                flex-direction: column;
                /* Stack elements */
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


        /* Additional Media Query for 320px */
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

            .hero {
                flex-direction: column;
                text-align: center;
            }

            .chef-image {
                max-width: 100%;
                display: flex;
                justify-content: center;
                /* Center the image */
                padding: 8px;
                /* Adjust padding if needed */
            }

            .chef-image img {
                max-width: 70%;
                /* Further adjust size if needed */
                height: auto;
            }

            .features {
                flex-direction: column;
                /* Stack features */
            }

            .feature-box {
                margin: 5px auto;
                /* Reduce margin between feature boxes */
                padding: 20px;
                /* Reduce padding */
            }

            h1 {
                font-size: 20px;
                /* Smaller heading size */
            }

            h2 {
                font-size: 18px;
                /* Smaller subheading size */
            }

            p {
                font-size: 14px;
                /* Smaller paragraph size */
            }

            .container,
            .section,
            .about-section,
            .geo-section,
            .footer {
                text-align: center;
                /* Center text */
                padding: 8px;
                /* Adjust padding for smaller screens */
                margin: 0 auto;
                /* Center the sections */
            }

            .text-content {
                max-width: 100%;
                /* Full width */
                padding: 8px;
                /* Adjust padding */
            }

            .geo-section {
                flex-direction: column;
                /* Stack elements */
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
    </style>

</head>

<body>
    <header>
        <div class="logo">
            <img src="./image/MunchMart Logo.png" alt="THF Kitchens Logo">
        </div>
        <button class="menu-toggle" style="position: absolute; right: 10px; top: 10px;" onclick="toggleMenu()">☰</button> <!-- Toggle Button for Mobile View -->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="ContactUs.php">Contact Us</a></li>
                <li><a href="#" class="btn-quote">Get a Quote</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section with Chef Image and Text -->
    <div class="hero">
        <div class="chef-image">
            <img src="./image/shop.png" alt="Chef Image" style="width: 70%; margin-left: 120px;">

        </div>
        <div class="text-content">
            <h1>Discover the delight flavours of MunchMart </h1>
            <hr>
            <p>A team of dining experts dedicated to enhancing your workplace meals.</p>
        </div>
    </div>

    <!-- About Section -->
    <div class="section about-section">
        <h2>About THF Kitchens</h2>
        <div class="underline"></div>
        <p>MunchMart is a trusted name in corporate food solutions, dedicated to enhancing the workplace experience through quality and convenience. our focus is on delivering fresh, delicious food with meticulous attention to presentation.

            With a diverse, freshly prepared menu crafted daily, MunchMart brings creativity and quality to every item we serve. We’re committed to hygiene, visual appeal, and unparalleled taste, fulfilling our clients’ diverse needs with professionalism and passion for exceptional workplace dining experiences.</p>
    </div>

    <!-- Geographic Reach Section -->
    <div class="section geo-section">
        <div class="geo-image">
            <img src="./image/about-us-02.png" alt="Geographic Reach Image">
        </div>
        <div class="geo-text">
            <h2>Geographic Reach</h2>
            <hr>
            <p>Currently, we operate in the vibrant corporate landscapes of Gurgaon, Delhi, and Noida, serving esteemed organizations across these key business hubs. With over 18 tuck shops running across multiple offices.
            <p>we are dedicated to transforming corporate dining through technology, culinary expertise, and exceptional service, setting the standard for workplace dining in the region.</p>
            </p>
        </div>
    </div>



    <!-- Features Section -->
    <div class="container">
        <div class="features">
            <div class="feature-box">
                <h2>Food Innovation</h2>
                <hr>
                <p>Our recipes embody the peak of culinary creativity, crafted by our top chefs who continually push the boundaries of flavor and technique. Every day, they blend their expertise with inventive practices, ensuring each dish is a unique experience.</p>
            </div>
            <div class="feature-box">
                <h2>Tasty Flavours</h2>
                <hr>
                <p>Food goes beyond just satisfying your appetite; it should revitalize and inspire you. Our menu is carefully curated to awaken your senses, featuring flavors that make a memorable impact and add a splash of energy to your day, right in the workplace.</p>
            </div>
            <div class="feature-box">
                <h2>Perfect Planners</h2>
                <hr>
                <p>While you focus on hosting, we take care of the cuisine. Our dedicated team ensures every detail is handled seamlessly, crafting a dining experience that leaves a lasting impression on your corporate gatherings.</p>
            </div>
        </div>
    </div>

    <!-- Footer Section with Social Media and Contact Info -->
    <!-- Footer Section with Logo, Social Media, and Contact Info -->
    <div class="footer">
        <div class="footer-content">
            <div class="logo-section">
                <img src="image/MunchMart Logo.png" alt="THF Kitchens Logo" style="max-width: 100px;"> <!-- Adjust the max-width as needed -->
            </div>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="contact-info">
                <p>We’re always happy to help.</p>
                <p>munchmart2024@gmail.com</p>
            </div>
        </div>
        <p style="font-size: 16px;">&copy; 2024 Ridobiko Solutions Private Limited.All rights reserved.</p>
    </div>
    <script>
        function toggleMenu() {
            const nav = document.querySelector('nav');
            nav.classList.toggle('show-menu');
        }
    </script>


</body>

</html>