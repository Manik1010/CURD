<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Committee_Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
    <br><br><br>

    <div class="cintainer">
      <div class="row">
        <!-- Left side bar -->
        <div class="col-md-3">
          <a class="btn btn-info" href="#">Back</a>
        </div>
        <!-- Right side Bar -->
        <div class="col-md-9">
          <h2>Add New Committee Members</h2>
          <br>

          <form action="store.php" method="post">
            <div class="form-group">
              <label for="name">Name Of Fast Nenbers:</label>
              <input type="text" class="form-control" name="name" placeholder="Enter name ">
            </div>
            <br>
            <div class="form-group">
              <label for="name">Name Of Second Nenbers:</label>
              <input type="text" class="form-control" name="name" placeholder="Enter name ">
            </div>
            <br>
            <div class="form-group">
              <label for="name">Name Of Third Nenbers:</label>
              <input type="text" class="form-control" name="name" placeholder="Enter name ">
            </div>
            <br>
            <div class="form-group">
              <label for="name">Name Of Fourth Nenbers:</label>
              <input type="text" class="form-control" name="name" placeholder="Enter name ">
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          
        </div>
        
      </div>
      
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>