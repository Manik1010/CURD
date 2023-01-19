<?php
  //echo "Allha";
  //Connect to PHP
  $conn = mysqli_connect('localhost', 'root', '', 'curd');
  $sql = "Select * From students";
  $result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CURD</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
    <br><br><br>

    <div class="cintainer">
      <div class="row">
        <!-- Left side bar -->
        <div class="col-md-3">
          <a class="btn btn-info" href="insert.php">New Student</a>
        </div>
        <!-- Right side Bar -->
        <div class="col-md-9">
          <h2>Student List</h2>
          <br>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Roll</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_assoc($result)){
                //Here start while loop
              
              ?>
              <tr>
                <!-- <td>1</td>
                <td>Manik</td>
                <td>21</td>
                <td>68</td> -->
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['age']?></td>
                <td><?php echo $row['roll']?></td>
                <td>
                  <a class="btn btn-info" href="show.php ?id=<?php echo $row['id']; ?>">View</a>
                  <a class="btn btn-warning" href="edit.php ?id=<?php echo $row['id']; ?>">Edit</a>
                  <a class="btn btn-danger" onclick="return confirm('Are You Sure!!!')" href="delete.php ?id= <?php echo $row['id']; ?>">Delete</a>
                  
                </td>
              </tr>
              <?php
                // Here End while loop
              }
              ?>
            </tbody>
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