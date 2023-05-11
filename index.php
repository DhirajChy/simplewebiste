<!Doctype html>
<html>
    <head>
        <title>Website</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
</head>
<body> 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dhiraj Website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Careers.php">Careers</a>
        </li>
              </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/la.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="images/chicago.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="images/ny.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
        <img src="images\img_5terre.jpg" class="image-fluid aboutimg">
        </div>
         <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">Dhiraj Chaudhary </h2>
            <p class="py-5">I am a Developer learner Hardworker.</p>  
         <a href="About.php" class="btn btn-success">Check more</a>
         </div>
 </div>
</section>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
        <div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="images/img_forest.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="profile.php" class="btn btn-success">See Profile</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="images/img_forest.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="profile.php" class="btn btn-success">See Profile</a>
  </div>
</div>
</div>
  <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="images/img_forest.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="profile.php" class="btn btn-success">See Profile</a>
  </div>
</div>
</div>
</section>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"> Our Gallery</h2>
        <div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/img_mountains.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
          <img src="images/img_mountains.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
          <img src="images/img_mountains.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
          <img src="images/img_mountains.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
          <img src="images/img_mountains.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
          <img src="images/img_mountains.jpg" class="img-fluid pb-4">
</div>
</section>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
</div>
<div class="w-50 m-auto">
  <form action="userinf.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" autocomplete="off" class="form-control">
</div>
<div class="form-group">
      <label>Email Id</label>
      <input type="text" name="email" autocomplete="off" class="form-control">
</div>
<div class="form-group">
      <label>Mobile</label>
      <input type="text" name="mobile" autocomplete="off" class="form-control">
</div>
<div class="form-group">
      <label>Comment</label>
      <textarea class="form-control" name="comment">
</textarea>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@dhirajchaudhary</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
