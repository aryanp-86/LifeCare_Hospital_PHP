<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>LifeCare Hospital</title>
    <style>
.mydash{
    width: 280px;
    height: 713px;
}
.imglogo{
    width: 50px;
    height: 50px;
}
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
.imgspd{
  height:21px;
}
#spcardbody{
  padding: 0px;
}
    </style>
  </head>
  <body>
  <div class="row row-cols-1 row-cols-md-2 g-2 my-5">
    <div class="col">
<div class="card mx-4 border-primary" style="width: 45rem;">
  
  <div class="card-body mydash" id="spcardbody" style="text-align:center";>
    <h5 class="card-title" id="spcard" >Contact Us</h5>
  </div> 
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
  <img src="LifeCare Hospital Logo.png" class="img-fluid rounded-start my-3 mx-1 imglogo">
    
  <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Customers
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
</div>
</div>
  <div class="col">
  <div class="card mx-4 border-primary" style="width: 45rem;">

  <div class="card-body" id="spcardbody" style="text-align:center";>
    <h5 class="card-title" id="spcard" >Contact Us</h5>
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
  


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>