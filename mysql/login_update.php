<?php 
 include "db.php";
 include "functions.php";?>
<?php
 if(isset($_POST['submit'])){
      updateData();
      
 }
      
 session_start();
 echo $_SESSION['content'];
?>
<?php include "header.php";?>
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
<?php include "footer.php";?>