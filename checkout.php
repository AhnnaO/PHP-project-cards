<?php
session_start();
    require 'partials/head.php';
    include 'partials/nav.php';
    include 'partials/product_array.php';
    


?> 
<main class="container"> 
   
   <div class="row justify-content-center">
    <div class="col-12 text-center">
    <h1>Checkout</h1>
    </div>
    </div>
    
    <div class="row">
    <div class="col-12 cards text-center">
        
        <h2>Customer Receipt</h2>
        
        <?php
        #isset and echo for customer form    
        include 'partials/sessions_customer_info.php'     
        ?>
        
       <?php
        #loop for my checkout page / customer receipt
        $sum = 0;
        
        if (!empty($_POST["quantity"]) && isset($_POST["quantity"]) > 0){
            
            foreach($all_products as $index => $single_product){
            
            echo $single_product["name"] . " "; 
            echo ((int)$_POST["quantity"][$index]) . " st";
            echo" x ";
        #Monday 50% off
            if(date("l") == "Monday"){
                echo round((int)$single_product["price"] * 0.5) . "kr";
                echo " = ";
                echo round((int)$single_product["price"] * 0.5) * ((int)$_POST["quantity"][$index]) . "kr";
                    
                    $sum += ((int)$_POST["quantity"][$index]) * ((int)$single_product["price"] * 0.5); 
        #Wednesday price increase of 10%
            }else if(date("l") == "Wednesday") {
                echo round((int)$single_product["price"] * 1.10) . "kr";
                echo " = ";
                echo round((int)$single_product["price"] * 1.10) * ((int)$_POST["quantity"][$index]) . "kr";
                    $sum += ((int)$_POST["quantity"][$index]) * ((int)$single_product["price"] * 1.10); 
        #Friday 20kr reduction on items over 200 
            }else if((int)$single_product["price"] > 200 && date("l") == "Friday"){
                echo ((int)$single_product["price"] - 20) . "kr";
                echo " = ";
                echo ((int)$single_product["price"] - 20) * ((int)$_POST["quantity"][$index]) . "kr";
                $sum += ((int)$_POST["quantity"][$index]) * ($single_product["price"] - 20); 
        #regular priced totals
            }else{
            echo $single_product["price"] . "kr";
            echo " = ";
            echo $total = ((int)$_POST["quantity"][$index]) * ((int)$single_product["price"]) . "kr";
                
                $sum += ((int)$_POST["quantity"][$index] * $single_product["price"]); 
                
            
            }echo "<br>";
            }echo "<b>Total: </b>";
        #Final total 
            echo round($sum) . "kr<br>";
             
        }
        ?>
        
        </div>
    </div>

      
</main>
<?php require 'partials/footer.php'; ?>


