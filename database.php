<?php

$host='127.0.0.1';
$user='root';
$password='root';
$db='student';

$conn=mysqli_connect($host,$user,$password,$db); 
if (!$conn) {
  die('connection failed '.mysqli_connect_error());
}
echo 'connection successfully';



?>