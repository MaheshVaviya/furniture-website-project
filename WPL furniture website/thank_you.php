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
    <title>Thank You</title>
    <style>
        /* General Styles */
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f9f6f2; /* Light brown background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .thank-you-container {
            background-color: #fff; /* White background */
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Light shadow */
            max-width: 600px;
            width: 100%;
        }

        h1 {
            font-size: 40px;
            color: #4d3520; /* Dark brown text */
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #6f4b26; /* Medium brown text */
            margin-bottom: 30px;
        }

        .home-btn {
            background-color: #6f4b26; /* Darker brown button */
            color: #fff; /* White text */
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .home-btn:hover {
            background-color: #4d3520; /* Dark brown on hover */
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <h1>Thank You!</h1>
        <p>Your message has been successfully submitted. We will get back to you shortly.</p>
        <a href="index.php" class="home-btn">Return to Home</a>
    </div>
</body>
</html>