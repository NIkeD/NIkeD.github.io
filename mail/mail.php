<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Message: ".$message."

";

mail ("quires@nikheel.me" , "New Message", $email_message);
header("location: ../mail-success.html ");
?>


