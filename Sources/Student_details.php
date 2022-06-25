<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Student Login</title>
    <style>
    .bg-img {
  /* The image used */
  background-image: url("./img/blog01.jpg");

  min-height: 950px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
    </style>
</head>
<body>
<div class="bg-img">
  <form action="loginS.php" method="post" class="container">
    <h1>LOGIN</h1>
    <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>

    <label for="Uname"><b>User ID</b></label>
    <input type="numeric" placeholder="Enter id" name="id" required>

    <label for="office"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password" required>


    <button type="submit" class="btn">submit</button>
  </form>
</div>  
</body>
</html>