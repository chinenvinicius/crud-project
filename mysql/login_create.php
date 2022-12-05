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
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <h1>Create User</h1>
     <div class="container">
          <form action="login_create.php" method="post">
               <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
               </div>
               <div class="form-group">
                    <label for="password">passsword</label>
                    <input type="text" name="password" class="form-control">
               </div>
               <input type="submit" name="submit">
          </form>
     </div>
</body>

</html>