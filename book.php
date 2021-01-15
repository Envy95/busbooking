<?php
error_reporting(0);
 include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Book</h2>
  </div>
  <hr>
  <form method="post" action="book.php">

    <?php include('errors.php'); ?>

    <div class="input-group">
      <label>Enter Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div><br>
    <div class="input-group">
      <label>Enter Contact Number</label>
      <input type="text" name="contactnum" value="<?php echo $contactnum; ?>">
    </div><br>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div><br>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Book</button>
       <button type="reset" class="btn" name="">Clear</button>
    </div>
   <br>
  </form>
   <form action="index.php" method="POST">
                <input align="right" type="submit" class="btn btn-primary" value="Cancel">
            </form>
</body>
</html>
