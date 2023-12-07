
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>menu</title>
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
<a href="process_contact_form.php">CONTACTS</a>

</nav>

<div class="icons">
<div id="user-btn" class="fas fa-user"></div>
<div id="menu-btn" class="fas fa-bars"></div>
</div>


  </section>


  </header>
  
  <div class="heading">
    <h3>our menu</h3>
    <p><a href="home.php">home</a> <span> / menu</span></p>
    </div>

    <section class="services">

      <h1 class="title">latest services</h1>
   
      <div class="box-container">
   
      <form accept="" method="post" action="cart.php" class="box">
    <img src="images/services-1.jpg" alt="">
    <div class="name">uniforms</div>
    <div class="flex">
        <div class="price"><span>₱</span>380<span>/-</span></div>
        <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
    </div>
</form>



   
         <form accept="" method="post" class="box">
            <img src="images/services-2.jpg" alt="">
            <div class="name">flat ironing</div>
            <div class="flex">
               <div class="price"><span>₱</span>300<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            </div>
         </form>
   
         <form accept="" method="post" class="box">
            <img src="images/service-3.jpg" alt="">
            <div class="name">white colors</div>
            <div class="flex">
               <div class="price"><span>₱</span>230<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            </div>
         </form>
   
         <form accept="" method="post" class="box">
            <img src="images/service-4.jpg" alt="">
            <div class="name">towels</div>
            <div class="flex">
               <div class="price"><span>₱</span>189<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            </div>
         </form>
   
         <form accept="" method="post" class="box">
            <img src="images/services-5.jpg" alt="">
            <div class="name">folding</div>
            <div class="flex">
               <div class="price"><span>₱</span>400<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            </div>
         </form>
   
   
</div>
         

   </section>
   
    

   <section class="products">
      <h1 class="title">latest products</h1>
      
      <div class="box-container">
      <form action="" method="post" class="box">
      <img src="images/downy.png" alt="" width="400" height="400">
      <a href="#" class="cat">fresh products</a>
      <div class="name">downy liquid detergent 01</div>
      <div class="flex">
        <div class="price"><span>₱</span>450</div>
        <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
      </div>
      </form>
      <form action="" method="post" class="box">>
        <img src="images/downy-3.jpg" alt="">
        <a href="#" class="cat">fresh products</a>
        <div class="name">downy liquid detergent garden bloom</div>
        <div class="flex">
          <div class="price"><span>₱</span>560</div>
          <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
        
         </div>
        </form>
      
      
      <form action="" method="post" class="box">
        <img src="images/tide.png" alt="">
        <a href="#" class="cat">fresh products</a>
        <div class="name">tide liquid detergent</div>
        <div class="flex">
          <div class="price"><span>₱</span>560</div>
          <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
        </div>
        </form>
        <form action="" method="post" class="box"> 
          <img src="images/breeze.png" alt="">
          <a href="#" class="cat">fresh products</a>
          <div class="name">breeze liquid detergent</div>
          <div class="flex">
            <div class="price"><span>₱</span>450</div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
          </div>
          </form>
          <form action="" method="post" class="box">
            <img src="images/breeze-2.jpg" alt="">
            <a href="#" class="cat">fresh products</a>
            <div class="name">breeze detergent color care</div>
            <div class="flex">
              <div class="price"><span>₱</span>570</div>
              <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            </div>
            </form>
            <form action="" method="post" class="box">
              <img src="images/breeze-3.png" alt="" width="400" height="400">
              <a href="#" class="cat">fresh products</a>
              <div class="name">breeze powder</div>
              <div class="flex">
                <div class="price"><span>₱</span>450</div>
                <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
              </div>
              </form>
      
      
              <form action="" method="post" class="box">
                <img src="images/tide-2.png" alt="" width="400" height="400">
                <a href="#" class="cat">fresh products</a>
                <div class="name">tide powder 01</div>
                <div class="flex">
                  <div class="price"><span>₱</span>450</div>
                  <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                </form>
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


  <script src="script.js"></script>



</body>
</html>