<?php
    echo "Superglobals in PHP.<br/>";
    // print_r($_SERVER);
    // print_r($_GET);
    // print_r($_POST);
    //We will send data through url or form using $_GET/$_POST
    // if(isset($_GET['name'])){
    //     echo $_GET['name'];
    // };
    // if(isset($_GET['age'])){
    //     echo $_GET['age'];
    // };
    //coalescing
    // $name = $_GET['name'] ?? '';
    // $age = $_GET['age'] ?? '';
    // echo $name;
    // echo $age;
    // <script>alert('Warning')</script>
    // $email = htmlspecialchars($_POST['email']) ?? '';
    $email = filter_var($_POST['email'],
        FILTER_SANITIZE_SPECIAL_CHARS);
    $password = htmlspecialchars($_POST['password']) ?? '';
    echo $email;
    echo $password;
    //send this to Database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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