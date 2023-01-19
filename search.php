<?php

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
    <title>Searching...</title>
    <style type="text/css">
      .srch{
        padding-left: 1000px;
      }
    </style>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
    <br><br><br>

    <div class="srch">
      <form class="navbar-form" method="post" name="form1">
      <div>
        <input class="form-control" type="text" name="search" placeholder="Student name..." required=''>
        <button style="background-color: red;" type="submit" class="btn btn-default" name="submit">
         <span class="glyphicon glyphicon-search"></span>
         </button>
      </div>        
      </form>
    </div>
    <h2>List of all members</h2>
    <?php
        if(isset($_POST['submit'])){
                $q = mysqli_query($conn,"SELECT * FROM students WHERE name like '%$_POST[search]%' ");

                if (mysqli_num_rows($q)==0) {
                        // code...
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
                      echo "<tr >";
                      echo "<td>"; echo $row['id']; echo "</td>";
                      echo "<td>"; echo $row['name']; echo "</td>";
                      echo "<td>"; echo $row['age']; echo "</td>";
                      echo "<td>"; echo $row['roll']; echo "</td>";
                    echo "</tr>";
                    }
                    echo "</table";
                }
        }
        else{
          echo "<table class = 'table table-bordered table-hover'>";
            echo "<tr style=''>";
              echo "<th>"; echo "User Id"; echo "</th>";
              echo "<th>"; echo "User Name"; echo "</th>";
              echo "<th>"; echo "User Age"; echo "</th>";
              echo "<th>"; echo "User Roll"; echo "</th>";
              echo "<th>"; echo "Action"; echo "</th>";
            echo "</tr>";
            while($row=mysqli_fetch_assoc($result)){
              echo "<tr >";
              echo "<td>"; echo $row['id']; echo "</td>";
              echo "<td>"; echo $row['name']; echo "</td>";
              echo "<td>"; echo $row['age']; echo "</td>";
              echo "<td>"; echo $row['roll']; echo "</td>";
            echo "</tr>";
            }
            echo "</table";
        }
    
    ?>
   </body>
   </html>