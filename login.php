<?php
require_once 'db.php';
require_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = User::getInstance($db); // Get the singleton instance
    $loggedInUser = $user->login($username, $password);

    if ($loggedInUser) {
        session_start();
        $_SESSION['user_id'] = $loggedInUser['id'];
        $_SESSION['username'] = $loggedInUser['username'];
        header("Location: profile.php");
    } else {
        echo "Login failed. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="login.php">
        <input type="text" name="username" placeholder="Username" required><br>
        <p><input type="password" name="password" placeholder="Password" required><br></p>
        <p><input type="submit" value="Login"></p>
    </form>
</body>
</html>
