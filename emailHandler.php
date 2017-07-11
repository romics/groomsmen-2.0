<?php
if($_POST){
    $name = $_POST['full-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

//send email
    mail("rmac817@vt.edu", "This is an email from:" .$name, 
    	"Name: " .$name \n \n
    	"Email: " .$email \n \n
    	"Phone: " .$phone);
}
?>
