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
        <a href="/hms/dashboard_admin1.php" class="nav-link text-white">
         
        Scheduled Appointments
        </a>
      </li>
      <li>
        <a href="/hms/dashboard_admin1_prev.php" class="nav-link text-white" >
         Appointments Completed
        </a>
      </li>
      <li>
        <a href="/hms/dashboard_adddoc.php" class="nav-link text-white" >
         Add doctor
        </a>
      </li>
      <li>
        <a href="/hms/dashboard_addpatient.php" class="nav-link text-white active" aria-current="page">
         Add Patient Appointment
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
$sql ="SELECT * FROM `adminlogin`";
$result = mysqli_query($conn,$sql);
if(!$result){
  die("Error ==>".mysqli_connect_error());
}

$row=mysqli_fetch_assoc($result);
echo $row['username'];
if(isset($_POST['new2'])){
    $name3=$_POST['name'];
    $gender3=$_POST['gender'];
    $mobile3=$_POST['mobile'];
    $add13=$_POST['addpat'];
    $add23=$_POST['addpat2'];
    $city3=$_POST['addpatcity'];
    $state3=$_POST['statepat'];
    $pin3=$_POST['pinpat'];

  $sql ="INSERT INTO `patientdata` ( `name`, `gender`, `mobile`,`add1`,`add2`,`city`,`state`,`pin`, `dt`) VALUES ( '$name3', '$gender3', '$mobile3','$add13','$add23','$city3','$state3','$pin3', current_timestamp())";
  $result = mysqli_query($conn,$sql); 
  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Appointment Booked  succesfully!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>'; 
}
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
  <h5 id="welcomeuser"><strong>Add Patient Appointments</strong>
  </h5>
</div>
<!-- </section> -->
<!-- </div> -->
<form class="row g-3 mt-4" action="<?= $_SERVER['PHP_SELF']; ?>" method="post" role="form" id="form5">
        <div class="col-12">
        <label for="inputAddress" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputname"  name="name" required>
      </div>
      <label for="inputgender" class="form-label">Gender</label>
        <select id="inputgender" class="form-select mx-1" name="gender" required>
        <option>Choose...</option>
        <option>Male</option>
        <option>Female</option>
        <option>Others</option>
        </select>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Mobile</label>
        <input type="text" class="form-control" id="inputmobile" name="mobile" required>
      </div>
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
      <div class="col-md-12 my-5">
      <button type="submit" class="btn btn-primary" name="new2">Submit</button>
</div>
</div>
</div>
</div>
</div>
</div>
</form>


  
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