<?php
$accountType = $_POST["accountType"];

if (empty($_POST["username"])){
    die("Username is required");
}

if (empty($accountType)){
    die("User type is required");
}

if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("A valid email is required");
}

if(strlen($_POST["password"]) < 8) {
    die("password must be at least 8 characters");
}

if(! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
} 

if(! preg_match("/[0-9]/i", $_POST["password"])) {
    die("Password must contain at least one number");
} 

if($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (userName, email, password_hash, accountType) VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss", $_POST["username"], $_POST["email"], $password_hash, $accountType);

if($stmt->execute()){
    header("Location: ../signup-successful.php");
    exit;
}
else{

    if ($stmt->error) {
        die("Error: " . $stmt->error);
    } else {
        echo "Sign up successful";
    } 
}

if($stmt->execute()){
    if ($accountType == "Standard") {
        header("Location: ../MainPage.php");
        exit;
    } else if ($accountType == "Corporate") {
        header("Location: http://google.com/");
        exit;
    } else if ($accountType == "Student") {
        header("Location: ../StudentPage.php");
        exit;
    } else {
        die("Invalid user type");
    }
} else {
    if ($stmt->error) {
        die("Error: " . $stmt->error);
    } else {
        echo "Sign up successful";
    } 
}
