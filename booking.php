<?php 
 include_once 'header.php'
 ?>
 <style>
  .book{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    justify-content: ;
    height: 100vh;
   
  }
  .box{
    display: flex;
    flex-direction: column;
    justify-content: center ;
    align-items: center;
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
    height: 70%;
    padding: 1rem;
  }
  @media screen and (max-width: 800px) {
    .box{
      font-size: 1rem;
      text-align: center;
    }
    .box h1{
      text-align:center ;
    }
  }
  
  h1{
    padding: 0.8rem;
    color: rgb(3, 117, 32);
  }
  h1>span{
    font-size: 2rem;
    color:  rgb(3, 117, 32);
  } 
  h2>span{
    font-size: 2rem;
    color:  rgb(3, 117, 32);
  } 
  h2{
    font-size: 1.5rem;
    color:  #e7f711;
  }
  h3{
    color:  ;
  }
  h3>span{
    font-size: 2rem;
    color:  rgb(3, 117, 32);
  } 
 </style>
<div class="book">
  <!-- <div class="con" >
  <img src="image/ballon4.jpeg" style=" width: 500px; height: 100px; " alt="">
  </div> -->

  <div class="box" >
  <h1> <span><i class="fa fa-check-circle" aria-hidden="true"></i></span> Ride successfully booked!</h1> 
<h2> <span><i class="fa fa-car" aria-hidden="true"></i></span> Rider is coming to your Location!</h2>
<h3> <span><i class="fa fa-user-circle" aria-hidden="true"></i></span> Rider will give you a call you!</h3>
  </div>
</div>
<?php

?>