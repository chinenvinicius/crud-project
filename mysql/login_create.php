<?php
     include "db.php";
     include "functions.php";

if(isset($_POST['submit'])){
 createData();     
}

?>
<?php include "header.php";?>

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

<?php include "header.php" ;?>