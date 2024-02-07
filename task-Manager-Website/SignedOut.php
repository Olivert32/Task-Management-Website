<?php

session_destroy();

header("location: index.php");
exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Have Been Signed Out</title>
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <h1>You Have Been Successfully Signed Out</h1>
    <a href="SignIn.php">Return To Sign In Page</a></li>
</body>
<?php
include_once 'includes/footer.php'
?>