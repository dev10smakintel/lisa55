<?php
$servername="localhost";
$hostname="root";
$password="";
$conn=mysqli_connect($servername,$hostname,$password,"fpdb");

if (!$conn) {
    echo "Connection failed";
    die("Connection failed: " . mysqli_connect_error());
}
?>
