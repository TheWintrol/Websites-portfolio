<?
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_message = "
Name: ".$name."
Email: ".$email."
Subject: ".$subject."
Message: ".$message."

"; 


if($_POST) {
 
    $to = "tautvyduks@gmail.com"; // Your email here
    $subject = 'Message from my website'; // Subject message here
 
}

?>


