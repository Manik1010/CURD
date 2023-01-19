<html>
   <head>
      <title>Using joins on MySQL Tables</title>
   </head>
   <body>
      <?php
         $mysqli = mysqli_connect('localhost', 'root', '', 'curd');
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }
         printf('Connected successfully.<br />');
   
         $sql = 'SELECT a.tutorial_id, a.tutorial_author, b.tutorial_count
            FROM tutorials_tbl a, tcount_tbl b WHERE a.tutorial_author = b.tutorial_author';
		 
         $result = $mysqli->query($sql);
           
         if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               printf("Id: %s, Author: %s, Count: %d <br />", 
                  $row["tutorial_id"], 
                  $row["tutorial_author"], 
                  $row["tutorial_count"]);               
            }
         } else {
            printf('No record found.<br />');
         }
         mysqli_free_result($result);
         $mysqli->close();
      ?>
   </body>
</html>