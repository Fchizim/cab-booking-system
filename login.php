<link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
<?php 
require_once 'login-check.php';
?>
<div class="container">
<div class="shadow-lg bg-light p-4 mt-3 fs-3">
<?php
if(isset($_SESSION['loginerr'])){?>
<div class="alert alert-danger my-3"><?=$_SESSION['loginerr']?></div>
<?php } ?>
    <h3 class="text-center text-secondary">Provide Login Details Please</h3>
    <form action="loginprocess.php" method="POST">
    <div class="form mb-3 mt-3">
        <label for="floatingInput" class="">Email</label>
        <input type="email" class="form-control" id="floatingInput" placeholder="name@exampl.com" name='email' >
    </div>
    <div class="form mb-3 mt-3">
        <label  class="">Password</label>
        <input type="password" class="form-control"  placeholder="password" name='password'>
    </div>
    <div class="d-grid">
        <button class="btn btn-success mb-3 p-3" name='login'><h4 class="text-light fw-light">Login</h4></button>
    </div>
    </form>
     <!-- <p class="text-center fs-30 mt-3">You do not have an account? <a href=".php">Register Here</a></p> -->
</div>
</div>


<?php
include_once 'footer.php'
?>

 