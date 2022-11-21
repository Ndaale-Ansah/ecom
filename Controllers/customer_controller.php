<?php

require('../Classes/customer_class.php');

//Add customer controller
function add_customer_controller($name, $email, $password, $country, $city, $contact)
{
    //create customer instance
    $customer_instance = new Customer();
    //call the method from the class
    return $customer_instance->add_cust($name, $email, $password, $country, $city, $contact);
}

//Edit customer controller
function edit_customer_controller($id, $name, $email, $password, $country, $city, $contact)
{
    //create customer instance
    $customer_instance = new Customer();
    //call the method from the class
    return $customer_instance->edit_cust($id, $name, $email, $password, $country, $city, $contact);

}

//Verify Login controller
function check_login_details_controller($email)
{
    //create customer instance
    $customer_instance = new Customer();
    //call the method from the class
    return $customer_instance->check_login_details($email);
}


//Delete customer controller
function delete_customer_controller($id)
{
    //create customer instance
    $customer_instance = new Customer();
    return $customer_instance->delete_cust($id);
}

function select_all_customer_controller(){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->select_all_cust();

}

function select_one_customer_controller($id){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->select_one_cust($id);


}

// function sign_up_controller($name, $email, $password){
//  $new_person = new Customer();
//  return $new_person->sign_up($name, $email, $password);
// }

?>