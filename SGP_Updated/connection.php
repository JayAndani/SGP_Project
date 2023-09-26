<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhupat";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "php  connection succesful";
}
else
{
    die("connection failed" .mysqli_connect_error());
}
?>