<?php
    echo "File Handling in PHP<br/>";
    $file_path='./fruits.txt';
    if(file_exists($file_path)){
        // echo readfile($file_path); //20 - number of bytes of the file
        $file_handle = fopen($file_path,'r');
        $file_content = fread($file_handle, filesize($file_path));
        fclose($file_handle);
        echo $file_content;
    }else{
        $file_handle = fopen($file_path,'w');//open for write
        // PHP_EOL is same br tag
        $file_content = 'banana' .PHP_EOL.'mango' .PHP_EOL.'grape';
        fwrite($file_handle, $file_content);
        fclose($file_handle);
    }
?>