<?php 
 include_once 'header.php'
 ?>
 <style>
    .icon{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
        justify-content: space-evenly;
    }
    .icon i{
        font-size: 50px;
        color: rgb(3, 117, 32);
    }
    .icon i:hover{
        font-size: 100px;
        transition: all 1s ease-out;
    }
 </style>

<div class="icon">
    <a href="https://wa.me/2347030592738"><i class="fa fa-whatsapp" ></i></a>
    <a href="tel:"><i class="fa fa-facebook" ></i></a>
    <a href=""><i class="fa fa-twitter" ></i></a>
    <a href=""><i class="fa fa-envelope" aria-hidden="true"></i></a>
    <a href="tel:+2347030592738"><i class="fa fa-phone" aria-hidden="true"></i></a>
</div>

<?php
       include "footer.php"
?>
