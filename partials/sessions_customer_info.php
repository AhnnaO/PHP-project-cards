<?php
   
#Error redirects for customer information fields
if(isset($_POST["customer_name"]) && isset($_POST["street_address"]) && isset($_POST["city"]) && isset ($_POST["postal_zip_code"]) && isset($_POST["telephone_number"]) && isset($_POST["email"])){
    
    if(strlen($_POST["customer_name"]) <= 1){
        header('Location: index.php?error1=Please enter your full name.');
    }
else if(strlen($_POST["street_address"]) <= 1){
    header('Location: index.php?error2=Please enter your full street address including number.');
}
else if(strlen($_POST["city"]) <= 1){
        header('Location: index.php?error3=Please enter your city.');
    }
else if(strlen($_POST["postal_zip_code"]) <= 1){
        header('Location: index.php?error4=Please enter your numerical zip code.');
    }
else if(strlen($_POST["telephone_number"]) <= 1){
        header('Location: index.php?error5=Please enter your telephone number. No spaces or dashes.');
    }
else if(strlen($_POST["email"]) <= 1){
        header('Location: index.php?error6=Please enter a valid email address.');
    }
    
 #Sets customer information sessions          
    $_SESSION["customer_name"]=$_POST["customer_name"];
    $_SESSION["street_address"]=$_POST["street_address"];        
    $_SESSION["city"]=$_POST["city"];
    $_SESSION["postal_zip_code"]=$_POST["postal_zip_code"];
    $_SESSION["telephone_number"]=$_POST["telephone_number"];
    $_SESSION["email"]=$_POST["email"]; 
}
        #echos customer info to receipt on checkout.php   
            echo $_SESSION["customer_name"];
            echo "<br>";
            echo $_SESSION["street_address"];
            echo "<br>";
            echo $_SESSION["city"];
            echo "<br>";
            echo $_SESSION["postal_zip_code"];
            echo "<br>";
            echo $_SESSION["telephone_number"];
            echo "<br>";
            echo $_SESSION["email"];
            echo "<br>";
           
    

?>