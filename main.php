<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="fs-5 bg-light ms-4 ">
<pre>	<?php

//program -1

echo "Program-1";
echo "<hr>";

for($i=1; $i<=5; $i++){
	for($j=1; $j<=$i; $j++){ echo "* ";}
	echo " ","<br>";};

//program-2

echo "<br>","Program-2","<hr>";

for($i=1; $i<=5; $i++){
	for($j=5; $j>=$i; $j--){ echo " *";}
	echo " ","<br>";};

//program-3
echo "<br>","Program-3","<hr>";

for($i=1; $i<=5; $i++){
	for($j=1; $j<=$i; $j++){ echo " *";}
	echo " ","<br>";};
for($i=1; $i<=5; $i++){
	for($j=5; $j>=$i; $j--){ echo " *";}
	echo " ","<br>";};

//program-4
echo "<br>","Program-4","<hr>";

for($i=1; $i<=5; $i++){
	for($j=1; $j<=$i; $j++){ echo " *";}
	echo " ","<br>";};
for($i=1; $i<=5; $i++){
	for($j=5; $j>=$i-1; $j--){ echo " *";}
	echo " ","<br>";};


//program-5

echo "<br>","program-5","<hr>";

for ($i = 0; $i <= 5; $i++) {
    for ($k = 5; $k >= $i; $k--) {echo " ";}
    for ($j = 1; $j <= $i; $j++) { echo "* ";}
    echo "<br>"; };

for ($i = 4; $i >= 1; $i--) {
    for ($k = 5; $k>= $i; $k--) {echo " "; }
    for ($j = 1; $j <= $i; $j++) { echo "* ";}
    echo "<br>"; };

	
?>


<div class="modal fade" tabindex="-1" id="modal1" aria-hidden="true" aria-labelledby="examplemodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="examplemodal">find Even/Odd Number</h5>
				<button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="close"></button>
			</div>
	
		<div class="modal-body text-wrap">
				
		<?php
			if(isset($_POST['digit'])){
			$digit=$_POST['digit'];
			
			if($digit%2==0){
			echo "<h4>Even </h4>","<br>";
			echo "The number ",$digit," is divisible by 2";
			}
			else{
			echo "<h4>Odd </h4>","<br>";
			echo "The number ",$digit," is not divisible by 2";
			}};
		?>

			</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
			<button type="button" class="btn btn-primary">Submit</button>
		</div>
</div>
</div>
</div>
<div class="row  rounded bg-info w-75   text-success text-bold">
	<form action="" method="POST">
<h3>Check Even Odd Number </h3>

<input type="number" name="digit" class="form-control form-control-lg" placeholder="Enter any number :-">
<button type="button" name="submit" class="btn btn-primary btn-lg ms-auto d-flex " data-bs-toggle="modal" data-bs-target="#modal1">submit</button>
	</form>
	</div>
</pre>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- jQuery -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>