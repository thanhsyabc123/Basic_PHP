<?php 
    echo "Exceptions in PHP<br/>";
    function divide($a, $b){
        if(!$b){
            throw new Exception("Cannot divide by zero.");
        }
        return $a/$b;
    }
    // echo divide(5,0);
    try {
        echo divide(10,2);
        echo divide(3,1);
        echo "no errors";
    }catch(Exception $e){
        echo "Caught exceptions: " . $e-> getMessage() . "\n";
    }finally{
        echo "Finally come here ...";
    }
    echo "Program run here ..."
?>