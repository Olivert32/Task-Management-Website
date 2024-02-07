<?php
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
$mysqli = require __DIR__ . "/includes/database.php";


$sql = sprintf("SELECT * FROM user
 WHERE username = '%s'", 
 $mysqli -> real_escape_string($_POST["username"]));

 $result = $mysqli ->query($sql);

 $user = $result->fetch_assoc();

 if($user) {
  if (password_verify($_POST["password"], $user["password_hash"])) {
    
    session_start();
    
    $_SESSION["user_id"] = $user ["id"];

    header("Location: MainPage.php");
    exit;
  }
 }
 $is_invalid = true; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link href="css/signin.css" rel="stylesheet">
   <title>Sign In</title>
  </head>
<body>
  <link href="images/task.png" rel="stylesheet">
  <h1>Topley's Task Manager</h1>
<h2>Sign In</h2>
<?php if ($is_invalid) : ?>
  <em>Invalid Login</em>
  <?php endif; ?>

<form method="post">
<label for="username">Username</label>
<input type="username" name="username" id="username"
value="<?= htmlspecialchars($_POST["username"] ?? "") ?>">

<label for="password">Password</label>
<input type="password" name="password" id="password">

<a href="Register.php">Not got an Account?</a></li>

<button>Sign In</button>
  </form>
</body>
<?php
include_once 'includes/footer.php'
?>

