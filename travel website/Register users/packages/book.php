<?php
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
include'../include/register_header.php';
?>
<!-- header section ends -->

<section class="home"style="margin: 10%;">
   <h1 >Nikli-Mithamain Day Tour</h1>
   <p><img src="../../images/location.png" width="20" height="20"><b>Nikli haor,Mithamain</b></p><hr style="border: 1px solid grey;">
   <div class="box-container" >

      <div class="box">
         <h3>Duration</h3>
         <h5 style="color: green;">1 Day & 1 Night</h5>
      </div>

      <div class="box">
         <h3>Tour Type</h3>
         <h5 style="color: green;">Standard</h5>
      </div>

      <div class="box">
         <h3>Max Group Size</h3>
         <h5 style="color: green;">20</h5>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         
      </div>

   </div>
   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(../../images/nikli.jpg) no-repeat">
           
         </div>

         <div class="swiper-slide slide" style="background:url(../../images/nikli2.jpg) no-repeat">
           
         </div>

         <div class="swiper-slide slide" style="background:url(../../images/nikli3.jpg) no-repeat">

         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="phone" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->


<?php include'../include/footer.php';?>