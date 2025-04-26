<?php
session_start();
$logged_in = isset($_SESSION['user_id']);
?>

<php>


    <link rel="stylesheet" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">




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

    }

nav{
  height: 6rem;
  
    /* background: linear-gradient(#054c54,rgb(0, 0, 0)); */
    /* background-color: rgba(10, 8, 63, 0.8); */
    /* background: url("https://s3.envato.com/files/271918055/IMG_1900.JPG"); */
background:#4d3520 ;
    background-size: cover;
    background-blend-mode: darken;

top: 0%;
background-size: cover;
background-blend-mode:darken ;
    display: flex;
    position: sticky;
    z-index: 10;
}

/* nav {
  height: 6rem;
  display: flex;
  justify-content: space-between;
  background: #232323d9;
  position: sticky;
  top: 0;
  z-index: 10;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
} */
/* 
nav a {
  color: #fff;
  font-weight: bold;
  font-size: 1.2rem;
  margin: 0 1rem;
  line-height: 4rem;
} */

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

    /* text-transform: uppercase; */

 
  


}
nav a {
  color: white;
  font-size: 22px;
  font-family: 'Poppins', sans-serif;
            font-weight: 400; /* Normal */
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
@media screen and (max-width: 1470px){
    nav{
        /* position: sticky; */
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
    .navbar{
        height: 456px;
        flex-direction: column;
        transition: all 0.7s ease-out ;
    }
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
    
    #search{
    width: 100%;
    margin-bottom: 10px;
    }
    .burger{
        display: block;
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
    .text-vbig{
        font-size: 40px;
    }
    .thumpnail{
        align-items: center;
    }
    .text-big1{
        text-align: center;
    }
    .buttons{
        text-align: center;
    }
    .paras{
        padding: 0px ;
    
    
    }
.logo{
    margin-left: 0;
    /* width: max-content; */
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
  /* justify-content: center; */
  align-items: center; 
  flex-direction: column; 



    }
    .nav-links.open{
        clip-path: circle(2000px at 90% -10%);
        -webkit-clip-path: circle(2000px at 90% -10%);
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
/*Animating Hamburger Icon on Click*/
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
    
    <style>
        * {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: 'Poppins', sans-serif;
            font-weight: 400; /* Normal */
 }
 
 body {
   margin: 0;
   padding: 0;
 }
 
 .container {
   
 
   /* max-width: 1200px;
             margin: 0 auto;
             padding: 20px;
             display: flex;
             flex-wrap: wrap;
             justify-content: center; */
 
             
   max-width: 1200px;
   margin: 0 auto;
   padding: 20px;
   display: flex;
   flex-wrap: wrap;
   justify-content: center;
 }
 
 
 
 
 
 /* Card Styles */
 .card {
 
 
     width: 300px;
     margin: 20px;
     background-color: #fff;
             box-shadow: 0 2px 6px rgba(0,0,0,0.15);
             border-radius: 5px;
             overflow: hidden;
             transition: transform 0.3s ease-in-out;
             display: flex;
             flex-direction: column;
 }
 /* .card:hover{
  transform: translateY(-5px) ;
 } */
 .card-img {
  width: 100%;
  box-sizing: border-box;
  height: 250px;
  object-fit: cover;
  overflow: hidden;
  transition: all 0.5s ease-in-out;
  transform: scale(1.14); /* Increase the size to 120% of the original */
  transform-origin: center center; /* Set the transform origin to the center of the image */
}

.card-img:hover {
  transform: scale(1); /* Scale the image down to 110% of its original size on hover */
}

.card-img:active {
  transform: scale(1); /* Restore the original size on click */
}

 
 .card-body {
   padding: 20px;
 }
 
 .card-title {
   margin-top: 0;
   margin-bottom: 10px;
   font-family: 'Poppins', sans-serif;
            font-weight: 400; /* Normal */
   font-weight: 700;
   font-size: 22px;
 }
 
 .rating {
   display: flex;
   flex-direction: row-reverse;
   justify-content: flex-end;
   align-items: center;
   margin-bottom: 10px;
 }
 
 .rating input {
   display: none;
 }
 
 .rating label {
   font-size: 24px;
   color: #ccc;
   cursor: pointer;
 }
 
 .rating label:hover,
 .rating label:hover ~ label,
 .rating input:checked ~ label {
   color: #ffc107;
 }
 
 .description {
   margin-bottom: 10px;
   color: #4b4646da;
   font-size: 16px;
 }
 .backg{
    background-color: #f9f6f2;

 }
 .pro{
  width: 300px;
  height: 250px;
  overflow: hidden;
 }
 
 .price {
   margin: 0;
   font-size: 20px;
   font-weight: bold;
 }
 
 .shipping {
   margin: 0;
   font-size: 14px;
   color: #007bff;
 }
 
 .availability {
   margin: 0;
   font-size: 14px;
   color: green;
 }
 
 .btn {
   margin-top: 10px;
   padding: 10px 20px;
   width:100%;
   background: #2fb636;
   color: white;
   border: none;
   border-radius: 2px;
   transition: all 0.24s ease-in-out;
   cursor: pointer;
 }
 
 .btn:hover {
   background-color: #000000;
 }
 

 
 
     </style>
 
 <section class="backg">
    <br><br>
     <div class="container">
 
 
         <div class="card">
          <section class="pro">
           <a href="img/Dinning Table.jpeg"><img src="img/Dinning Table.jpeg" alt="Wooden Sofa Set" class="card-img"></a>
          </section>
           <div class="card-body">
             <h3 class="card-title">Dining Table</h3>
             <div class="rating">
               <input type="radio" name="rating1" value="5" id="5-stars1">
               <label for="5-stars1">&#9733;</label>
               <input type="radio" name="rating1" value="4" id="4-stars1">
               <label for="4-stars1">&#9733;</label>
               <input type="radio" name="rating1" value="3" id="3-stars1">
               <label for="3-stars1">&#9733;</label>
               <input type="radio" name="rating1" value="2" id="2-stars1">
               <label for="2-stars1">&#9733;</label>
               <input type="radio" name="rating1" value="1" id="1-star1">
               <label for="1-star1">&#9733;</label>
             </div>
             <p class="card-text description">Stylish and durable dining tables that elevate your dining experience. Choose from our selection of high-quality designs.</p>
             <p class="card-text price">₹23,999</p>
             <p class="card-text shipping">Free Shipping</p>
             <p class="card-text availability">In Stock</p>
             <button class="btn btn-primary">Add to Cart</button>
           </div>
         </div>
         
         <div class="card">
          <section class="pro">
           <a href="img/Wardrobe.jpeg"><img src="img/Wardrobe.jpeg" alt="Wooden Sofa Set" class="card-img"></a>
          </section>
           <div class="card-body">
             <h3 class="card-title">Wardrobe</h3>
             <div class="rating">
               <input type="radio" name="rating2" value="5" id="5-stars2">
               <label for="5-stars2">&#9733;</label>
               <input type="radio" name="rating2" value="4" id="4-stars2">
               <label for="4-stars2">&#9733;</label>
               <input type="radio" name="rating2" value="3" id="3-stars2">
               <label for="3-stars2">&#9733;</label>
               <input type="radio" name="rating2" value="2" id="2-stars2">
               <label for="2-stars2">&#9733;</label>
               <input type="radio" name="rating2" value="1" id="1-star2">
               <label for="1-star2">&#9733;</label>
             </div>
             <p class="card-text description">Experience timeless elegance with our handcrafted wooden sofa set, the perfect centerpiece for any living room.
 
 
 
             </p>
             <p class="card-text price">₹18,999</p>
             <p class="card-text shipping">Free Shipping</p>
             <p class="card-text availability">In Stock</p>
             <button class="btn btn-primary">Add to Cart</button>
           </div>
         </div>
         
       
         <div class="card">
          <section class="pro">

           <a href="img/Family Sofa1.jpeg"><img src="img/Family Sofa1.jpeg" alt="Fur 6" class="card-img"></a>
           </section>
           <div class="card-body">
             <h3 class="card-title">Family Sofa</h3>
             <div class="rating">
               <input type="radio" name="rating3" value="5" id="5-stars3">
               <label for="5-stars3">&#9733;</label>
               <input type="radio" name="rating3" value="4" id="4-stars3">
               <label for="4-stars3">&#9733;</label>
               <input type="radio" name="rating3" value="3" id="3-stars3">
               <label for="3-stars3">&#9733;</label>
               <input type="radio" name="rating3" value="2" id="2-stars3">
               <label for="2-stars3">&#9733;</label>
               <input type="radio" name="rating3" value="1" id="1-star3">
               <label for="1-star3">&#9733;</label>
             </div>
             <p class="card-text description">Cosy up with loved ones on our Family Sofa - a comfortable haven for heartwarming memories and cherished moments.</p>
             <p class="card-text price">₹38,999</p>
             <p class="card-text shipping">Free Shipping</p>
             <p class="card-text availability">In Stock</p>
             <button class="btn btn-primary">Add to Cart</button>
           </div>
         </div>

         <div class="card">
          <section class="pro">

           <a href="img/Chair.jpeg"><img src="img/Chair.jpeg" alt="Fur 6" class="card-img"></a>
           </section>
           <div class="card-body">
             <h3 class="card-title">Cushion</h3>
             <div class="rating">
               <input type="radio" name="rating4" value="5" id="5-stars4">
               <label for="5-stars4">&#9733;</label>
               <input type="radio" name="rating4" value="4" id="4-stars4">
               <label for="4-stars4">&#9733;</label>
               <input type="radio" name="rating4" value="3" id="3-stars4">
               <label for="3-stars4">&#9733;</label>
               <input type="radio" name="rating4" value="2" id="2-stars4">
               <label for="2-stars4">&#9733;</label>
               <input type="radio" name="rating4" value="1" id="1-star4">
               <label for="1-star4">&#9733;</label>
             </div>
             <p class="card-text description">Transform your space with our stylish Cushions - the perfect accents to bring comfort, color, and personality to your home.</p>
             <p class="card-text price">₹8,999</p>
             <p class="card-text shipping">Free Shipping</p>
             <p class="card-text availability">In Stock</p>
             <button class="btn btn-primary">Add to Cart</button>
           </div>
         </div>

         <div class="card">
          <section class="pro">

           <a href="img/Wooden Sofa Set.jpeg"><img src="img/Wooden Sofa Set.jpeg" alt="Fur 6" class="card-img"></a>
           </section>
           <div class="card-body">
             <h3 class="card-title">Wooden Sofa Set</h3>
             <div class="rating">
               <input type="radio" name="rating5" value="5" id="5-stars5">
               <label for="5-stars5">&#9733;</label>
               <input type="radio" name="rating5" value="4" id="4-stars5">
               <label for="4-stars5">&#9733;</label>
               <input type="radio" name="rating5" value="3" id="3-stars5">
               <label for="3-stars5">&#9733;</label>
               <input type="radio" name="rating5" value="2" id="2-stars5">
               <label for="2-stars5">&#9733;</label>
               <input type="radio" name="rating5" value="1" id="1-star5">
               <label for="1-star5">&#9733;</label>
             </div>
             <p class="card-text description">Experience the natural beauty of our Wooden Sofa Set - a perfect blend of sophistication, durability, and timeless elegance for your home.</p>
             <p class="card-text price">₹30,999</p>
             <p class="card-text shipping">Free Shipping</p>
             <p class="card-text availability">In Stock</p>
             <button class="btn btn-primary">Add to Cart</button>
           </div>
         </div>

         <div class="card">
          <section class="pro">

           <a href="img/Study Table.jpeg"><img src="img/Study Table.jpeg" alt="Fur 6" class="card-img"></a>
           </section>
           <div class="card-body">
             <h3 class="card-title">Study Table</h3>
             <div class="rating">
               <input type="radio" name="rating6" value="5" id="5-stars6">
               <label for="5-stars6">&#9733;</label>
               <input type="radio" name="rating6" value="4" id="4-stars6">
               <label for="4-stars6">&#9733;</label>
               <input type="radio" name="rating6" value="3" id="3-stars6">
               <label for="3-stars6">&#9733;</label>
               <input type="radio" name="rating6" value="2" id="2-stars6">
               <label for="2-stars6">&#9733;</label>
               <input type="radio" name="rating6" value="1" id="1-star6">
               <label for="1-star6">&#9733;</label>
             </div>
             <p class="card-text description">Unlock your potential with our Study Table - a stylish and functional workspace designed to inspire productivity and creativity.</p>
             <p class="card-text price">₹10,999</p>
             <p class="card-text shipping">Free Shipping</p>
             <p class="card-text availability">In Stock</p>
             <button class="btn btn-primary">Add to Cart</button>
           </div>
         </div>
     
     </div>


   

   
    <br><br>

</section>
    <footer class="background-f">
        <p class="text-footer">
          &copy; 2027 - All rights reserved by MMK co-op        </p>
    </footer>


    
</body>

</php>