<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'bus';

$conn = new mysqli($servername,$username,$password,$database);
// if($data==false){
//     die("connection error");
// }

function cleanInput($data){
    $data = $_POST[$data];
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = trim($data);
    return $data;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // // Get the form data
    // $email = $_POST['email'];
    // $password = $_POST['password'];

    $error = false;
    if(isset($_POST['login'])){
        if(empty($_POST['email'])){
            $_SESSION['loginerr'] = 'Please Input your email';
            $error = true;
            header("Location:login.php");  
        }else{
            $email = cleanInput('email');
        }
        if(empty($_POST['password'])){
            $_SESSION['loginerr'] = 'Please Input your password';
            $error = true;
            header("Location:login.php");  
        }else{
            $password = cleanInput('password');
           
        }

      if(!$error){
        $sql = $conn->query("SELECT * FROM admin WHERE demail = '$email' AND dpassword = '$password'");
        if($sql->num_rows > 0){
            $row = $sql->fetch_assoc();
            //  var_dump($row);
            
            if(  $_SESSION['login'] = true){
                $_SESSION['email'] = $row['demail'];
                $_SESSION['password'] = $row['dpassword'];
                header("Location:admin1.php");
            }else{
                header("Location:login.php");}
               
               
               
        }
    }  


          
        
        
        


      }

       // Close the database connection
        // mysqli_close($conn);
    }
