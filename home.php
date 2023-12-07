<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
   <title>home</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>
  <header class="header">

  <section class="flex">
 <a href="home.php" class="logo"> MOBILE LAUNDRY</a>

 <nav class="navbar">
<a href="home.php">HOME</a>
<a href="about.php">ABOUT</a>
<a href="menu.php">MENU</a>
<a href="process_contact_form.php">CONTACTS</a>
</nav>

<div class="icons">
<div id="user-btn" class="fas fa-user"></div>
<div id="menu-btn" class="fas fa-bars"></div>
</div>



  </section>


  </header>

  <section class="hero">
<div class="swiper hero-slider">

<div class="swiper-wrapper">

<div class="swiper-slide">

<div class="content">
<span>order online</span>
<h3>fresh TIDE POWDER</h3>
<a href="menu.php" class="btn">see menus</a>
</div>
<div class="image">
  <img src="images/product-1.jpg" alt="">
</div>

</div>
<div class="swiper-slide">

  <div class="content">
  <span>order online</span>
  <h3>fresh ARIEL POWDER</h3>
  <a href="menu.php" class="btn">see menus</a>
  </div>
  <div class="image">
    
    <img src="images/product-2.jpg" alt="">
  </div>
  
  </div>

  <div class="swiper-slide">

    <div class="content">
    <span>order online</span>
    <h3>fresh TIDE DETERGENT</h3>
    <a href="menu.php" class="btn">see menus</a>
    </div>
    <div class="image">
    
      <img src="images/product-3.jpg" alt="">
    </div>
    
    </div>

    <div class="swiper-slide">

      <div class="content">
      <span>order online</span>
      <h3>fresh ARIEL DETERGENT</h3>
      <a href="menu.php" class="btn">see menus</a>
      </div>
      <div class="image">
      
        <img src="images/product-4.jpg" alt="">
      </div>
      
      </div>

      <div class="swiper-slide">

        <div class="content">
        <span>order online</span>
        <h3>fresh BREEZE POWDER</h3>
        <a href="menu.php" class="btn">see menus</a>
        </div>
        <div class="image">
        
          <img src="images/product-5.jpg" alt="">
        </div>
        
        </div>

        <div class="swiper-slide">

          <div class="content">
          <span>order online</span>
          <h3>fresh products of laundry</h3>
          <a href="menu.php" class="btn">see menus</a>
          </div>
          <div class="image">
          
            <img src="images/product-6.jpg" alt="">
          </div>
          
          </div>
      </div>
   <div class="swiper-pagination"></div>

</div>

  </section>


  <section class="category">
<h1 class="title">laundry services category</h1>
<div class="box-container">
<a href="menu.php" class="box">
  <img src="images/services-1.jpg" alt="">
<h3>washing</h3>
</a>

<a href="menu.php" class="box">
  <img src="images/services-2.jpg" alt="">
<h3>flat ironing</h3>
</a>

<a href="menu.php" class="box">
  <img src="images/service-3.jpg" alt="">
<h3>uniform washing</h3>
</a>

<a href="menu.php" class="box">
  <img src="images/service-4.jpg" alt="">
<h3> dry washing</h3>
</a>

<a href="menu.php" class="box">
  <img src="images/services-5.jpg" alt="">
<h3>folding</h3>
</a>
</div>

<h1 class="title">laundry products category</h1>
<div class="box-container">
<a href="menu.php" class="box">
  <img src="images/product-1.jpg" alt="">
<h3>detergent</h3>
</a>

<a href="menu.php" class="box">
  <img src="images/product-3.jpg" alt="">
<h3>liquid detergent</h3>
</a>

</div>








  </section>




<footer class="footer">
<section class="grid">
  <div class="box">
<img src="images/email-icon.png" alt="">
<h3>our email</h3>
<a href="castronieleonel9@gmail.com">castronieleonel9@gmail.com</a>


  </div>
  <div class="box">
    <img src="images/clock-icon.png" alt="">
    <h3>opening hours</h3>
    <p>7am to 6pm</p>
  </div>
  
      <div class="box">
        <img src="images/map-icon.png" alt="">
        <h3>address</h3>
        <a href="#">magalang, pampanga ,philippines</a>
        
      </div>

      
      <div class="box">
        <img src="images/phone-icon.png" alt="" width="200" height="200">
        <h3>our number</h3>
        <a href="+639050476751">0905-047-6751</a>
        <a href="+639634245984">0963-424-5984</a>
      </div>
 </section>
</footer>

<div class="loader">
<img src="images/loader.gif" alt="">

</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script src="script.js"></script>

<script>
 var swiper = new Swiper(".hero-slider", {
      loop:"true",
      effect: "flip",
      grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
        clickable:"true",
    },
    });
  
</script>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
 </body>
</html>