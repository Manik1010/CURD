<?php
    
    $id = $_GET['id'];

    $name = $_POST['name'];
    $age = $_POST['age'];
    $roll = $_POST['roll'];


    $conn = mysqli_connect('localhost','root','','curd');
    
    $sql = "UPDATE students SET name = '$name', age = '$age', roll = '$roll' Where id = $id ";

    if(mysqli_query($conn,$sql)){
        header("Location: show.php?id=". $id);
    }
    else{
        echo "Not Updated";
    }
?>