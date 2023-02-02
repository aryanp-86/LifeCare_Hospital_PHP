<?php
echo "Welcome for the connection<br>";
$servername = "localhost";
$username = "root";
$password = "";
$database="logindoctor";

$conn=mysqli_connect($servername,$username,$password,$database);


$sql = "CREATE TABLE `logindoctor`.`dococ` ( `sr.no` INT NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(25) NOT NULL ,  `gender` VARCHAR(25) NOT NULL ,  `number` INT(25) NOT NULL ,    PRIMARY KEY  (`sr.no`)) ";
$result = mysqli_query($conn,$sql);

if(!$result){
    die("Sorry we cannot create table ==>".mysqli_connect_error());
}
else{
    echo"Table bangaya bidu";
}
?>