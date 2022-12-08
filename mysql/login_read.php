<?php
     
   
            include "db.php";
         
          $query = "SELECT * FROM users";
     
         $result = mysqli_query($connection, $query);
         
  
   

     

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <div class="container">

          <?php
           while($row = mysqli_fetch_row($result)){

               echo "<pre>";
               print_r($row);
               echo "</pre>";
           }
          
          ?>
     </div>
</body>

</html>