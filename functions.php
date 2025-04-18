<?php
    echo "We talk about functions.<br/>";
    //function is a block of code
    $y=10;
    function sayHello($name){//function with arguments
        global $y;
        echo "y = $y";
        echo "Hello, $name";
    }
    // sayHello('John');//call function with parameters
    function sum($a = 0, $b = 0){
        //default arguments values
        return $a + $b;
    }
    // echo sum(1,4);
    //assign a variable to a function
    $multiply = function($a, $b){
        return $a * $b;
    };
    // echo $multiply(2,42);
    //arrow function
    $subtract = fn($a,$b) => $a - $b;
    // echo $subtract(5,2);
    //some built-in function for array
    $name = ['fsa', 'fsb', '324'];
    // echo "number of items: ".count($name);
    //select inside array
    // var_dump(in_array('fsa',$name));
    //insert an item into array
    array_push($name,'nguyen','mai');
    //insert in to the beginning of the array
    array_unshift($name, 'dwf');
    //remove the last item
    array_pop($name);
    //remove the first item
    array_shift($name);
    //remove an item
    // unset($name[1]);
    //chunk an array
    $chunk_array = array_chunk($name,2);
    // print_r($name);
    // print_r($chunk_array);
    $array_one = [1,3,5];
    $array_two = [2,4,6];
    //merge two arrays
    $merge_array=array_merge($array_one,$array_two);
    
    //spread operation
    $array_three = [...$merge_array];// clone array
    $merge_array[0] = 21;
    // print_r($merge_array);
    // print_r($array_three);
    // merge and clone array
    $array_four = [...$array_one, ...$array_two];
    // print_r($array_four);
    // combine two arrays
    $a = ['name','email','age'];
    $b = ['John','john@gmail.com',22];
    $c = array_combine($a,$b);
    // print_r($c);
    // print_r(array_keys($c));
    // print_r(array_values($c));
    // print_r(array_flip($c));
    //array from range
    $numbers= range(0,10);
    // print_r($numbers);
    //map an array to another array
    //with the same size, but other values
    $square_numbers=array_map(function($each_number){
        return $each_number * $each_number;
    }, $numbers);
    // $square_numbers=array_map(fn($each_number) =>
    //     $each_number * $each_number
    // , $numbers);
    // print_r($square_numbers);
    $filter_numbers = array_filter($numbers,
        fn($each_number) => $each_number % 2 == 0);
    print_r($filter_numbers);
?>