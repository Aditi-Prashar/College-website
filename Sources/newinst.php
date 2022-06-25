<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">  
    <title>New Teacher</title>
    <style>

.bg-img {
  /* The image used */
  background-image: url("./img/home-background.jpg");

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
  <form action="Storenewins.php" method="post" class="container">
    <h1>Sign up</h1>

    <label for="Uname"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="Uname" required>

    <label for="office"><b>Office</b></label>
    <input type="text" placeholder="Enter office" name="office" required>

    <label for="rank"><b>Rank</b></label>
    <input type="text" placeholder="Enter rank" name="rank" required>

    <button type="submit" class="btn">submit</button>
  </form>
</div>
</body>
</html>