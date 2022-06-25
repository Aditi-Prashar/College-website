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
$office = $_POST['office'];
$rank= $_POST['rank'];

$sql = "INSERT INTO instructor (Name,office,rank) VALUES ('$name','$office','$rank')";

if ($mysqli->query($sql) === FALSE) {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
else{
    echo "Registered Succesfully";
}

?>