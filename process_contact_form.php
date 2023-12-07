<?php
session_start();


if(isset($_SESSION['displayName'])){
    echo "<script>location.replace('process_contact_form.php');</script>";
 }
    

 include "db_conn.php";



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$e->getMessage());
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['msg'];

    // Insert data into the database
    $sql = "INSERT INTO messages (name, number, email, message) VALUES ('$name', '$number', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Message successfully inserted
        echo "Message sent successfully!";
    } else {
        // Error occurred while inserting
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact</title>
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
    <h3>contact us</h3>
    <p><a href="home.php">home</a> <span> / contact</span></p>
    </div>
<section class="contact">

<div class="row">

   <div class="image">
      <img src="images/contact.png" alt="">
   </div>

   <form action="process_contact_form.php" method="post">
      <h3>tell us something!</h3>
      <input type="text" name="name" required placeholder="enter your name" maxlength="50" class="box">
      <input type="number" name="number" required placeholder="enter your number" max="99999999999" min="0" class="box" onkeypress="if(this.value.length == 11) return false;">
      <input type="email" name="email" required placeholder="enter your email" maxlength="50" class="box">
      <textarea name="msg" placeholder="enter your message" required class="box" cols="30" rows="10" maxlength="500"></textarea>
      <input type="submit" value="send message" class="btn" name="send">
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