<?php
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