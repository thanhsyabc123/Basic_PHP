<?php
    echo "We talk about iterations(loop).<br/>";
    // for($i = 0;$i<10;$i++){
    //     // echo $i. ' ';
    //     echo "i = $i<br/>";
    // }
    $i=0;
    // while($i < 10){
    //     echo "i = $i<br/>";
    //     $i++;
    // }
    //do while "do first"
    // do{
    //     echo "i = $i<br/>";
    //     $i++;
    // }while($i<19);
    // foreach
    $fruits = ['apple', 'orange', 'melon'];
    // for($i = 0;$i < count($fruit);$i++){
    //     echo"$fruit[$i]<br/>";
    // }
    // foreach($fruits as $fruit){
    //     echo "$fruit<br/>";
    // }
    //index
    // foreach($fruits as $index => $fruit){
    //     echo "$index - $fruit<br/>";
    // }
    $person = [
        'full_name' => 'Tran Thanh Sy',
        'age' => 22,
        'email' => 'doan111aaa@gmail.com',
    ];
    foreach($person as $key => $value){
        echo "$key : $value<br/>";
    }
?>