<?php
$server_name="localhost";
$username="abinayasri";
$password="Abinaya@16";
$db="student";
$conn=mysqli_connect($server_name,$username,$password,$db);
if(mysqli_connect_error()){
    echo "connection error";
}
else{
    echo "<script>alert('connection success');</script>";
}
?>