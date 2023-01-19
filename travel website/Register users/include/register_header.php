<?php $url = 'http://localhost/travel%20website/Register%20users/'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="../dropdownstyle.css">
   <link rel="stylesheet"  type="text/css" href="../../css/style.css">
   <link rel="stylesheet" type="text/css" href="../../login system/css/style.css">
</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a style="text-decoration: none;" href="home.php" class="logo">Tour Koro.</a>
   <!--
   <nav class="navbar">
      <a href="../home.php">home</a>
      <a href="../about.php">about</a>
      <a href="../package.php">package</a>
      <a href="">Logout</a>
      <a href=""><img src="../images/profile.png"></a>

   </nav>-->
   <div class="navbar" >
        <a href="<?php echo $url;?>user_page.php">Home</a>
        
        <a href="<?php echo $url;?>packages/index.php">packages</a>
        <a href="<?php echo $url;?>gallery/index.php">Gallery</a>
        <a href="">Event</a>
        <a href="<?php echo $url;?>hotels/index.php">Hotels</a>
        <a href="<?php echo $url;?>shop/index.php">Shop</a>
        <a href="<?php echo $url;?>tour guide/index.php">Tour Guide</a>
        <a href="<?php echo $url;?>logout.php">Log out</a>
        <img src="../../images/profile.png">
        <span class="dropdown">

          <button class="dropbtn">
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="<?php echo $url;?>profile/index.php">profile</a>
            <a href="<?php echo $url;?>dashboard/index.php">dashboard</a>
            <a href="#">setting</a>
          </div>
        </span>
   </div>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
