<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
</head>
<body>
    <h1>Welcome to Shawty Maker</h1>
    <div>
        <h3>SIGNUP</h3>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit">Signup</button>
        </form>
        <div>Already a member? <a href="./login.php">Click here to login</a></div>
    </div>
</body>
</html>

<?php
    include 'insert.php';
    include 'checking.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = trim($_POST['username']);

        if(valid_username($username)){
            $password = $_POST['password'];
            if(!check_user_exists($username)){
                insert_user($username, $password);
            }
            else{
                echo "User already exists";
            }
        }
        else
            echo "Username should not contain spaces.";
    }
?>