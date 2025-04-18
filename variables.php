<?php
    // echo "We talk about variables.".'<br/>';
    $name = 'ABC'; //string
    $age = 18; // integer
    // echo $name;
    $has_new_phone = false;
    // echo $has_new_phone;
    // var_dump($has_new_phone);
    // $product_price = 22.41; // Float
    // echo "<br/>";
    // var_dump($product_price);
    // echo "<br/>";
    // string concatenation
    // echo $name. ' is '.$age. ' year old'."<br/>";
    // this is better
    // echo "$name is $age year old.";
    // echo "${name} is ${age} year old.";
    // expression
    // echo 5+5;
    // echo '1'+'5';
    // $sum = '2'+'3';
    // var_dump($sum);
    // echo 10%3;
    //constants
    define('SERVER_NAME','localhost');
    define('DATABASE_NAME','test_db');
    echo "server: ".SERVER_NAME.', db: '.DATABASE_NAME;
?>