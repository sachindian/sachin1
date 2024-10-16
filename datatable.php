<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>fetch mysql data</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
td,th{
  font-size: 20px!important;
  font-family: serif, Courier;
}
tr:hover{
  color:navy;
}
</style>
</head>
<body>

<table  id="mytable" class="display table-bordered" style="width:100%">

<thead >
  <tr class="bg-primary text-white fw-bold"> 
    <th scope="col">Sr. No.</th>
    <th scope="col">Name</th>
    <th scope="col">Date of Birth</th>
    <th scope="col">Father's Name</th>
    <th scope="col">Address</th>
    <th scope="col">contact</th>
  </tr>
</thead>
<tbody >
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
    $conn->close();
    ;?>
    </tbody>
    </table>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
    new DataTable('#mytable');
        </script>

</body>
</html>

          
