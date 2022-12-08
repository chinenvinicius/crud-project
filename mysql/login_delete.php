<?php 
 include "db.php";
 include "functions.php";?>
<?php
if(isset($_POST['submit'])){
     
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
          <h1>Update User</h1>
          <div class="container">
               <form action="login_update.php" method="post">
                    <div class="form-group">
                         <label for="username">Username</label>
                         <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                         <label for="password">passsword</label>
                         <input type="text" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                         <select name="id" id="">
                              <?php showAllData(); ?>
                         </select>
                    </div>
                    <input type="submit" name="submit">
               </form>
          </div>
     </div>
</body>

</html>