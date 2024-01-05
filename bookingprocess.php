<?php
session_start();
require "config.php";

if($_SERVER['REQUEST_METHOD'] = 'POST' ){
    if(isset($_POST['submit'])){
          $error = false;
          //location
        if(empty($_POST['location'])){
            $error = true;
            $_SESSION['err'] = "Location is required";
            header('location: preindex.php');

        }
        else{
            $location = cleanInput("location");
        }
        //destination
        if(empty($_POST['destination'])){
            $error = true;
            $_SESSION['err'] = "destination is required";
            header('location: preindex.php');

        }
        else{
            $destination = cleanInput("destination");
        }
          //phone
          if(empty($_POST['phone'])){
            $error = true;
            $_SESSION['err'] = "phone is required";
            header('location: preindex.php');

        }
        elseif(!is_numeric($_POST['phone'])){
            $error = true;
            $_SESSION['err'] = "number must be numeric";
            header('location: preindex.php');

        }
        else{
            $phone = cleanInput("phone");
        }
        //email
        if(empty($_POST['email'])){
            $error = true;
            $_SESSION['err'] = "email is required";
            header('location: preindex.php');

        }
        elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $error = true;
            $_SESSION['err'] = "invalid email address";
            header('location: preindex.php');
        }
        else{
            $email = cleanInput("email");
        }

         // rideid
    $rideid = date("ym") . rand(201014,221019);

}
    
if(!$error){
    $sql = $conn->query( "INSERT INTO transport SET dlocation='$location', demail='$email',  dphone='$phone', ddestination='$destination',  rideid='$rideid'");
    
    if($sql){
     echo 'Registration Successful';
     header("location:booking.php");
    }else{
      $_SESSION['err'] = 'please try again';
      
    }
}
    
}

