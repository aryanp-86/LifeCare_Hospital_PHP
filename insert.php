<?php
echo "Welcome for the connection<br>";
$servername = "localhost";
$username = "root";
$password = "";
$database="logindoctor";

$conn=mysqli_connect($servername,$username,$password,$database);


$sql = "INSERT INTO `dococ` ( `name`, `gender`, `number`) VALUES ( 'AP', 'male', '5151')";
$result = mysqli_query($conn,$sql);

if(!$result){
    die("Sorry we cannot insert table data ==>".mysqli_connect_error());
}
else{
    echo"Data le liya bidu";
}
?>
