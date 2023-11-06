<?php
require_once 'db.php';
require_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = User::getInstance($db);

    if ($user->register($username, $password)) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="h1">
<h2>Register</h2>
    <form method="post" action="register.php">
        <input type="text" name="username" placeholder="Username" required><br>
        <p> <input type="password" name="password" placeholder="Password" required><br></p> 
       <p> <input type="submit" value="Register"></p>
    </form>

</div>
    
</body>
</html>