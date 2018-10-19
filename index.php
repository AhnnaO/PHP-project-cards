<?php
session_start();
    require 'partials/head.php'; //meta and style information
    include 'partials/nav.php'; //navigation

?>
 
 <div class="container-fluid">  
   
   <div class="row justify-content-center">
   
   <?php include 'partials/header.php';  
       //h1 Name of Store
    ?> 
   
    </div>
      
       <main>
        
        <form action="checkout.php" method="POST" class="row justify-content-center">
           
        <div class="row justify-content-center"> 
            
            <?php include 'partials/products_for_loop.php';
            //Loop for product cards and sale prices
            ?>
            
        </div>

         <div class="row justify-content-center"> 
            <div class="cards col-12 ">
            <!-- Customer information form --> 
            
            <input id="customer_name" name="customer_name" type="text" placeholder="Name">
            <br>
            
            <input id="street_address" name="street_address" type="text" placeholder="Street Address">
            <br>
            
            <input id="city" name="city" type="text" placeholder="City">
            <br>
            
            <input id="postal_zip_code" name="postal_zip_code" type="text" placeholder="Zip Code">
            <br>
            
            <input id="telephone_number" name="telephone_number" type="tel" placeholder="Telephone Number">
            <br>
            
            <input id="email" name="email" type="email" placeholder="Email"> 
            <br>
            
            <input type="submit" value="Submit">
            
        </div>
        </div>
        
        </form>
        
        <div class="row justify-content-center"> 
            <div class="error col-12 text-center">
        
           <?php 
            if(isset($_GET["error1"])) {
            echo ($_GET["error1"]);
            } 
            if(isset($_GET["error2"])) {
            echo ($_GET["error2"]);
            } 
            if(isset($_GET["error3"])) {
            echo ($_GET["error3"]);
            }
           if(isset($_GET["error4"])) {
            echo ($_GET["error4"]);
            }
           if(isset($_GET["error5"])) {
            echo ($_GET["error5"]);
            }
           if(isset($_GET["error6"])) {
            echo ($_GET["error6"]);
            }
           
         ?>
            </div>
           </div>
        
        </main>     

<?php require 'partials/footer.php'; ?>
