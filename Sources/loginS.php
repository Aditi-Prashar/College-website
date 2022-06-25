<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


.button1 {background-color: #4CAF50;}
</style>
</head>
<body>
<?php

// database connection
$mysqli = new mysqli("localhost","root","","college");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// echo "success"

$id = $_POST['id'];
$password = $_POST['password'];


$sql = "SELECT * FROM student WHERE id='$id' AND password='$password'";


if ($mysqli->query($sql) === FALSE) {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

//$selectsql = "SELECT * FROM user order by id asc";
$result = $mysqli->query($sql);
echo "Personal Details";
// print_r($result);



 if ($result->num_rows > 0){
 	?>
 	<table border="1">
 			<tr>
 				<td>ID</td>
 				<td>Name</td>
 				<td>DOB</td>
                 <td>Phnoe no</td>
                 <td>Email</td>
 			</tr>

 	<?php
 	// print_r($result);
 	while($row = $result->fetch_assoc()) {
 		?>
 		<tr>
 			<td><?php echo $row["id"]  ?></td>
 			<td><?php echo $row["Name"]  ?></td>
 			<td><?php echo $row["DOB"]  ?></td>
            <td><?php echo $row["PhnNo"] ?></td>
            <td><?php echo $row["Email"] ?></td>
 		</tr>
	    
  		<?php
  	}
  	?>
  	</table>
  	<?php
 }


?>

<?php 
echo "Course details:";
$sql2 = "SELECT studentId,CourseID,assignmentsDone FROM takenBy WHERE studentId='$id' and isCompleted=0";
$result = $mysqli->query($sql2);
if ($result->num_rows > 0){
    ?>
    <table border="1">
            <tr>
                <td>studentId</td>
                <td>CourseID</td>
                <td>assignmentsDone</td>
            </tr>

    <?php
    // print_r($result);
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row["studentId"]  ?></td>
            <td><?php echo $row["CourseID"]  ?></td>
            <td><?php echo $row["assignmentsDone"]  ?></td>
        </tr>
       
         <?php
     }
     ?>
     </table>
     <?php
}

 
echo "Course Completed";
$sql2 = "SELECT studentId,CourseID,Grade FROM takenBy WHERE studentId='$id' and isCompleted=1";
$result = $mysqli->query($sql2);
if ($result->num_rows > 0){
    ?>
    <table border="1">
            <tr>
                <td>studentId</td>
                <td>CourseID</td>
                <td>Grade</td>
            </tr>

    <?php
    // print_r($result);
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row["studentId"]  ?></td>
            <td><?php echo $row["CourseID"]  ?></td>
            <td><?php echo $row["Grade"]  ?></td>
        </tr>
       
         <?php
     }
     ?>
     </table>
     <?php
}


?>
<form action="loginS.php?studentId" method="get" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

<!-- <button class="button button1 "onclick="window.location.href = 'assup.php';">Assignment upload</button> -->
</body>
</html> 
