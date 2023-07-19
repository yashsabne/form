<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$country = $_POST['your-country'];
$state = $_POST['your-state'];
$town = $_POST['town']
$question = $_POST['question-suggestion']

$mailheader = "From:" .$name."<".$email.">\r\n"


$recipient = "yashsabne39@gmail.com";

mail($recipient,$number,$country,$state,$town,$question,$mailheader)
or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="form.css">
    <!-- <link rel="stylesheet" href="form.php"> -->
</head>
<body>
    
    <div class="yash">
        <h1>Thank you for contacting us Lorem ipsum dolor sit ametlit. Quibusdam fugiat recusandae neque accusantium incidunt aut accusamus !</h1>
         <p class="back">GO Back TO <a href="index.html">Home</a></p>
    </div>

</body>
</html>'



;






?>