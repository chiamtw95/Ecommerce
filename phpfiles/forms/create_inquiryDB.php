<?php

$host ="localhost";
$username = "root";
$password = "";
$db = "inquiry";
$handler = mysqli_connect($host,$username,$password) 
or die("Connection failed <br>" .mysqli_connect_error() . "<br>");

echo "Connected. <br>";

$create_table = "CREATE DATABASE inquiry";

mysqli_query($handler,$create_table) or die("Failed to create database <br>" . mysqli_error($handler));

echo "Database created succesfully. <br>";

mysqli_close($handler);
exit;
?>
