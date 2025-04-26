<?php
session_start();
$logged_in = isset($_SESSION['user_id']);
?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">



    <title>Wood Art</title>
</head>
<body>
<div class="preload-images">
    <img src="img/background1.jpg" >
    <img src="img/background2.jpg" >
    <img src="img/background3.jpg" >
    <img src="img/background4.jpg" >
    <img src="img/background5.jpg" >
    <img src="img/background6.jpg" >
</div>

    <section class="background firstSection">
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
    
    <div class="search-login-container">
        <li><input type="text" name="search" class="s1" placeholder="Search..."></li>
        <li><button class="s2">Search</button></li>
        <?php if ($logged_in): ?>
            <li><a href="logout.php" class="logout-btn-nav">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php" class="login-btn-nav">Login</a></li>
        <?php endif; ?>
    </div>
</ul>
        
    </nav>
    <script>
        const hamburger = document.querySelector(".hamburger");
    const navLinks = document.querySelector(".nav-links");
    const links = document.querySelectorAll(".nav-links li");
    
    hamburger.addEventListener('click', ()=>{
    //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });
    
    //     //Hamburger Animation
    hamburger.classList.toggle("toggle");
    });
    
    </script>
    
    <style>
    
/* ppppppppppppppppppppppppppppp */

.logout-popup {
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #4d3520; /* Your brown color */
    color: white;
    padding: 15px 25px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    z-index: 1000;
    animation: slideIn 0.5s, fadeOut 0.5s 2.5s forwards;
    display: flex;
    align-items: center;
}

.logout-popup::before {
    content: "✓";
    margin-right: 10px;
    font-weight: bold;
}

@keyframes slideIn {
    from { transform: translateX(100%); }
    to { transform: translateX(0); }
}

@keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}
/* ppppppppppppppppppppppppppppp */

        *{
            font-family: 'Poppins', sans-serif;
            font-weight: 400; /* Normal */

    margin: 0;
    padding: 0;
    }
    
    nav{
        height: 86px;
        font-weight: 999; /* Normal */

        /* background: rgba(0, 0, 0, 0.65); */

    background: #422d0b;
  background-size: cover;
  background-blend-mode: darken;
  box-shadow: 0px 2px 6px rgba(26, 25, 25, 0.2);

top: 0%;
background-size: cover;
background-blend-mode:darken ;
  display: flex;
  position: sticky;
  z-index: 10;
  }
    
    
    .homee{
    margin-left: -40px;
    }
    
    /*Styling logo*/
    .logo{
    width:20%;
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
    /* margin-right: -70px; */
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
    
    
    
      
    
    
    
    
    /*Styling Links*/
    .nav-links{
    display: flex;
    list-style: none; 
    width: 88vw;
    padding: 0 0.7vw;
    font-weight: 999; /* Normal */

    justify-content: space-evenly;
    align-items: center;
    
    /* text-transform: uppercase; */
    
    
    
    
    
    }
    nav a {
    color: white;
    font-size: 22px;
    /* font-family:  sans-serif; */
    text-decoration: none;
    font-weight:999;
    letter-spacing: 1px;
    padding: 15px 12px;
    transition: all 0.3s ease-in-out;
    position: relative;
    overflow: hidden;
    display: inline-block;
    transition: transform 0.3s ease-in-out;
    /* border-radius: 10px; */
    
    /* animation: glow 1s ease-in-out infinite alternate; */
    
    }
    
    nav a:before {
    content: "";
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    height: 2px;
    /* background-color: #333333; */
    transform: translateY(-100%);
    transition: transform 0.3s ease-in-out;
    }
    
    nav a:hover:before {
    transform: translateY(0%);
    }
    
    nav a:hover {
    color: black;
    background-color: #f9f6f2;
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
    nav a:hover:before {
    background-color: transparent;
    }
    
    nav a:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: transparent;
    transform:  scaleX(0);
    transform-origin: left;
    transition: transform 0.3s ease-in-out;
    }
    
    nav a:hover:after {
    transform:  scaleX(1);
    }
    
    nav a:hover:before,
    nav a:hover:after {
    animation: float 0.5s ease-in-out infinite alternate;
    }
    
    @keyframes float {
    from {
    transform: translateY(0);
    }
    to {
    transform: translateY(-5px);
    }
    }
    
    /* Glowing animation */
    nav a:hover {
    animation: glow 1s ease-in-out infinite alternate;
    }
    
    @keyframes glow {
    from {
        box-shadow: 0 0 5px 0 #f9f6f2;
      }
      to {
        box-shadow: 0 0 20px 5px #f9f6f2;
      }  
  }     
    .hamburger div{
    width: 30px;
    height:3px;
    background: #f2f5f7;
    margin: 5px;
    transition: all 0.3s ease;
    }
    .hamburger{
    display: none;
    }
    
    /*Stying for small screens*/
    @media screen and (max-width: 1000px){
        .rightNav{
            text-align: center;
            height: fit-content;
        }
            .loglo {
                max-width: 40%;
              }
        
        .box-main{
            flex-direction: column-reverse;
            max-width: 100%;
        }
        
        .section{
            flex-direction: column-reverse;
        }
        .text-small{
            text-align: center;
        }
        .text-big{
            text-align: center;
        }
        .buttons{
            text-align: center;
        }
        .paras{
            padding: 0px ;
        }
        nav{
            z-index: 3;
        }
    }
    @media screen and (max-width: 1470px){
        /* .rightNav{
            text-align: center;
            height: fit-content;
        }
            .loglo {
                max-width: 40%;
              }
        
        .box-main{
            flex-direction: column-reverse;
            max-width: 100%;
        }
        
        .section{
            flex-direction: column-reverse;
        }
        .text-small{
            text-align: center;
        }
        .text-big{
            text-align: center;
        }
        .buttons{
            text-align: center;
        }
        .paras{
            padding: 0px ;
        } */
        nav{
            z-index: 3;
        }
        .hamburger{
            display:block;
            position: absolute;
            cursor: pointer;
            right: 5%;
            top: 50%;
            transform: translate(-5%, -50%);
            z-index: 2;
            transition: all 0.7s ease;
        }

/* 
        hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh */
        .search-login-container {
    flex-direction: column;
    width: 100%;
    padding: 0;
    gap: 10px;
    margin-top: 20px;
}

.search-login-container li {
    width: 100%;
}

.s1, .s2, .login-btn-nav, .logout-btn-nav {
    width: 100%;
    text-align: center;
}

/* Update transition delays for new structure */
.nav-links li:nth-child(5) { transition: all 0.5s ease 0.9s; } /* Search input */
.nav-links li:nth-child(6) { transition: all 0.5s ease 1s; }   /* Search button */
.nav-links li:nth-child(7) { transition: all 0.5s ease 1.1s; } /* Login/Logout */

/* hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh */




    .logo{
        margin-left: 0;
    }
    .s1{
        margin-left: 0;
        margin-right: 0;
    }
    .s2{
        margin-right: 0;
    }
    .homee{
        margin-left: 0;
    }
        .nav-links{
        position: fixed;
        background: #131418;
        height: 100vh;
        width: 100%;
        flex-direction: column;
        clip-path: circle(50px at 90% -20%);
        -webkit-clip-path: circle(50px at 90% -10%);
        transition: all 1s ease-out;
        pointer-events: none;
        display: flex;
        align-items: center; 
        flex-direction: column; 
        }
        .nav-links.open{
            clip-path: circle(2000px at 90% -10%);
            pointer-events: all;
        }
        .nav-links li{
            opacity: 0;
        }
        .nav-links li:nth-child(1){
            transition: all 0.5s ease 0.2s;
        }
        .nav-links li:nth-child(2){
            transition: all 0.5s ease 0.4s;
        }
        .nav-links li:nth-child(3){
            transition: all 0.5s ease 0.6s;
        }
        .nav-links li:nth-child(4){
            transition: all 0.5s ease 0.7s;
        }
        .nav-links li:nth-child(5){
            transition: all 0.5s ease 0.8s;
        }
        .nav-links li:nth-child(6){
            transition: all 0.5s ease 0.9s;
            margin: 0;
        }
        .nav-links li:nth-child(7){
            transition: all 0.5s ease 1s;
            margin: 0;
        }
        li.fade{
            opacity: 1;
        }
    }
    .toggle .line1{
        transform: rotate(-45deg) translate(-5px,6px);
    }
    .toggle .line2{
        transition: all 0.7s ease;
        width:0;
    }
    .toggle .line3{
        transform: rotate(45deg) translate(-5px,-6px);
    }
    


    /* hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh */
    /* Improved Search and Login Container */
.search-login-container {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-left: auto; /* Pushes to the right */
    padding-right: 30px;
}

/* Search Input */
.s1 {
    color: black;
    padding: 10px 15px;
    border-radius: 8px;
    border: 2px solid #d9b384;
    width: 200px;
    transition: all 0.3s ease;
    margin: 0; /* Reset previous margins */
}

.s1:focus {
    outline: none;
    border-color: #6f4b26;
    box-shadow: 0 0 0 3px rgba(111, 75, 38, 0.2);
}

/* Search Button */
.s2 {
    background-color:#f5f5f5;
    color: #4d3520;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
    margin: 0; /* Reset previous margins */
}

.s2:hover {
    background-color:rgb(202, 202, 202);
    transform: translateY(-2px);
}

/* Login/Logout Buttons */
.login-btn-nav, .logout-btn-nav {
    background-color: #6f4b26;
    color: white !important;
    padding: 10px 25px;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    border: 2px solid #4d3520;
    text-decoration: none !important;
    display: inline-block;
}

.login-btn-nav:hover, .logout-btn-nav:hover {
    background-color: #4d3520;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.logout-btn-nav {
    background-color: #d9534f;
    border-color: #c12e2a;
}

.logout-btn-nav:hover {
    background-color: #c12e2a;
}
/* hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh */


    </style>
    
       

    


    <!-- <br><br><br> -->

    <div class="box-main">
        <div class="firstHalf">
            <p class="text-bbig">The End of your Search is here</p>
            <p class="text-ssmall">Furniture is the first piece of attraction, where everyone wants to sit comfortably and feel relaxed.</p>
                <div class="buttons">
                    <a href="about.php"><button class="transparent-btn">Info </button></a>&nbsp;
                    <a href="services.php"><button class="transparent-btn">Buy</button></a>

                </div>
        </div>


        <!-- <div class="secondHalf"> -->
        <div class="loglo">
            <img src="img/img.jpg" alt="Laptop Image">
        </div>
    </div>
</section>


<footer class="background-f">
<p class="text-footer">
    &copy; 2027 - All rights reserved by MMK co-op 
</p>
</footer>
<script>
document.addEventListener('DOMContentLoaded', function() {
    <?php if (isset($_SESSION['logout_success'])): ?>
        setTimeout(function() {
            alert('Logged out successfully!');
        }, 300);
        <?php unset($_SESSION['logout_success']); ?>
    <?php endif; ?>
});
</script>
</body>

</php>
