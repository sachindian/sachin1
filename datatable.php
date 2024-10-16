<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>fetch mysql data</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
</head>
<body>

<table  id="mytable" class="display dataTable" style="width:100%">

<thead>
  <tr> 
    <th>Sr. No.</th>
    <th>Name</th>
    <th>Date of Birth</th>
    <th>Father's Name</th>
    <th>Address</th>
    <th>contact</th>
  </tr>
</thead>
<tbody>
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
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <script>
    new DataTable('#mytable');
        </script>

</body>
</html>

          
