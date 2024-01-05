<?php 
 include 'header.php'
?>
<style>

.contain{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(image/ride.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    /* background-position: center ; */
}

.contain button.btn{
       /* width: 20%; */
       background: #eef5db;
       padding: 10px 20px;
       box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.19), 
       0px 6px 6px rgba(0, 0, 0, 0.23);
       cursor: pointer;
       color: rgb(3, 117, 32);
}

.contain button.btn:hover{
       border: 2px solid rgb(3, 117, 32);
       color: white;
       font-size: 20px;
       transition: all 1.3s;
}

.contain button.btn:hover a{
       color: white;
       font-size: 20px;
       transition: all 1.3s;
}

.contain button.btn a{
       text-decoration: none;
       color: rgb(3, 117, 32);
       padding: 0.5rem;
}
@media screen and (max-width: 900px) {
       .contain button.btn{
              font-size: 1rem;
       }
       .contain{
              
       }
}




</style>

    <div class="contain">
       <button class="btn"><a href="preindex.php">Book Ride</a></button>
    </div>
     
<?php
       // include "footer.php"
?>
