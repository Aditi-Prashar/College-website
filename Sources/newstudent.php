<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">  
    <title>New student</title>
    <style>
    .bg-img {
  /* The image used */
  background-image: url("./img/cta1-background.jpg");

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
    <form action="Storens.php" method="post" class="container">
    <h1>Sign up</h1>
    <label for="Uname"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="Uname" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password" required>

    <label for="phnno"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone number" name="phnno" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email" required>

    <label for="DOB"><b>Date of birth</b></label>
    <input type="date" placeholder="Enter D.O.B" name="DOB" required>

    <button type="submit" class="btn">submit</button>
  </form>
</div>
</body>
</html>