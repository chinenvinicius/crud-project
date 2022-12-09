<?php
               $name = "vininly";
               $value = 100;
               $expiration = time() + (60*60*24*7);
               setcookie($name,$value,$expiration);


          if(isset($_COOKIE['vininly'])){
            $someone = $_COOKIE['vininly'];
            echo $someone;
          }else{
            $someone = "";
          }
   
         include "db.php";
         
          $query = "SELECT * FROM users";
     
          $result = mysqli_query($connection, $query);
          

          $value = 'something from somewhere';

         
     

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