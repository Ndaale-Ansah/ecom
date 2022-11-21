<?php

require('../Controllers/customer_controller.php');


if(isset($_POST['registerCustomer'])){
//retrieving customer information
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $contact = $_POST["contact"];
    

    //hash password
    $encryptedPass = password_hash($password, PASSWORD_BCRYPT);


    $result = add_customer_controller($name, $email, $encryptedPass, $country, $city, $contact);

    if($result === true){
        echo header("location: ../Login/login.php");
    }
}

?>