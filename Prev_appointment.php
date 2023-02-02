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
        <a href="/hms/dashboard_patient.php" class="nav-link">
         
         Find a Doctor
        </a>
      </li>
      <li>
        <a href="/hms/Prev_appointment.php" class="nav-link text-white active" aria-current="page">
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
  <h5 id="welcomeuser"><strong>Your Scheduled Appointments</strong>
  </h5>
</div>
<!-- </section> -->
<!-- </div> -->
<table class="table table-striped table-success" id="myTable">
  <thead>
    <tr>
    <th scope="col">Sr.no</th>
      <th scope="col">Doctor's Name</th>
      <th scope="col">Slot Choosen</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database="logindoctor";

$conn=mysqli_connect($servername,$username,$password,$database);
$sql ="SELECT * FROM `patientdata` WHERE `sr.no`= 1 ";
$result = mysqli_query($conn,$sql);
if(!$result){
  die("Error ==>".mysqli_connect_error());
}
while($row=mysqli_fetch_assoc($result)){
echo"<tr>
<th scope='row'>".$row['sr.no']."</th>
      <td>". $row['doc'] . "</td>
      <td>". $row['slot'] . "</td>
      <td><button class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#deleteModal'>Delete</button></td>
      </tr>";
}
if(isset($_POST['delete1'])){
    $sno=1;
    $sql = "DELETE FROM `patientdata` WHERE `sr.no` = '$sno';";
  $result = mysqli_query($conn,$sql);  
  $sno++;
  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your appointment has been deleted successfully!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
?>
  </tbody>
</table>
 
<div class="modal fade" id="deleteModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <h5 class="modal-title">Are you sure you want delete this appointment?</h5>
</div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" name="delete1">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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