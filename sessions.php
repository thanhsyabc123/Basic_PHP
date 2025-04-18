<?php
    echo "Sessions in PHP.<br/>";
    // session are stored in the server 
    // so it can be used across multiple pages
    session_start();
    if(isset($_POST['submit'])){
        $email= filter_input(INPUT_POST, 'email',
        FILTER_SANITIZE_SPECIAL_CHARS);
        $password=$_POST['password'];
        if($email=='sy@gmail.com'
        && $password=='123456'){
            $_SESSION['email']=$email;
            header('Location: ./dashboard.php');
        }else{
            echo 'Incorrect email/password';
        }
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
    <h1>Login to your account</h1>
    <form 
        action="<?php echo 
            htmlspecialchars($_SERVER['PHP_SELF']);?>"
        method="POST"
        >
        <h3>Login to your account</h3>
        <div>
            <label for="email">Your email: </label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="text" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>