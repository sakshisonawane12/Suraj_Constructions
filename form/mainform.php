<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['reason'];
$to = "sgawali880@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;


if(mail($to,$subject,$txt,)){
    echo "Mail Sent Successfully";
}
else{
    echo "Mail Not Sent";
}
header("Location: ../index.html");
?>
