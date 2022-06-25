<?php

// database connection
$mysqli = new mysqli("localhost","root","","college");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// echo "success"

$name = $_POST['Uname'];
$email = $_POST['email'];
$DOB= $_POST['DOB'];
$phnno= $_POST['phnno'];
$pass=$_POST['password'];

$sql = "INSERT INTO student (Name,DOB,PhnNo,Email,password) VALUES ('$name','$DOB','$phnno','$email','$pass')";

if ($mysqli->query($sql) === FALSE) {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
else{
    echo "Registered Succesfully";
}

?>