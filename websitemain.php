<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <a href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <link rel="stylesheet" href="/hms/buttoncomp.css"> 
   <title>LifeCare Hospital</title>
    <style>
.spd{
  text-align:center;
  font-family:Helvetica;
}
.gen{
  font-size:18px;
}
.spd1{
  background: linear-gradient(to right,#2ea1ad,#1378bd);
}
body{
  background:#a7c8cc;
}
.border-bottom{
  color:#3d666b
}
.spd2{
  color:#2ea1bd;
}
.load{
  background-color:transparent;
}

    </style>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>   -->
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>

<!-- Banner for new -->
  <div class="bg-indigo-900">
      <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between flex-wrap">
          <div class="w-0 flex-1 flex items-center">
            <span class="flex p-2 rounded-lg bg-indigo-800">
              <SpeakerphoneIcon class="h-6 w-6 text-white" aria-hidden="true" />
            </span>
            <p class="ml-3 font-small text-white truncate">
              <span class="md:hidden">Note:</span>
              <span class="hidden md:inline font-sans mx-1.5">Covid 19 and Vaccination updates for Patients and Visitors</span>
            </p>
          </div>
          <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
            <a href="#"
              class="flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-indigo-600 bg-white hover:bg-indigo-50">
              Learn more
            </a>
          </div>
          <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
            <button
              type="button"
              class="-mr-1 flex p-2 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2"
            >
              <span class="sr-only">Dismiss</span>
              <XIcon class="h-6 w-6 text-white" aria-hidden="true" />
            </button>
          </div>
        </div>
      </div>
    </div>

  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/hms/websitemain.php">LifeCare Hospital</a>
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
                class="nav-link active"
                aria-current="page"
                href="/hms/websitemain.php"
                target="_blank"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/hms/contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://rzp.io/l/PdCdWBi7NU">Donate Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="logindoctor";

$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['submit_1'])){
$name = $_POST['name1'];
$gender = $_POST['Gender'];
$mobile = $_POST['mobile1'];

$sql ="INSERT INTO `patientdata` ( `name`, `gender`, `mobile`, `dt`) VALUES ( '$name', '$gender', '$mobile', current_timestamp())";
$result = mysqli_query($conn,$sql);
if(isset($_POST['submit_1'])){
header("Location: dashboard_patient.php");
    exit;
}


if(!$result){
    die("Sorry we cannot insert table data ==>".mysqli_connect_error());
}
else{
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> You have registered successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
  }
  if(isset($_POST['login2'])){
    $username5=$_POST['userid2'];
    $password5=$_POST['password2'];
    $sql ="SELECT * FROM `doclogin` WHERE username='".$username5."' AND password='".$password5."'";
    $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
  if($num >= 1){
    header("Location: /hms/dashboard_chetan.php");
    exit;
}
else{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Login unsuccessful!</strong> Please check username or password
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
  }
  if(isset($_POST['login3'])){
    $username6=$_POST['userid3'];
    $password6=$_POST['password3'];
    $sql ="SELECT * FROM `adminlogin` WHERE username='".$username6."' AND password='".$password6."'";
    $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
  if($num >= 1){
    header("Location: /hms/dashboard_admin1.php");
    exit;
}
else{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Login unsuccessful!</strong> Please check username or password
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
  }
?>

<!-- New HeroSection -->
<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>

      <div>
        <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
          <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
              <div class="flex items-center justify-between w-full md:w-auto">
                <a href="#">
                  <span class="sr-only">Workflow</span>
                  <img alt="Workflow" class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">
                </a>
                <div class="-mr-2 flex items-center md:hidden">
                  <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
              <a href="/hms/websitemain.php" class="font-medium text-gray-500 hover:text-gray-900">Home</a>

              <a href="/hms/contact.php" class="font-medium text-gray-500 hover:text-gray-900">Contact Us</a>

              <a href="https://rzp.io/l/PdCdWBi7NU" class="font-medium text-gray-500 hover:text-gray-900">Donate Us</a>

              
              <button class="font-medium text-indigo-600 hover:text-indigo-500" data-bs-toggle="modal" data-bs-target="#AdminLogin">Log in</button>
            </div>
          </nav>
        </div>

        <!--
          Mobile menu, show/hide based on menu open state.

          Entering: "duration-150 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
        <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
          <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
              <div>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
              </div>
              <div class="-mr-2">
                <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                  <span class="sr-only">Close main menu</span>
                  <!-- Heroicon name: outline/x -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="px-2 pt-2 pb-3 space-y-1">
              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Home</a>

              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Contact Us</a>

              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Donate Us</a>

            </div>
            <a href="#" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100"> Log in </a>
          </div>
        </div>
      </div>

      <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
          <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block xl:inline">LifeCare Hospital</span>
            <div class="wrapper">
            <span class="text-purple-800 font-bold antialiased lg:text-4xl ">Your Health,Our Priority</span>
            </div>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">Multi-specialty hospital with more than 100 years of superior ethical medical care</p>
          <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
            <button class="w-full flex button-book items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md md:py-4 md:text-lg md:px-10" data-bs-toggle="modal" data-bs-target="#PatientBooking"> Book an Appointment </button>            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/hms/patty-brito-Y-3Dt0us7e0-unsplash.jpg" alt="">
  </div>
</div>
<!-- End of HeroSection -->

    <!-- <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" style="height: 500px";>
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-href="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-href="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-href="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 500px";>
      <img src="female doctor.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3 class="spd2">LifeCare Hospital</h3 class="spd2">
        <p>Your Health,Our Priority</p>
      </div>
    </div>
    <div class="carousel-item" style="height: 500px";>
      <img src="hospital.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" style="height: 500px";>
      <img src="doctor image.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
<!-- Start of praise section -->
<section class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-800 border-opacity-40 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/hms/n1.png" alt="blog"/>
          <div class="p-6">
            <h2 class="tracking-widest text-lg font-sans title-font font-medium text-white">WHY CHOOSE LIFECARE HOSPITAL?</h2>
            <p class="leading-relaxed mb-3 mt-3">We are multispecialty hospital with more than 20 years of experience in this sector.</p>
            <div class="flex items-center flex-wrap ">
                
              
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-800 border-opacity-40 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/hms/n2.jpg" alt="blog"/>
          <div class="p-6">
            <h2 class="tracking-widest text-lg title-font font-sans font-medium text-white">WHAT'S NEW?</h2>
            <p class="leading-relaxed mb-3 mt-3">Click on learn more to know more about new events and news about LifeCare Hospital.</p>
            <div class="flex items-center flex-wrap">
                
              
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-800 border-opacity-40 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/hms/n3.jpg" alt="blog"/>
          <div class="p-6">
            <h2 class="tracking-widest text-lg font-sans title-font font-medium text-white">EVENT CALENDER</h2>
            <p class="leading-relaxed mb-3 mt-3">Mark your calender with upcoming health awareness days,camps and events at LifeCare Hospital.</p>
            <div class="flex items-center flex-wrap ">
               
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end of praise -->
<!-- Start of info section -->
<div class="py-12 bg-gray-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
          <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
          Support System of Excellence
          </p>
          <p class="mt-4 max-w-2xl text-xl font-bold text-indigo-700 lg:mx-auto">
           We at LifeCare Hospital tend to provide services which can serve the patients and visitors with utmost care and support.
          </p>
        </div>
        
        <img src="/hms/Praise1.jpg"/ width="50%" height="500px" class="content-center"></img>   
          
        <img src="/hms/Praise2.jpg"/ width="50%" height="500px"></img>

</div>
</div>
<!-- End of info Section -->
</div>
<!-- Start of button comp -->
<section class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4 ">
      <div class="p-4 lg:w-1/3 transition ease-in-out delay-150 bg-white-500 hover:-translate-y-1 hover:scale-110 hover:bg-grey-500 duration-300 ...">
        <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative ">
          <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Admin Login</h1>
          <p class="leading-relaxed mb-3 ">Dashboard login for Admin.</p>
          <div class="rounded-sm shadow my-11">
          <button>
            <label for="my-modal-4" class="btn modal-button w-auto button-new flex-sm items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-md text-black md:py-4 md:text-sm md:px-10 my-8" data-bs-toggle="modal" data-bs-target="#AdminLogin">Login for Dashboard</label>
          </button>
          </div>
        </div>
      </div>
      <div class="p-4 lg:w-1/3 transition ease-in-out delay-150 bg-white-500 hover:-translate-y-1 hover:scale-110 hover:bg-grey-500 duration-300 ...">
        <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Doctor Login</h1>
          <p class="leading-relaxed mb-3">Dashbaord login for doctors</p>
          <div class="rounded-sm shadow my-11">
          <button>
            <label for="my-modal-4" class="btn modal-button w-auto button-new flex-sm items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-md text-black md:py-4 md:text-sm md:px-10 my-8" data-bs-toggle="modal" data-bs-target="#DoctorLogin">Login for Dashboard</label>
          </button>
          </div>
        </div>
      </div>
      <div class="p-4 lg:w-1/3 transition ease-in-out delay-150 bg-white-500 hover:-translate-y-1 hover:scale-110 hover:bg-grey-500 duration-300 ...">
        <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Patient Register</h1>
          <p class="leading-relaxed mb-3">Register yourself and book an appointment for world class doctors</p>
          <div class="rounded-sm shadow my-8 ">
          <button>
            <label for="my-modal-4" class="btn modal-button w-auto button-new flex-sm items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-md text-black md:py-4 md:text-sm md:px-10 my-8" data-bs-toggle="modal" data-bs-target="#PatientBooking">Book an Appointment </label>
            </button>
          </div>
         
          
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- End of button comp -->
<!-- <div class="row row-cols-1 row-cols-md-3 g-3">
    <div class="col">
    <div class="card mb-4 pb-3 my-5 mx-4 card border-primary h-40 spd1" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-2">
      <img src="smartphone.png" class="img-fluid rounded-start my-4 mx-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body" >
        <h5 class="card-title spd" >Admin Login</h5>
        <p class="card-text my-5 spd">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#AdminLogin">
  Login for Dashboard
</button> -->

<!-- Modal -->
<div class="modal fade" id="AdminLogin" tabindex="-1" aria-labelledby="AdminLogin" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AdminLogin">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" role="form" id="form1">
  <div class="mb-3">
    <label for="name" class="form-label">User Id</label>
    <input type="text" class="form-control" id="userid3" name="userid3" aria-describedby="userid1" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password3" name="password3">
  </div>
<!-- extra -->

<!-- extra -->
  <button type="submit" class="button-book btn btn-primary" name="login3">Login</button>
</form>
      </div>
      
    </div>
  </div>
</div>
        </p>
       
      </div>
    </div>
  </div>
</div>
</div>

<!-- <div class="col">
<div class="card mb-4 pb-3 my-5 mx-4 card border-primary h-40 spd1" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-2">
      <img src="smartphone.png" class="img-fluid rounded-start my-4 mx-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title spd">Doctor Login</h5>
        <p class="card-text my-5 spd">
          
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DoctorLogin">
        Login for Dashboard
</button> -->

<!-- Modal -->
<div class="modal fade" id="DoctorLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" role="form" id="form2">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Id</label>
    <input type="text" class="form-control" id="name2" aria-describedby="emailHelp" name="userid2">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password2">
  </div>
<!-- extra -->
<!-- extra -->
  <button type="submit" class="button-book btn btn-primary" name="login2">Login</button>
</form>
      </div>
</div>
</div>
</div>
        </p>
        
        
      </div>
    </div>
  </div>
</div>
</div>
<!-- <div class="col">
<div class="card mb-4 pb-3 my-5 mx-4 card border-primary h-40 spd1" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-2">
      <img src="smartphone.png" class="img-fluid rounded-start my-4 mx-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title spd mx-3">Patient Register</h5>
        <p class="card-text my-5 spd">
          Button trigger modal -->
<!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#PatientBooking">
  Book an Appointment
</button> -->

<!-- Modal -->
<div class="modal fade" id="PatientBooking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" role="form" id="form3">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name1">
    <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1Gender" name="mobile1">
  </div>
<!-- extra -->
<label for="gender" class="form-label mb-3 gen">Gender</label>
<div class="form-check mb-3">
  <input class="form-check-input" type="radio" name="Gender" id="Male" value="Male">
  <label class="form-check-label" for="Male">
    Male
  </label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="radio" name="Gender" id="Female" value="Female">
  <label class="form-check-label" for="Female">
    Female
  </label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="radio" name="Gender" id="Others" value="Others">
  <label class="form-check-label" for="Others">
    Others
  </label>
</div>
<!-- extra -->
  <button type="submit" class="button-book btn btn-primary" name="submit_1">Submit</button>
</form>
      </div>
      
    </div>
  </div>
</div>
        
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<footer class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
      <img src="/hms/Lifecare Hospital Logo.png" alt='' fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full" viewBox="0 0 24 24"/>
      
      <span class="ml-3 text-xl">LifeCare Hospital</span>
    </a>
    <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© LifeCare Hospital
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-400">
        <svg fill="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-400">
        <svg fill="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-400">
        <svg fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-400">
        <svg fill="currentColor" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
       
    </span>
  </div>
</footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>