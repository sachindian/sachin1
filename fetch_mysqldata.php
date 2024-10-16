<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>fetch mysql data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<table class="table table-bordered table-hover  table-responsive-md ">
  <tr class="table-info"> 
    <th scope="col">Sr. No.</th>
    <th scope="col">Name</th>
    <th scope="col">Date of Birth</th>
    <th scope="col">Father's Name</th>
    <th scope="col">Address</th>
    <th scope="col">contact</th>
  </tr>

  <?php
require_once('../database.php');

  $sql='select name,dob,fname,address,contact from profile';
  $result=mysqli_query($conn,$sql);
  $i=1;
    while($data=mysqli_fetch_assoc($result)){
    echo "<tr>";
      echo "<th>". $i."</th>",
      "<td>". $data['name']."</td>",
      "<td>" .$data['dob']. "</td>",
       "<td>".$data['fname']."</td>",
       "<td>". $data['address']."</td>",
      "<td>". $data['contact']."</td>";

    $i++;}
    ;?>
    
</table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

          
