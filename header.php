<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silverline Town Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="bootstrap5/js/bootstrap.bundle.min.js"> -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<style>


.nah:hover {
  color: #e0f780;
}

.nav-link a:active {
  color:  #e0f780;
}

@media screen and (max-width: 700px) {
  .nah a {
    float: none;
    display: block;
    margin-left: 30px;
  }
}
.logo{
  font-size: 1.3rem;
}
.logo i{
  font-size: 1.8rem;
  color: #e0f780;
}
</style>
<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-xl-start fs-2" href="index.php"><i class="fa fa-fw fa-home"></i>STS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center " id="collapsibleNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link nah fs-4 text-light " href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-4 text-light " href="entry.php"><i class="fa fa-fw fa-id-badge"></i> Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-4 text-light " href="entry.php"><i class="fa fa-fw fa-user"></i> Login</a>
        </li>  
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Another link</a></li>
            <li><a class="dropdown-item" href="#">A third link</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>