<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
<style>
#spcard{
  background: linear-gradient(to right,#2ea1ad,#1378bd);
  color: #fff;
    margin: 0;
    padding: 20px;
    text-align: center;
    border-radius: 5px 5px 0 0;
    font-size: 24px;
    font-weight: 600;
}
#spcardbody{
  padding: 0px;
}
.spd{
  color:#1378BD;
  font-size:16px;
  font-family:Helvetica;
  font-weight:700;
  margin-bottom:0px;
}
.imgspd{
  height:21px;
}
</style>


    <title>LifeCare Hospital</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LifeCare Hospital</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link"
                aria-current="page"
                href="/hms/websitemain.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/hms/contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://rzp.io/l/PdCdWBi7NU">Donate Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$feed =$_POST['feed'];



$servername = "localhost";
$username = "root";
$password = "";
$database="logindoctor";

$conn=mysqli_connect($servername,$username,$password,$database);
$sql ="INSERT INTO `contactus` ( `name`, `email`, `mobile number`, `feedback`) VALUES ( '$name', '$email', '$mobile', '$feed')";
$result = mysqli_query($conn,$sql);

if(!$result){
    die("Sorry we cannot insert table data ==>".mysqli_connect_error());
}
else{
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Your feedback has been submitted successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
}
?>
    <div class="row row-cols-1 row-cols-md-3 g-3">
    <div class="col">
    <div class="card mb-4 pb-3 my-5 mx-4 card border-primary h-75" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-2">
      <img src="pin.png" class="img-fluid rounded-start my-4 mx-3" alt="...">
    </div>
    <div class="col-md-8 ">
      <div class="card-body" style="text-align:center"; >
        <h5 class="card-title" style="color:blue";>Address</h5>
        <p class="card-text">666, Upper Indiranagar,</p>
        <p class="card-text mx-3">Bibwewadi,Pune, Maharashtra, India - 411 037.</p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col">
<div class="card mb-4 pb-3 my-5 mx-4 card border-primary h-75" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-2">
      <img src="mail.png" class="img-fluid rounded-start my-4 mx-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body" style="text-align:center";>
        <h5 class="card-title" style="color:blue";>Email Us</h5>
        <p class="card-text">General Enquiries: info@lifecarehospital.org</p>
        <p class="card-text">Billing/Finance Enquiries: finance@lifecarehospital.org</p>
        <p class="card-text">Career Enquiries: hr@lifecarehospital.org</p>
        
      </div>
    </div>
  </div>
</div>
</div>
<div class="col">
<div class="card mb-4 pb-3 my-5 mx-4 card border-primary h-75" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-2">
      <img src="smartphone.png" class="img-fluid rounded-start my-4 mx-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body" style="text-align:center";>
        <h5 class="card-title" style="color:blue";>Enquiry Desk</h5>
        <p class="card-text my-3">(Mon-Sat, 9:00 AM – 5:00 PM)</p>
        <p class="card-text">+91 - 20 - 2420 2180/190/ 115</p>
        <p class="card-text">9373991682 / 9359207819 /9373920122</p>
                            
        </p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<hr style="background: linear-gradient(to right,#2ea1ad,#1378bd)"; >
<div class="row row-cols-1 row-cols-md-2 g-2 my-5">
    <div class="col">
<div class="card mx-4 border-primary" style="width: 45rem;">
  
  <div class="card-body" id="spcardbody" style="text-align:center";>
    <h5 class="card-title" id="spcard" >Contact Us</h5>
  </div> 
  <ul class="list-group list-group-flush" id="spul">
    <li class="list-group-item mx-2 my-3 border-primary spd"><img src="smartphone.png" class="img-fluid rounded-start my-4 mx-1 imgspd" alt="...">Emergency</li>
    <p class="mx-4">+91 - 20 - 2420 2180/190/ 115</p>
    <li class="list-group-item mx-2 my-3 border-primary spd"><img src="smartphone.png" class="img-fluid rounded-start my-4 mx-1 imgspd" alt="...">Ambulance</li>
    <p class="mx-4">+91 - 20 - 2420 2180/190/ 115</p>
    <li class="list-group-item mx-2 my-3 border-primary spd"><img src="smartphone.png" class="img-fluid rounded-start my-4 mx-1 imgspd" alt="..."24-hr> Pharmacy</li>
    <p class="mx-4">+91 - 20 - 2420 2180/190/ 115</p>
    <li class="list-group-item mx-2 my-3 border-primary spd"><img src="smartphone.png" class="img-fluid rounded-start my-4 mx-1 imgspd" alt="...">Blood Bank</li>
    <p class="mx-4">+91 - 20 - 2420 2180/190/ 115</p>
  </ul>
</div>
</div>
  <div class="col">
  <div class="card mx-4 border-primary" style="width: 45rem;">

  <div class="card-body" id="spcardbody" style="text-align:center";>
    <h5 class="card-title" id="spcard" >Feedback Form</h5>
  </div> 
  <div class="mb-3">
    <form class="container" action="/hms/contact.php" method="post">
    <label for="exampleInputEmail1" class="form-label spd mx-2">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
    <label for="exampleInputEmail1" class="form-label spd mx-2">Mobile Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mobile">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label spd mx-2">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label spd mx-2">Tell us how can we improve</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="feed"></textarea>

</div>
<button type="submit" class="btn btn-primary">Submit</button>
 </form> 
</div>
  
</div>
    
</div>

  <!-- <form class="text-center mx-5"><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JLCGvVT9Mz6kbF" async> </script> </form>    Option 2: Separate Popper and Bootstrap JS -->
</div>
<!-- <div class="container"> -->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.442128793463!2d73.86601501468752!3d18.463621887442223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ea950f616219%3A0x321bdae2cea9f064!2sVishwakarma%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1650345742918!5m2!1sen!2sin" width="1490px" height="250px" style="border:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="my-3"></iframe>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
