<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
  <header class="header">

  <section class="flex">
 <a href="home.php" class="logo"> MOBILE LAUNDRY</a>

 <nav class="navbar">
<a href="home.php">HOME</a>
<a href="about.php">ABOUT</a>
<a href="menu.php">MENU</a>
<a href="contact.php">CONTACTS</a>

</nav>

<div class="icons">
<div id="user-btn" class="fas fa-user"></div>
<div id="menu-btn" class="fas fa-bars"></div>
</div>

  </section>


  </header>
<div class="heading">
<h3>about us</h3>
<p><a href="home.php">home</a> <span> / about</span></p>
</div>

<section class="about">
<div class="row">


  <div class="image">
<img src="images/about.jpg" alt="">
  </div>
<div class="content">
 
  <h3>why choose us?</h3>
  <p>Ultimately, the choice should align with your individual needs and priorities. 
    It's a good idea to reach out to a few mobile laundry services in your area, ask questions,
     and compare their offerings to make an informed decision.</p>
  <a href="menu.php" class="btn">our menu</a>
</div>
</div>
</section>

<section class="steps">

<h1 class="title">simple steps</h1>
<div class="box-container">
<div class="box">
<img src="images/step-1.png" alt="">
<h3>choose order</h3>
<p>choose your item product or services that you wanted in our menu</p>
 </div>
 <div class="box">
  <img src="images/step-2.png" alt="">
  <h3>fresh clean</h3>
  <p>Your clean clothes are delivered back to you at your convenience!</p>
   </div>

   <div class="box">
    <img src="images/step-3.png" alt="">
    <h3>choose order</h3>
    <p>choose order in our menu page by message our email or contact no.</p>
     </div>
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
var swiper = new Swiper(".reviews-slider", {
    loop:"true",

    grabCursor: true,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable:"true",
  },
  breakpoints: {
   0: {
  slidesPerView: 1,
  },
   700: {
  slidesPerView: 2,

  },
   1024: {
  slidesPerView: 3,
  },
    },
  });

</script>

</body>
</html>