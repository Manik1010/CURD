<?php

  $id = $_GET['id'];

  $conn = mysqli_connect('localhost', 'root', '', 'curd');
  $sql = "Select * From students WHERE id = $id";
  $result = mysqli_query($conn, $sql);

  $std = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Show_Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
    <br><br><br>

    <div class="cintainer">
      <div class="row">
        <!-- Left side bar -->
        <div class="col-md-3">
          <a class="btn btn-info" href="index.php">Student</a>
        </div>
        <!-- Right side Bar -->
        <div class="col-md-9">
          <h2>Student info</h2>
          <br>
          <table class="table">
            <tr>
              <th width="100" class="text-right">Name</th>
              <td><?php echo $std['name'];?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">ID</th>
              <td><?php echo $std['id'];?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Age</th>
              <td><?php echo $std['age'];?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Roll</th>
              <td><?php echo $std['roll'];?></td>
            </tr>
          </table>
        </div>
        
      </div>
      
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>