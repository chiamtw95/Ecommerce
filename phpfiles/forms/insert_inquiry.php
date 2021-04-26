<?php

$host ="localhost";
$username = "root";
$password = "";
$db = "inquiry";
$handler = mysqli_connect($host,$username,$password,$db)
or die("Connection failed <br>" .mysqli_connect_error() . "<br>");
$email = $_POST['email'];

echo "Connected. <br>";

//todo
$insert_data = "INSERT into email_list VALUES ('$email')";

mysqli_query($handler,$insert_data) or die("Failed to insert email. <br>" . mysqli_error($handler));

echo "Email inserted succesfully. <br>";

mysqli_close($handler);
exit;
?>
