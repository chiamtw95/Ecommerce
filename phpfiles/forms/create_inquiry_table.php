<?php

$host ="localhost";
$username = "root";
$password = "";
$db = "inquiry";
$handler = mysqli_connect($host,$username,$password,$db)
or die("Connection failed <br>" .mysqli_connect_error() . "<br>");

echo "Connected. <br>";
//todo
$create_table = "CREATE TABLE inquiry( email VARCHAR(50))";

mysqli_query($handler,$create_table) or die("Failed to create table <br>" . mysqli_error($handler));

echo "Table created succesfully. <br>";

mysqli_close($handler);
exit;
?>
