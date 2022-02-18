<?php

$name =  $_POST['name'];
$email =  $_POST['email'];
$subject =  $_POST['subject'];
$message =  $_POST['message'];



$mailheader = "From:" .$name . "<" . $email . ">\r\n";
$recipient = "info@cieliaperti.tv";

mail($recipient, $subject, $message
,$mailheader)

or die("error!")


echo '

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Contatto - Cieli Aperti TV</title>
</head>

<body>

    <div class="container">
        <h1>Thanks for contacting us</h1>
        <p class="back">Go Back to the <a href="index.html">Home Page</a>.</p>
    </div>

</body>

</html>



';

?>