<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['phone'];
$msg = $_POST['message'];

$subject = "mail Form".$name." ";
$message = "
<html>
<head>
<title>email</title>
</head>
<body>
<p>This email send form your Website ...!</p>
<p>Name: ". $name ."</p>
<p>Email: ". $email ."</p>
<p>Number: ". $number ."</p>
<p>message: ". $msg ."</p>
</body>
</html>
";

$toEmail = "huzaifaiftikhar671@gmail.com";
$mailHeaders = "MIME-Version: 1.0" . "\r\n";
$mailHeaders .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$mailHeaders .= "From: ". $email ." " . "\r\n";
if (mail($toEmail, $subject, $message  , $mailHeaders)) {
    $message = "Your contact information is received successfully.";
    $type = "success";
    echo $message;
}
?>