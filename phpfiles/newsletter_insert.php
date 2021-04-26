<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "WebsiteDB";
$handler = mysqli_connect($host, $username, $password, $db) or die("Connection failed <br>" . mysqli_connect_error() . "<br>");
$email = $_POST['email'];


$query = "INSERT into email_list VALUES ('$email')";
$insert = mysqli_query($handler, $query);

if ($insert) {
    echo ' <script> alert("Your email has been added to our mailing list.") </script>';
} else {
    echo '<script>alert("Email insertion was unsuccesful. ")</script>';
}
mysqli_close($handler);
exit;
?>
