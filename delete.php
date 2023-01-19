<?php

     $id = $_GET['id'];

     $conn = mysqli_connect('localhost','root','','curd');
    
     $sql = "DELETE from students where id = $id";
     
      
     if(mysqli_query($conn, $sql)){
     	header("Location:index.php");
     }
     else{
     	echo "No Deleted";
     }
 ?>