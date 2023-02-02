<?php
// echo "Hello World\n";
// echo  5+5;
$name = "Aryan";
$income = "150";
echo strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo str_replace("Aryan","Prajwal",$name);
echo "<br>";
echo str_replace("Prajwal","Aryan",$name);
echo "<br>";
echo strpos($name,"Aryan");
echo "<br>";
echo strrev($name);
echo "<br>";
echo str_repeat($name,5);
echo "<br>";
echo "<pre>";
echo rtrim("    hi broskiii  ");
echo "</pre>";
?>