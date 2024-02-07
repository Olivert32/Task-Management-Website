<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link href="css/signin.css" rel="stylesheet">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <scripts src ="js/validation.js" defer></script>
    <title>Registration</title>
</head>
<body>
<h1>Topley's Task Manager</h1>

<form action="includes/process-signup.php" method="post" id="signup">
  <div>
    <label for="username">Username</label>
    <input type="username" id="username" name="username">
</div>
<div>
    <label for="email">Email</label>
    <input type="email" id="email" name="email">
</div>
<div>
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
</div>
<div>
    <label for="password_confirmation">Confirm Password</label>
    <input type="password" id="password_confirmation" name="password_confirmation">
</div>
<label for="accountType">Role</label>
<select id="accountType" name="accountType">
    <option value="Standard">Standard</option>
    <option value="Student">Student</option>
    <option value="Corporate">Corporate</option>  
</select>
<button type="submit" name="submit">Submit</button>
</body>


<?php
include_once 'includes/footer.php'
?>