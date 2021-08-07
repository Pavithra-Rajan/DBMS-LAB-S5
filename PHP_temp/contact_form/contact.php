<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $myMail = "pavithra.rajan01@gmail.com";
    $header = "From: " . $email;
    $message2 = "You have received a message from " . $name . ". \n\n" . $message;

    //1. E-mail your sending it to
    //2. Subject
    //3. Is the message
    mail($myMail, $subject, $message2, $header);
    header("Location: contact.php?mailsend");
}

?>
<div>
    <h1>Get in touch</h1>
    <p>Please fill in the fields</p>
    <form action="contact.php" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Enter message"></textarea>
        <button type="submit" name="submit">SEND E-MAIL</button>
    </form>
</div>
</body>
</html>
