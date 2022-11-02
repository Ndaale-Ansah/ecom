<?php 

require('../Settings/db_class.php');

class Customer extends Connection{

    //methods
//add customer
    function add_cust($name, $email, $password, $country, $city, $contact){
        return $this->query("insert into customer(customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_image) VALUES ('$name', '$email', '$password', '$country', '$city', '$contact')");
    }
//check login details
    function check_login_details($email){
        return $this->fetchOne("select * from customer where customer_email='$email'");
    }
//edit customer
    function edit_cust($id, $name, $email, $password, $country, $city, $contact){
        return $this->query("update customer set customer_name = '$name', customer_email = '$email', customer_pass = '$password', customer_country = '$country', customer_city = '$city', customer_contact = '$contact' where customer_id = '$id'" );
    }
//delete customer
    function delete_cust($id){
        return $this->query("delete from customer where customer_id = '$id'");
    }

//select all customers
    function select_all_cust(){
        return $this->fetch("select * from customer");
    }
// select one customer
    function select_one_cust($id){
        return $this->fetchOne("select * from customer where customer_email='$id'");

    }

}

?>
