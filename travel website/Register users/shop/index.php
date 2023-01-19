<title>shop</title>
<?php
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
include'../include/register_header.php';
?>

<section class="packages">

   <h1 class="heading-title">All Travelling Products</h1>

   <div class="box-container">
      <div class="box" style="border-radius:20px;padding-left: 30px; padding-right: 20px;">
      	<label for="cars" style="padding: 5px;"><b>Select Categories</b>:</label>

		<select name="man-categories" id="categories" style="float: right;">
		  <option value="man">Man</option>
		  <option value="women">Women</option>
		  <option value="child">child</option>
		 
		</select>
     </div>  
      <div class="box" style="border-radius:20px;padding-left: 30px; padding-right: 20px;">
         <label for="cars" style="padding: 5px;"><b>Select Sub-Categories</b>:</label>

      <select name="sub-categories" id="sub-categories" style="float: right;">
        <option value="man">jacket</option>
        <option value="women">Cap</option>
        <option value="child">shoes</option>
       
      </select>
     </div>  
      <div class="box" style="border-radius:20px;padding-left: 30px; padding-right: 20px;">
         <label for="cars" style="padding: 5px;"><b>Sort Prices</b>:</label>

      <select name="sub-categories" id="sub-categories" style="float: right;">
        <option value="man">lowest</option>
        <option value="women">highest</option>
              
      </select>
     </div>    
      <div class="box" style="border-radius: 25px;">
         <div class="image" style="border-radius: 25px 25px 0px 0px;">
            <img src="../../images2/Bag.jpg"  alt="">
         </div>
         <div class="content">
            <h3>Waterproof  Shoe Bag </h3>
            
           <p> <img src="../../images2/cost.png " width="30px" height="30px"><b>Cost:  1999tk</b><p>
            
            <a href="book.php" class="btn">More Details</a>
         </div>
      </div>

      <div class="box" style="border-radius: 25px;">
         <div class="image" style="border-radius: 25px 25px 0px 0px;">
            <img src="../../images2/cap.jpg" alt="">
         </div>
         <div class="content">
            <h3>Travelling Leisure Cap</h3>
            
           <p> <img src="../../images2/cost.png " width="30px" height="30px"><b>Cost:  1999tk</b><p>
            
            <a href="book.php" class="btn">More Details</a>
         </div>
      </div>

      <div class="box" style="border-radius: 25px;">
         <div class="image" style="border-radius: 25px 25px 0px 0px;">
            <img src="../../images2/sunglass.jpg" alt="">
         </div>
         <div class="content">
            <h3>Stylish Purple Sunglasses</h3>
            
           <p> <img src="../../images2/cost.png " width="30px" height="30px"><b>Cost:  1999tk</b><p>

            <a href="book.php" class="btn">More Details</a>
         </div>
      </div>

      <div class="box" style="border-radius: 25px;">
         <div class="image" style="border-radius: 25px 25px 0px 0px;">
            <img src="../../images2/jacket.jpg" alt="">
         </div>
         <div class="content">
            <h3>Men Fishing  Jacket</h3>
            
           <p> <img src="../../images2/cost.png " width="30px" height="30px"><b>Cost:  1999tk</b><p>
            
            <a href="book.php" class="btn">More Details</a>
         </div>
      </div>

      <div class="box" style="border-radius: 25px;">
         <div class="image" style="border-radius: 25px 25px 0px 0px;">
            <img src="../../images2/sleepmask.jpg" alt="">
         </div>
         <div class="content">
            <h3>Super Sleep Mask</h3>
            
           <p> <img src="../../images2/cost.png " width="30px" height="30px"><b>Cost:  1999tk</b><p>
            
            <a href="book.php" class="btn">More Details</a>
         </div>
      </div>

      <div class="box" style="border-radius: 25px;">
         <div class="image" style="border-radius: 25px 25px 0px 0px;">
            <img src="../../images2/shoes.jpg" alt="">
         </div>
         <div class="content">
            <h3>Backpacking and Travel </h3>
            
           <p> <img src="../../images2/cost.png " width="30px" height="30px"><b>Cost:  1999tk</b><p>
            
            <a href="book.php" class="btn">More Details</a>
         </div>
      </div>

       

      <div class="box" style="border-radius: 25px;">
         <div class="image" style="border-radius: 25px 25px 0px 0px;">
            <img src="../../images2/Bag.jpg"  alt="">
         </div>
         <div class="content">
            <h3>Waterproof  Shoe Bag </h3>
            
           <p> <img src="../../images2/cost.png " width="30px" height="30px"><b>Cost:  1999tk</b><p>
            
            <a href="book.php" class="btn">More Details</a>
         </div>
      </div>

      <div class="box" style="border-radius: 25px;">
         <div class="image" style="border-radius: 25px 25px 0px 0px;">
            <img src="../../images2/cap.jpg" alt="">
         </div>
         <div class="content">
            <h3>Travelling Leisure Cap</h3>
            
           <p> <img src="../../images2/cost.png " width="30px" height="30px"><b>Cost:  1999tk</b><p>
            
            <a href="book.php" class="btn">More Details</a>
         </div>
      </div>

      <div class="box" style="border-radius: 25px;">
         <div class="image" style="border-radius: 25px 25px 0px 0px;">
            <img src="../../images2/sunglass.jpg" alt="">
         </div>
         <div class="content">
            <h3>Stylish Purple Sunglasses</h3>
            
           <p> <img src="../../images2/cost.png " width="30px" height="30px"><b>Cost:  1999tk</b><p>

            <a href="book.php" class="btn">More Details</a>
         </div>
      </div>

     <div class="box" style="border-radius: 25px;">
         <div class="image" style="border-radius: 25px 25px 0px 0px;">
            <img src="../../images2/jacket.jpg" alt="">
         </div>
         <div class="content">
            <h3>Men Fishing  Jacket</h3>
            
           <p> <img src="../../images2/cost.png " width="30px" height="30px"><b>Cost:  1999tk</b><p>
            
            <a href="book.php" class="btn">More Details</a>
         </div>
      </div>

      <div class="box" style="border-radius: 25px;">
         <div class="image" style="border-radius: 25px 25px 0px 0px;">
            <img src="../../images2/sleepmask.jpg" alt="">
         </div>
         <div class="content">
            <h3>Super Sleep Mask</h3>
            
           <p> <img src="../../images2/cost.png " width="30px" height="30px"><b>Cost:  1999tk</b><p>
            
            <a href="book.php" class="btn">More Details</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="../../images2/shoes.jpg" alt="">
         </div>
         <div class="content">
            <h3>Backpacking and Travel </h3>
            
           <p> <img src="../../images2/cost.png " width="30px" height="30px"><b>Cost:  1999tk</b><p>
            
            <a href="book.php" class="btn">More Details</a>
         </div>
      </div>
      

   </div>

   <div class="load-more"><span class="btn">load more</span></div>

</section>







<?php include'../include/footer.php';?>