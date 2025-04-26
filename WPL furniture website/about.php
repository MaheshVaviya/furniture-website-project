<?php
session_start();
$logged_in = isset($_SESSION['user_id']);
?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">


    <title>Wood Art</title>
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
    *{
margin: 0;
padding: 0;
font-family: 'Poppins', sans-serif;
            font-weight: 400; /* Normal */

/* color: #f2f5f7; */
/* font-family: sans-serif;
letter-spacing: 1px;
font-weight: 300; */
}
body{
    background-color: #f5f3e98b;
}
nav{
height: 6rem;
top: 0%;
background: #4d3520;
background-size: cover;
background-blend-mode:darken;
box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.25);
font-family: 'Poppins', sans-serif;
            font-weight: 400; /* Normal */


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
justify-content: space-evenly;
align-items: center;
font-family: 'Poppins', sans-serif;
            font-weight: 400; /* Normal */


/* text-transform: uppercase; */





}
nav a {
color: white;
font-size: 22px;
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
        text-align: justify;;
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
.logo{
    margin-left: 0;
}
#myBtn{
    width: 100%;
}
#myBtn1{
    width: 100%;
}
#myBtn2{
    width: 100%;
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

</style>




<section class="">
        <br>
    <section class="section" id="services">
        <div class="paras">
        <p class="sectionTag text-big" id="j1">The end of your search is here</p>

        <p class="sectionSubTag text-small">A home with furniture not only completes the home, but it covers major space and a crucial part of interior design. So make sure to choose the right furniture that fits the space and provides warmth in the house.<span id="dots" class="sectionSubTag text-small">...</span><span id="more" > When you reach home after a hectic daily routine, the furniture at home eliminates your pain and gives you mental satisfaction.
        </span></p>

        <button onclick="myFunction()" id="myBtn" class="custom-btn  btn-15" >Read more</button>
<style>
    #more {display: none;}

    

    #myBtn{
        display: inline-block;
    margin-top: 0.9rem;
    border: 2px solid #4d3520;
    color: #4d3520;
    padding: 10px 15px;
    font-size: 20px;
    background: transparent;
    border-radius: 4px;
    cursor: pointer;
    font-weight: 100;
}

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    -webkit-transition: .2s linear;
    transition: .2s linear;
}

#myBtn:hover {
  background: #4d3520;
  color: white;
}
#myBtn:active {
  background: #4d3520;
  color: white;
}




</style>
<script>
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerphp = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerphp = "Read less";
    moreText.style.display = "inline";
  }
}

</script>

    
   
    </div>
        <div class="thumbnail">
            <img src="img/fur3.jpg" alt="Laptop Image" class="imgFluid">
        </div>
    </section>
    <br>



        <section class="section section-left" id="about">
            <div class="paras">
            <p class="sectionTag text-big" id="j3">A home with Furniture...</p>

        <p class="sectionSubTag text-small">Your Home Is Supposed To Be Solace And Contributes A Healthier Lifestyle, Both Mentally And Physically.<span id="dots1" class="sectionSubTag text-small">...</span><span id="more1" >  We Know That We Need Furniture For Our Comfortable Lives, For Storage, Sitting On And, For Relaxation.
        </span></p>
        <button onclick="myFunction1()" id="myBtn1">Read more</button>

        <style>
            #more1 {display: none;}
            #myBtn1{
        display: inline-block;
    margin-top: 0.9rem;
    border: 2px solid #4d3520;
    color: #4d3520;
    padding: 10px 15px;
    font-size: 20px;
    background: transparent;
    border-radius: 4px;
    cursor: pointer;
    font-weight: 100;
}

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    -webkit-transition: .2s linear;
    transition: .2s linear;
}

#myBtn1:hover {
  background: #4d3520;
  color: white;
}
#myBtn1:active {
  background: #4d3520;
  color: white;
}

        
        </style>
        <script>
            function myFunction1() {
          var dots1 = document.getElementById("dots1");
          var moreText = document.getElementById("more1");
          var btnText = document.getElementById("myBtn1");
        
          if (dots1.style.display === "none") {
            dots1.style.display = "inline";
            btnText.innerphp = "Read more";
            moreText.style.display = "none";
          } else {
            dots1.style.display = "none";
            btnText.innerphp = "Read less";
            moreText.style.display = "inline";
          }
        }
        
        </script>
        




        </div>
            <div class="thumbnail">
                <img src="img/fur2.jpg" alt="Laptop Image" class="imgFluid">
            </div>
        </section>
        <br>
    
        

        
    <section class="section">
        <div class="paras">
        <p class="sectionTag text-big" id="j5">Furniture is an important part of comfort</p>
        
        <p class="sectionSubTag text-small">Furniture is the first piece of attraction, where everyone wants to sit comfortably and feel relaxed. Choosing the right furniture for office, school, or home is not only decorates but it also overall impacts on our physical and mental comfort.<span id="dots2" class="sectionSubTag text-small">...</span><span id="more2" >  In-office employees need to feel stimulated while working, In-home, everyone needs a peaceful place to relax, and in school, students sit comfortably to concentrate on their studies. Now you can find out how furniture is important in our lives and how it connects to our day to day needs.


        </span></p>
        <button onclick="myFunction2()" id="myBtn2">Read more</button>

        <style>
            #more2{display: none;}
            #myBtn2{
        display: inline-block;
    margin-top: 0.9rem;
    border: 2px solid #4d3520;
    color: #4d3520;
    padding: 10px 15px;
    font-size: 20px;
    background: transparent;
    border-radius: 4px;
    cursor: pointer;
    font-weight: 100;
}

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    -webkit-transition: .2s linear;
    transition: .2s linear;
}

#myBtn2:hover {
  background: #4d3520;
  color: white;
}
#myBtn2:active {
  background: #4d3520;
  color: white;
}



        </style>
        <script>
            function myFunction2() {
          var dots2 = document.getElementById("dots2");
          var moreText = document.getElementById("more2");
          var btnText = document.getElementById("myBtn2");
        
          if (dots2.style.display === "none") {
            dots2.style.display = "inline";
            btnText.innerphp = "Read more";
            moreText.style.display = "none";
          } else {
            dots2.style.display = "none";
            btnText.innerphp = "Read less";
            moreText.style.display = "inline";
          }
        }
        
        </script>
    </div>


        <div class="thumbnail">
            <img src="img/fur1.jpg" alt="Laptop Image" class="imgFluid">
        </div>
    </section>
    <br><br><br><br>
    </section>


    <footer class="background-f">
        <p class="text-footer">
            &copy; 2027 - All rights reserved by MMK co-op     </p>
    </footer>
    <script src="js/resp.js"></script>

    
</body>
</php>