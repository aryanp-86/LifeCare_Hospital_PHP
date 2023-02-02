<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <title>LifeCare Hospital</title>
    <style>
.mydash{
    width: 280px;
    height: 713px;
    margin-left:-120px;
    position: fixed;
}
.imglogo{
    width: 50px;
    height: 50px;
}
#spcard{
  color: #fff;
    margin:0px -120px 10px -60px;
    padding: 30px;
    text-align: center;
    border-radius: 5px 5px 0px 0;
    font-size: 24px;
    font-weight: 600;
}
#welcomeuser{
  background: linear-gradient(to right,#2ea1ad,#1378bd);
  color: #012630;
  margin: 0px -140px 10px -85px;
    padding: 40px;
    text-align: left;
    border-radius: 5px 5px 0 0;
    font-size: 24px;
    font-weight: 600;
}
    </style>
    <script>
    document.getElementById("myButton").onclick = function () {
        location.href = "/hms/dashboard_patient2.php";
    };
</script>
  </head>
  <body>
  
  <div class="container">
  <div class="row">
    <div class="col-sm-2">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark my-0 mydash">
    <a href="/hms/dashboard_patient.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="LifeCare Hospital Logo.png" class="img-fluid rounded-start my-3 mx-1 imglogo">
      <span class="fs-5">LifeCare Hospital</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/hms/dashboard_patient.php" class="nav-link active" aria-current="page">
         
         Find a Doctor
        </a>
      </li>
      <li>
        
      </li>
      <li>
        <a href="/hms/Prev_appointment.php" class="nav-link text-white">
          Your Appointments
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="user img.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$database="logindoctor";

$conn=mysqli_connect($servername,$username,$password,$database);
$sql ="SELECT * FROM `patientdata`";
$result = mysqli_query($conn,$sql);
if(!$result){
  die("Error ==>".mysqli_connect_error());
}

$row=mysqli_fetch_assoc($result);
echo $row['name'];
?>
</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="/hms/websitemain.php">Sign out</a></li>
      </ul>
    </div>
<!-- </div> -->
</div>
    </div>
   
    <!-- <div class="col"> -->
  
  <div class="col-sm-10">
  <!-- <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;"> -->
  <!-- <section class="container-fluid"> -->
<h5 id="spcard" class="bg-dark">Dashboard</h5>
<div class="container-xl">
  <h5 id="welcomeuser">Welcome,
<strong>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="logindoctor";

$conn=mysqli_connect($servername,$username,$password,$database);
$sql ="SELECT * FROM `patientdata`";
$result = mysqli_query($conn,$sql);
if(!$result){
  die("Error ==>".mysqli_connect_error());
}

$row=mysqli_fetch_assoc($result);
echo $row['name'];
?>
</strong>
  </h5>
</div>
<!-- </section> -->
<!-- </div> -->
<table class="table table-striped table-success" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.no.</th>
      <th scope="col">Doctor's Name</th>
      <th scope="col">Speciality</th>
      <th scope="col">OPD Time</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
<?php
$servername ="localhost";
$username ="root";
$password ="";
$database="logindoctor";

$conn=mysqli_connect($servername,$username,$password,$database);
$sql ="SELECT * FROM `doctordata`";
$result = mysqli_query($conn,$sql);
if(!$result){
  die("Error ==>".mysqli_connect_error());
}
if(isset($_POST['submit1'])){
  $add1=$_POST['addpat'];
  $add2=$_POST['addpat2'];
  $city=$_POST['addpatcity'];
  $state=$_POST['statepat'];
  $pin=$_POST['pinpat'];
$sno=1;
  $sql = "UPDATE `patientdata` SET `add1` = '$add1', `add2` = '$add2', `city` = '$city', `state` = '$state', `pin` = '$pin' WHERE `sr.no` = '$sno';";
$result = mysqli_query($conn,$sql);  
$sno++;
header("Location: dashboard_patient2.php");
    exit;
}
while($row=mysqli_fetch_assoc($result)){
echo"<tr>
<th scope='row'>".$row['sr.no']."</th>
<td>".$row['dname']."</td>
<td>".$row['spec']."</td>
<td>".$row['opdtime']."</td>
<td> <button class='btn btn-success' data-bs-toggle='modal' data-bs-target='#bookModal'>Book an appointment</button> </td>
</tr>";
}
?>

<div class="modal fade" id="bookModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Just Some Extra Details</h5>
      </div>
      <div class="modal-body">
      <form class="row g-3" action="<?= $_SERVER['PHP_SELF']; ?>" method="post" role="form" id="form3">
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address 1</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="addpat" required>
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="addpat2">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity" name="addpatcity" required>
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" class="form-select" name="statepat" required>
          <option selected>Choose...</option>
          <option>Andhra Pradesh</option>
          <option>Arunachal Pradesh</option>
          <option>Assam</option>
          <option>Bihar</option>
          <option>Chhattisgarh</option>
          <option>Goa</option>
          <option>Gujarat</option>
          <option>Haryana</option>
          <option>Himachal Pradesh</option>
          <option>Jharkhand</option>
          <option>Karnataka</option>
          <option>Kerala</option>
          <option>Madhya Pradesh</option>
          <option>Maharashtra</option>
          <option>Manipur</option>
          <option>Meghalaya</option>
          <option>Mizoram</option>
          <option>Nagaland</option>
          <option>Odisha</option>
          <option>Punjab</option>
          <option>Rajasthan</option>
          <option>Sikkim</option>
          <option>Tamil Nadu</option>
          <option>Telangana</option>
          <option>Tripura</option>
          <option>Uttar Pradesh</option>
          <option>Uttarakhand</option>
          <option>West Bengal</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="inputZip" class="form-label">Pin Code</label>
        <input type="text" class="form-control" id="inputZip" name="pinpat" required>
      </div>
      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="myButton" name="submit1">Proceed towards booking</button>
      </div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</form>
      </button> 
      


  </tbody>
</table>
</div>

</div>
</div>




  
<!-- <div class="col"> -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->

    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
     $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
    
  </body>
</html>