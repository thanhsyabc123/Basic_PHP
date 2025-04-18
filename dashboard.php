<?php
    session_start();
    if(isset($_SESSION['email'])){
        echo "Welcome to dashboard";
        echo "email: " . $_SESSION['email'];
        echo "<a href='/logout.php'>Log out</a>";
    }else{
        echo "Welcome guest to dashboard.<br/>";
        echo "<a href='/sessions.php'>Back to Login</a>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is dashboard</h1>
</body>
</html>