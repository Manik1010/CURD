<?php
	//echo $name = $_POST['name'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$roll = $_POST['roll'];

	$conn = mysqli_connect('localhost', 'root', '', 'curd');
	$sql = "INSERT INTO students values(NULL,'$name', '$age', $roll);";

	// mysqli_query($conn, $sql);
	// mysqli_query($conn,$sql)
	if(mysqli_query($conn,$sql)){
        header("Location: index.php");
    }
    else{
        echo "Not inserted";
    }

?>