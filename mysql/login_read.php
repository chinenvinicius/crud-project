<?php
     
   
            include "db.php";
         
          $query = "SELECT * FROM users";
     
         $result = mysqli_query($connection, $query);
         
  
   

     

?>
<?php include "header.php";?>
<div class="container">

     <?php
           while($row = mysqli_fetch_row($result)){

               echo "<pre>";
               print_r($row);
               echo "</pre>";
           }
          
          ?>
</div>
<?php include "footer.php";?>