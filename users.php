<?php
 if(isset($_POST['submit'])){
  $username = $_POST['name'];
  

 }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Crud project</title>
</head>

<body>
     <div class="container">
          <form action="users.php" method="post">
               <div class="from-group">
                    <label for="name">Name</label>
                    <input type="text" name="name">
               </div>
               <div class="from-group">
                    <label for="email">Email</label>
                    <input type="email" name="email">
               </div>
               <div class="from-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile">
               </div>

               <input type="submit" name="submit">
          </form>
     </div>
</body>

</html>