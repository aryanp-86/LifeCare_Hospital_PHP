<?php
echo "Welcome for the connection<br>";
$servername = "localhost";
$username = "root";
$password = "";



$conn=mysqli_connect($servername,$username,$password);
$sql="CREATE DATABASE logindoctor";
mysqli_query($conn,$sql);


if(!$conn){
    die("Sorry we cannot connect".mysqli_connect_error());
}
else{
    echo"Kidhar the bhai aap";
}










?>