<?php
include "db.php";

function CreateData(){
     global $connection;
     $username = $_POST['username'];
     $password = $_POST['password'];
 
     if($username && $password){
       $query = "INSERT INTO users(username, password)";
       $query .= "VALUES ('$username', '$password')";
     
         $result = mysqli_query($connection, $query);

     }else{
          echo "not working";
     }

}
function showAllData(){
     global $connection;
     $query = "SELECT * FROM users ";
     
     $result = mysqli_query($connection, $query);

     if(!$result){
          die('not connected' . mysqli_error());
     }else{
          echo "connected";
     }
     
     while($row = mysqli_fetch_assoc($result)){
          $id =  $row['id'];
          echo "<option value='$id'>$id</option>";
     }
     

 }



 function updateData(){
    
  global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  $query = "UPDATE users SET ";
  $query .= "username = '$username', ";
  $query .= "password = '$password' ";
  $query .= "WHERE id = $id ";
  
  $result = mysqli_query($connection, $query);
  if(!$result){
     die("query failed" . mysqli_error());
  }
  
 }


 
 function deleteData(){
    
     global $connection;
     $username = $_POST['username'];
     $password = $_POST['password'];
     $id = $_POST['id'];
   
     $query = "DELETE FROM users WHERE id = $id ";
     
     $result = mysqli_query($connection, $query);
     if(!$result){
        die("query failed" . mysqli_error());
     }
     
    }