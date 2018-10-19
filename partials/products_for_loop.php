<?php

include 'partials/product_array.php';

#for-loop for product cards with sale days
#included on index.php
foreach($all_products as $single_product){
    echo "<div class='cards col-10 col-md-4 col-lg-3 text-center'>";
    echo "<img src='images/placeimg_300_250_tech.jpg'>" . "<br>";
    echo "<h3>" . $single_product["name"] . "</h3><br>";
        
if(date("l") == "Monday") {
    echo "Monday Special! 50% discount! <br>";
    echo round($single_product["price"] * 0.5);
    
    echo " kr <br> Regular price " . ($single_product["price"]) . " kr<br>";
        
}else if(date("l") == "Wednesday") {
    echo round($single_product["price"] * 1.10);
    echo " kr <br>";
        
}else if($single_product["price"] > 200 && date("l") == "Friday"){
    echo "Friday special! 20kr discount on items with original price over 200kr! <br>";
    echo $single_product["price"] - 20;
    echo " kr <br> Regular price " . ($single_product["price"]) . " kr<br>";

}else{
    echo $single_product["price"] . " kr<br>";
        }?>
    
    <input id="quantity" name="quantity[]" type="number" placeholder="How many?" value="0" min="0">
    
    <?php
    
    echo "</div>";

}

?>