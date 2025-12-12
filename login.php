<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
</head>
<body>
    <h1>Welcome back to Shawty Maker</h1>
    <div>
        <h3>LOGIN</h3>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

<?php
    include 'checking.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(verify_user($username, $password))
            echo "login successful";
        else
            echo "Incorrect username/password";

    }
?>