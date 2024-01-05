<?php
    include "header.php"
    ?>
    <style>
       
    </style>
    <section>
        <div class="first">
            <h1>The modern way to <br> commute within Rivers state </h1>
            <p>Silverline Town Services is a River state technology powered company, <br> 
              providing
                 seamless mobility services to commuters across River state</p>
        </div>

        <div class="layout">
            <ul class="nav">
                <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-car" aria-hidden="true"> </i>Book a ride</a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">Booking Status</a>
                </li>
            </ul>
            <div class="btn">
                <button><a href="preindex.php">One way</a></button>
                <button><a href="preindex.php">Round trip</a></button>
            </div>
            <form action="bookingprocess.php" class="formw" method="post">
             <div class="">
               <label for="uname" >From:</label> <br>
               <input type="text" id="uname" placeholder="Enter Location" name="location" >
             </div>
             <div class="">
               <label for="pwd" >To:</label> <br>
               <input type="text"  id="pwd" placeholder="Enter Destination" name="destination">
             </div>
             <div class="">
               <label for="number" >Phone number:</label> <br>
               <input type="Number"  id="pwd" placeholder="Enter Your Phone number" name="phone" >
             </div>
             <div class="">
               <label for="email" >Email:</label> <br>
               <input type="text"  id="email" placeholder="Enter Your Email" name="email" >
             </div>
             <div class="">
              <label for="car">Select Car</label>
              <select id="car" name="cars">
                <option value="camery">Toyota Camery</option>
                <option value="corolla">Toyota Corolla</option>
              </select>
             </div>
            <button type="submit" name="submit" class="btn">Book</button>
          </form>
       </div>

    </section>
    <!-- <?php
       include_once "footer.php"
     ?> -->