<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Article-page</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <style>
    .row{
    	height: 100%;
    }
     /*   Nab _ bar style  -----> */
      .nav-link{
        color: white;
        font-size: 16px;
        display: block;
      }
        .nav-link:hover{
          background-color: #19b7e3;
          color: black;
        }
        .menu{
          margin-left: 0px;
          padding-bottom: 30px;
        }

        /* End */
	

		
</style>
  </head>
  <body>
  <div class="container">

  	 <div class="row mt-2">
  	 	   <div class="col-md-10">
  	 	   	   <a href=""><img src="../../images/logo.PNG"></a>
  	 	   </div>
  	 	   
  	 	  
  	 </div>

  <div class="col-sm-12 content">
    	<a class="btn btn-success"  href="index.php?id=<?php echo $userid;?>"> Back </a>
		  <br><br>
      
      <form action="store.php?id=<?php echo $userid;?>" enctype="multipart/form-data" method="post">
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="brands">Categories</label>
            <select name="category_id" class="form-control">
              <option> Select Categories </option>
              <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?= $row['id'] ?>"> <?= $row['name'] ?> </option>
              <?php } ?>
            </select>
          </div>
          <div class="col-md-6 form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
          </div>
        </div>
          <br>
         <div class="row">
              <div class="col-md-6 form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image">
              </div><br>

              <div class="col-md-6 form-group">
                <label for="restricted">View Permission:</label>
                <select name="viewpermission" class="form-control">
                  <option value="all">ALL</option>
                  
                    <option value="Student"> Only for Student</option>
                    <option value="Event Manager"> Only for Manager</option>
                    <option value="Officer"> Only for Officer</option>
                </select>
              </div>
          </div><br>  
          <div class="form-group">
            <label for="article">Article</label>
            <textarea class="form-control" name="article" rows="10"></textarea>
          </div><br>

         
          
         
          <div class="form-group">
            <label for="date">Date:</label>
            <input type="date"  name="date">
          </div><br>
          

          <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  </div>
</div>
  
 <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>