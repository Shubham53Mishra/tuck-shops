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

        /* Logo Styles */
        .logo img {
            height: 80px;
            margin-left: 90px;
        }

        /* Navigation Styles */
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
        }

        nav ul li a.btn-quote {
            background-color: black;
            color: yellow;
            padding: 10px 20px;
            border-radius: 5px;
        }

        nav ul li a:hover {
            background-color: black;
            color: white;
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
        }

        .talk-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .talk-info {
            flex: 1;
            margin-right: 20px;
        }

        .talk-info h1 {
            font-size: 2.5rem;
            color: #c49a00;
            margin-bottom: 20px;
        }

        .talk-info p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .talk-info img {
            width: 100%;
            height: auto;
            max-width: 400px;
            border-radius: 8px;
          
        }

        .contact-form {
            flex: 1;
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 250px; /* Added top margin */
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

        .footer {
            background-color: #f2e8d8;
            padding: 30px 20px;
            text-align: center;
            margin-top: 40px;
            width: 100%;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 50px;
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
    </style>
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="./image/MunchMart Logo.png" alt="THF Kitchens Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>   
                <li><a href="about.php">About Us</a></li>
                <li><a href="ContactUs.php">Contact Us</a></li>
                <li><a href="#" class="btn-quote">Get a Quote</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact-section">
        <h2>OUR ADDRESS</h2>
        <h3>WHERE YOU CAN FIND US</h3>
        <div class="underline"></div>

        <div class="contact-info">
            <div class="info-item">
                <div class="icon">&#128205;</div>
                <h4>OFFICE LOCATION</h4>
                <p>91 SpringBoard, C-2, Sector 1,<br>Noida</p>
            </div>
            <div class="info-item">
                <div class="icon">&#128222;</div>
                <h4>CALL US</h4>
                <p>+91 89291 12775</p>
            </div>
            <div class="info-item">
                <div class="icon">&#9993;</div>
                <h4>EMAIL ADDRESS</h4>
                <p>sales@cosmicbites.com</p>
            </div>
            <div class="info-item">
                <div class="icon">&#9200;</div>
                <h4>WORKING HOURS</h4>
                <p>Monday - Saturday 10 AM - 07 PM</p>
            </div>
        </div>

        <div class="talk-section">
            <div class="talk-info">
                <h1>Talk with THF Kitchens for 15 minutes</h1>
                <p>Learn how our popular amenity can help your team</p>
                <img src="image/contact-info.png" alt="Communication" class="contact-image">
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
            <div class="contacts-info">
                <p>We’re always happy to help.</p>
                <p>munchmart2024@gmail.com</p>
            </div>
        </div>
        <p>&copy; 2024 THF Kitchens. All rights reserved.</p>
    </div>
</body>

</html>
