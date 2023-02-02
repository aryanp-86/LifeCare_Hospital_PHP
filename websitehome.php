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
    <title>LifeCare Hospital</title>
    <style>
/* .c1{ */
    /* background:#007bff;
    background-color:solid; */
/* } */
.imged{
    width:800px;
    height:425px;
}

    </style>
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
                class="nav-link active"
                aria-current="page"
                href="/hms/websitehome.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/hms/about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/hms/contact.php">Contact Us</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>  
<!-- Below Navbar -->
<!-- main image -->
<div class="row row-cols-1 row-cols-md-2 g-2">
<div class="col">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img class="imged" src="hospital.jpg">
    </div>
    <div class="col-md-8">
      <div class="card-body">
</div>
      </div>
    </div>
  </div>
</div>
<!-- options -->
<div class="col" style="padding: 0px;"; >
<div class="row row-cols-1 row-cols-md-2 g-4">

  <div class="col">
    <div class="card h-85 w-75 mx-5" style="padding: 0px;";>
      <div class="card-body c1 bg-success">
          <br><br><br>
        <h5 class="card-title my-4" style="text-align:center";><br>Find a Doctor</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-85 w-75 mx-1" style="padding: 0px;";>
      <div class="card-body bg-info">
      <br><br><br>
        <h5 class="card-title my-4" style="text-align:center";><br>Card title</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-85 w-75 mx-5" style="padding: 0px;";>
      <div class="card-body c1 bg-info">
      <br><br><br>
        <h5 class="card-title my-4" style="text-align:center";><br>Card title</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-85 w-75 mx-1" style="padding: 0px;";>
      <div class="card-body bg-success">
      <br><br><br>
        <h5 class="card-title my-4" style="text-align:center";><br>Card title</h5>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>