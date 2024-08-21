<?php
include "config.php";
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
</head>

<body>
    <?php include'header.php'; ?>
    </section>
     <div class="heading">
        <h3>about us</h3>
        <P><a href="home.php">home</a></P>
     </div>
<section class="about">
  <div class="flex">
      <div class="image">
        <img src="images/about-img.jpg" alt="">
      </div>
      <div class="content">
          <h3>why choose us?</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, doloribus.</p>
           <a href="contact.php"class="btn">contact us</a>
      </div>
  </div>
</section>

   <section class="reviews">
    <h1 class="title">client's reviews</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, quis.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Nityanand</h3>
        </div>
        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, quis.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Nityanand</h3>
        </div>
        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, quis.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Nityanand</h3>
        </div>
    </div>
   </section>

   <section class="authors">
    <h1 class="title">greate authors</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/author-1.jpg " alt="">
            <div class="share">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-instagram"></a>
              <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Nityanand</h3>
        </div>
        <div class="box">
            <img src="images/author-1.jpg " alt="">
            <div class="share">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-instagram"></a>
              <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Nityanand</h3>
        </div>
        <div class="box">
            <img src="images/author-1.jpg " alt="">
            <div class="share">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-instagram"></a>
              <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Nityanand</h3>
        </div>
    </div>
   </section>



     <?php include 'footer.php'; ?> 
    <script src="js/script.js"></script>
</body>

</html>