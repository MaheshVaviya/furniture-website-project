<?php
session_start();
$logged_in = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Wood Art</title>
    <style>
        /* General Styles */
        * {
            font-family: 'Poppins', sans-serif;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f9f6f2; /* Lighter brown background */
        }

        /* Admin Icon Styles */
        .admin-icon {
            position: absolute;
            top: 20px; /* Adjust top position */
            right: 20px; /* Adjust right position */
            width: 50px; /* Adjust size as needed */
            height: 50px; /* Adjust size as needed */
            cursor: pointer;
            transition: transform 0.3s ease;
            border-radius: 40%;
            border: 2px solid black; 
            
        }

        .admin-icon:hover {
            transform: scale(1.1); /* Slightly enlarge on hover */
        }

        /* Navbar Styles */
        nav {
            height: 6rem;
            background: #4d3520;
            top: 0%;
            background-size: cover;
            background-blend-mode: darken;
            display: flex;
            position: sticky;
            z-index: 10;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.25);
        }

        .homee {
            margin-left: -40px;
        }

        /* Styling logo */
        .logo {
            width: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: -30px;
        }
        .logo img {
            width: 22%;
            border-radius: 50px;
            border: 3px solid #ffffff;
            transition: all 0.3s ease-in-out;
        }

        .s1 {
            color: black;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: none;
            margin-right: 0.5rem;
            margin-left: 230px;
            margin-right: -50px;
        }
        .s2 {
            background-color: #fff;
            color: #333;
            border: none;
            padding: 0.5rem 0.8rem;
            border-radius: 0.25rem;
            font-weight: bold;
            text-transform: uppercase;
            margin-right: -55px;
        }
        .s2:hover {
            background-color: #eee;
        }

        /* Styling Links */
        .nav-links {
            display: flex;
            list-style: none;
            width: 88vw;
            padding: 0 0.7vw;
            justify-content: space-evenly;
            align-items: center;
        }
        nav a {
            color: white;
            font-size: 22px;
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
            font-weight: 999;
            letter-spacing: 1px;
            padding: 15px 12px;
            transition: all 0.3s ease-in-out;
            position: relative;
            overflow: hidden;
            display: inline-block;
            transition: transform 0.3s ease-in-out;
        }
        nav a:hover {
            color: black;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-3px);
        }
        nav a:active {
            color: black;
            background-color: #f9f6f2;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(0px) scale(0.95);
        }

        /* Hamburger Menu */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        .hamburger div {
            width: 30px;
            height: 3px;
            background: #f2f5f7;
            margin: 5px;
            transition: all 0.3s ease;
        }

        /* Contact Section Styles */
        .contact-section {
            text-align: center;
            padding: 50px 20px;
            margin: 0 auto;
            max-width: 800px; /* Center the form and limit its width */
            position: relative; /* Required for absolute positioning of the icon */
        }

        .section-title {
            font-size: 40px;
            margin-top: -17px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 30px;
            color: #4d3520; /* Dark brown title */
        }

        .contact-form {
            background-color: #fff; /* White form background */
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #999; /* Light gray shadow */
        }

        .form-group {
            margin-bottom: 30px;
        }

        .input-css {
            width: calc(100% - 20px);
            padding: 15px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc; /* Light gray border */
        }

        .input-css:focus {
            outline: none;
            border-color: #d9b384; /* Dark brown border color on focus */
        }

        .submit-btn {
            background-color: #6f4b26; /* Darker brown button background */
            color: #fff; /* White button text */
            border: none;
            padding: 15px 30px;
            width: 100%;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #4d3520; /* Dark brown button background on hover */
        }

        /* Footer Styles */
        footer {
            margin: 0;
        }
        .text-footer {
            background-color: #2b1c10;
            text-align: center;
            padding: 30px 0;
            font-weight: 300;
            display: flex;
            justify-content: center;
            color: rgb(255, 255, 255);
        }

        /* Responsive Styles */
        @media screen and (max-width: 1470px) {
            .hamburger {
                display: block;
            }
            .nav-links {
                position: fixed;
                background: #131418;
                height: 100vh;
                width: 100%;
                flex-direction: column;
                clip-path: circle(50px at 90% -20%);
                -webkit-clip-path: circle(50px at 90% -10%);
                transition: all 1s ease-out;
                pointer-events: none;
            }
            .nav-links.open {
                clip-path: circle(2000px at 90% -10%);
                -webkit-clip-path: circle(2000px at 90% -10%);
                pointer-events: all;
            }
        }
    </style>
</head>
<body>
    <nav>
        <li class="logo">
            <img src="img/img.jpg" alt="Logo Image">
        </li>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li class="homee"><a class="homee" href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li class="conc"><a href="contact.php">Contact Us</a></li>
            <li><input type="text" name="search" class="s1"></li>
            <li><button class="s2"> Search  </button></li>
        </ul>
    </nav>
    <script>
        const hamburger = document.querySelector(".hamburger");
        const navLinks = document.querySelector(".nav-links");
        const links = document.querySelectorAll(".nav-links li");

        hamburger.addEventListener('click', () => {
            // Animate Links
            navLinks.classList.toggle("open");
            links.forEach(link => {
                link.classList.toggle("fade");
            });

            // Hamburger Animation
            hamburger.classList.toggle("toggle");
        });
    </script>

    <section class="contact-section">
        <!-- Admin Icon -->
        <a href="admin-view/contact-table.php">
            <img src="img/adminicon.jpg" alt="Admin Icon" class="admin-icon" >
        </a>

        <h2 class="section-title">Contact Us</h2>
        <form class="contact-form" action="submit_contact.php" method="POST">
            <div class="form-group">
                <input class="input-css" type="text" name="name" id="name" placeholder="Enter Your Name" required><br>
            </div>
            <div class="form-group">
                <input class="input-css" type="text" name="phone" id="phone" placeholder="Enter Your Phone No." required><br>
            </div>
            <div class="form-group">
                <input class="input-css" type="email" name="email" placeholder="Enter Your Email" id="email" required><br>
            </div>
            <div class="form-group">
                <textarea class="input-css" cols="30" rows="10" name="message" placeholder="Elaborate your Concern"></textarea><br>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </section>

    <footer>
        <p class="text-footer">
            &copy; 2027 - All rights reserved by MMK co-op
        </p>
    </footer>
</body>
</html>