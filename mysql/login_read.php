<?php
     if(isset($_POST['submit'])){
     
     $username = $_POST['username'];
     $password = $_POST['password'];


     $connection = mysqli_connect('localhost','root','devwork2121','crudproject');
 
     if(!$connection){
        echo "not connected";
     }
     if($username && $password){
          $query = "INSERT INTO users(username, password)";
          $query .= "VALUES ('$username', '$password')";
     
         $result = mysqli_query($connection, $query);
         
  
     }else{
          echo "not working";
     }

     

}
?>