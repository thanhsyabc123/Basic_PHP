<?php
    echo "We talk about arrays.<br/>";
    $some_numbers = [1,2,3,4];
    $fruit = ['pineapple', 'melon', 'orange'];
    // var_dump($fruit);
    // print_r($fruit);
    // echo $fruit[0];
    // associative array
    $color =[
        3 => 'red',//key - value
        5 => 'green',
        7 => 'blue'
    ];
    // echo $color[5];
    // key as a string
    $hex_color =[
        'red' => '#FF0000',
        'green' => '#00FF00',
        'blue' => '#0000FF'
    ];
    // echo $hex_color['red'];
    $person = [
        'full_name' => 'Tran Thanh Sy',
        'age' => 22,
        'email' => 'doan111aaa@gmail.com',
    ];
    // print_r($person);
    // echo $person['email'];
    $persons = [
        [
            'full_name' => 'Tran Thanh Sy',
            'age' => 22,
            'email' => 'doan111aaa@gmail.com',
        ],
        [
            'full_name' => 'Gang Toe',
            'age' => 52,
            'email' => 'r3df@gmail.com',
        ],
        [
            'full_name' => 'Nguyen Van',
            'age' => 12,
            'email' => '42ddq@gmail.com',
        ]
        ];
    // print_r($persons);
    // echo $persons[1]['full_name'];
    var_dump(json_encode($persons));
?>