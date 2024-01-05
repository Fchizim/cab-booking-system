<?php
session_start();
if((isset( $_SESSION['login']) &&  $_SESSION['login'] == true)){
header("Location:admin1.php");}
// }else{
//     header("location:login.php");
// }

