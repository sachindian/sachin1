<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
  <title>form</title>
<style>
  input{
    font-size: 18px!important;
    padding-bottom: 0px!important
  }
  label{
    font-size: 20px!important;
  } 
  .bg-primary1{
    background: #A0CFEC!important;
  }
  .align{
    justify-content: space-between;
  }
</style>
</head>

<body>
 
<div class="container-fluid  d-flex   rounded  ">


  <div class=" col-md-6 bg-light  p-3 ">
  <div class=" row mt-1 d-flex align">
<h1 class=" text-start fw-bold w-50">Add Staff</h1>
  <button id="records" class="   w-50 btn btn-warning  mt-0 mb-3 p-0">Recent records</button>
  </div>
    
    <form action="" method="post">  

    <div class="row g-2">
    <div class=" col-6 my-2">
      <div class="form-floating">
      <input type="text" id="fname" class="form-control bg" name="first_name" placeholder="First Name">
      <label for="fname">First Name</label>
    </div></div>
    
    <div class=" col-6 my-2">
      <div class="form-floating">
      <input type="text" id="lname" class="form-control" name="last_name" placeholder="Last Name">
      <label for="lname">Last Name</label>
    </div>
    </div>
    </div>
    
    <div class="my-2 form-floating">
      <input type="text" id="location" class="form-control" name="location" placeholder="location">
      <label for="">Location of Residence</label>
    </div>
    
    <div class="my-2 form-floating">
      <input type="text" id="contact" class="form-control" name="contact" placeholder="contact">
      <label for="">Contact</label>
    </div>
    
    <div class="my-2 form-floating">
    <select name="designation" id="designation" class="form-select" placeholder="designation">
      <option value="0">Select your designation</option>
      <option value="manager">Manager</option>
    <option value="emp">Employee</option>
    </select>
    <label for="designation">designation</label>
    </div>
    
    <div class="my-2 form-floating">
    <select name="manager" id="manager" class="form-select" placeholder="manager">
      <option value="0">Select your manager</option>
      <option value="ram">Ram</option>
    <option value="shyam">Shyam</option>
    <option value="shudheer">Shudheer</option>
    <option value="shubhanshu">Shubhanshu</option>
    </select>
    <label for="manager">Manager</label>
    </div>
    
<button type="submit" class="text-center btn btn-outline-primary text-dark  w-100 fw-bold fs-4 "  name="submit" value="submit">Submit</button>
</form>
</div>
  

    <div class="col-md-6 " id="table1" class="">
<table  id="mytable1" class="display  table-bordered d-none" style="width:100%">

<thead >
  <tr class=" border-white  bg-primary text-white fw-bold"> 
    <th scope="col">Sr. No.</th>
    <th scope="col">Name</th>
    <th scope="col">Address</th>
    <th scope="col">Contact</th>
    <th scope="col">designation</th>
    <th scope="col">Manager</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody class="border border-success">
  <?php
require_once('../database.php');

/*
$createTable="create table staff(id int auto_increment primary key,
                                name varchar(100) not null,
                                address varchar(100) not null,
                                contact varchar(20) not null,
                                designation varchar(100) not null,
                                manager varchar(100) not null,
                                created_at timestamp DEFAULT CURRENT_TIMESTAMP)";

if(mysqli_query($conn,$createTable)){
  echo'created';
}else{echo "error".mysqli_error();}*/
if(!empty($_POST['submit'])){
  

$name=$_POST['first_name']." ".$_POST['last_name'];
$address=$_POST['location'];
$contact=$_POST['contact'];
$designation=$_POST['designation'];
$manager=$_POST['manager'];

$data_insert="insert into staff(name, address ,contact,designation,manager)
                  values('$name','$address','$contact','$designation','$manager');";

if(!mysqli_query($conn,$data_insert)){
  die('eror');
}
  
};


  $sql='select name,address,contact,designation,manager from staff';
  $result=mysqli_query($conn,$sql);
  $i=1;
    while($data=mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo $data['name'];?></td>
      <td><?php echo $data['address'];?></td>
      <td><?php echo $data['contact'];?></td>
      <td><?php echo $data['designation'];?></td>
      <td><?php echo $data['manager'];?></td>
      <td>edit</td>
    </tr>
    <?php
    $i++;}
    
    ;?>
    </tbody>
    </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
const record=document.getElementById('records');
record.addEventListener('click',function(){
  var table=document.getElementById('mytable1');

  table.classList.remove('d-none');

});
  const table= new DataTable('#mytable1');
  

</script>

</body>

</html>
