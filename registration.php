<?php
//print_r($_POST);
if(isset($_POST['age'])){
$age=$_POST['age'];
if ($age>=18){
echo "elligible for DL";
}else{
	echo "not elligible for DL";
}}
?>
<form action="" method="POST">
<input type="number" name="age" id="age1">
<button type="submit">submit</button
</form>