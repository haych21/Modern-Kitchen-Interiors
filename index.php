<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
<header>
      <a href="login.html">
        <button class="submit" title="Log In">Log In</button>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>     
      </nav>
      <a href="bookings.html">
        <button class="submit" title="Book Now">Book Now</button>
    </a>                
    </header>
    
    <main>
      <section id="hero">
        <img src="LOGO.jpeg" width="200px" height="200px">
        <h1>Modern Kitchen Interiors</h1>
        <p>We design and build beautiful, functional kitchens.</p>
        <a href="gallery.html">
            <button class="submit" title="View Our Work">View Our Work</button>
        </a>
          
      </section>
      
      
      
      <section id="Featured">
        <h2>Featured Designs</h2>
        <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="Kitchen-3.jpeg" style="width: 100%;">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="Kitchen-4.jpeg" style="width: 100%">
  
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="Kitchen-5.jpeg" style="width: 100%">
    
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
  let slideIndex = 0;
  showSlides();
  
  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
  </script>
      </section>

      
      
    </main>
    
    <footer>
      <a href="faqs.html">
        <button class="submit" title="Book Now">FAQs Page</button>
    </a>  
    <p>&copy; 2023 Modern Kitchen Interiors. All rights reserved.</p>
    </footer>
</body>
</html>