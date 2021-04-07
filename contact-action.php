<?php
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$country = $_REQUEST['country'];
$message = $_REQUEST['message'];

if (empty($firstname) || empty($lastname) || empty($country) || empty($message)) {
    echo "please fill all field";
}
else{
     mail("yuvrajchaudhari011@gmail.com", "test Enquiry", $message , "From: $firstname <$lastname>");
}
?>