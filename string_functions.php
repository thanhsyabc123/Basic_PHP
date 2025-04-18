<?php
    echo "String function in PHP<br/>";
    $full_name = "Tran Thanh Sy";
    // echo "length: " . strlen($full_name);
    //reverse a string
    // echo strrev($full_name);
    //convert to lower case
    // echo strtolower($full_name);
    // echo strtoupper($full_name);
    // find and replace
    // echo str_replace(' ','-',$full_name);
    if(str_starts_with($full_name,'Tran')){
        echo "Starts with 'Tran'<br/>";
    }
    if(str_ends_with($full_name,'Sy')){
        echo "Ends with 'Sy'<br/>";
    }
    echo "<h1>html string</h1>";
    // echo htmlspecialchars("<h1>html string</h1>");
    // echo "<br/>";
    // echo htmlspecialchars("<script>alert('This is java script code')</script>");
    //htmlspecialchars used to get data in form
    echo "<br/>";
    printf('%s likes %s','Sy','129hd22s');
    echo "<br/>";
    printf('pi = %f',3.14);
?>