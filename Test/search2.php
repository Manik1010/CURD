<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="srch">
            <form class="navbar-form" method="post" name="form1">
                <input class="form-control" type="text" name="search" placeholder="Student name..." required=''>
                <button type="submit" class="btn btn-warning" name="submit">
                <span class="glyphicon glyphicon-search"></span>
                </button>
            </form>     
        </div>
        <h2>List of all members...</h2>

        <?php
            $con = mysqli_connect("localhost","root","","curd");

            if(isset($_POST['submit'])){ 

              $q = mysqli_query($con, "SELECT id, name, age, roll FROM students where name like '%$_POST[search]%");

                if(mysqli_num_rows($q)==0){
                    echo "No Record Found";
                }
                else{
                    echo "<table class = 'table table-bordered table-hover'>";
                        echo "<tr style=''>";
                            echo "<th>"; echo "User Id"; echo "</th>";
                            echo "<th>"; echo "User Name"; echo "</th>";
                            echo "<th>"; echo "User Age"; echo "</th>";
                            echo "<th>"; echo "User Roll"; echo "</th>";
                        echo "</tr>";

                        while($row=mysqli_fetch_assoc($q)){
                            echo "<tr>";
                            echo "<td>"; echo $row['id']; echo "</td>";
                            echo "<td>"; echo $row['name']; echo "</td>";
                            echo "<td>"; echo $row['age']; echo "</td>";
                            echo "<td>"; echo $row['roll']; echo "</td>";

                        echo "</tr>";
                        }
                    echo "</table>";
                ?>
                <form method="post">
                    <button type="submit" class="btn btn-default" name="submit1" style="font-weight: 700; font-size: 18px;"><span class="glyphicon glyphicon-remove-sign"></span>&nbsp Remove</button>
                    <button type="submit" class="btn btn-default" name="submit2" style="font-weight: 700; font-size: 18px;"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp Approve</button>
                </form>
                <?php    
                }
              }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



 <div class="cintainer">
      <div class="row">
        <!-- Right side Bar -->
        <div class="col-md-12">
          <h2>Student List Here...</h2>
          <br>
          <?php

            if(isset($_POST['submit'])){
                $q = mysqli_query($conn,"SELECT * FROM students WHERE like '%$_POST[search]%' ");

                if (mysqli_num_rows($q)==0) {
                        // code...
                        echo "No Record Found";
                    }
                else{
                  ?>
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
                        while($row = mysqli_fetch_assoc($q)){
                        //Here start while loop
                      
                      ?>
                      <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['age']?></td>
                        <td><?php echo $row['roll']?></td>
                        <td>
                          <a class="btn btn-info" href="show.php ?id=<?php echo $row['id']; ?>">Add For Commite</a>
                          
                        </td>
                      </tr>
                      <?php
                        // Here End while loop
                      }
                      ?>
                    </tbody>
                  </table>

                  }

                }
            else{

            }
          ?>

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
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['age']?></td>
                <td><?php echo $row['roll']?></td>
                <td>
                  <a class="btn btn-info" href="show.php ?id=<?php echo $row['id']; ?>">Add For Commite</a>
                  
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