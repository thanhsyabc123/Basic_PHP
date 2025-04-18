<?php
        echo "We talk about conditionals.<br/>";
        // $age = 30;
        // if ($age>= 18){
        //     echo "You are eligible to vote.";
        // }else{
        //     echo "You are not eligible to vote.";
        // }
        // $date_time = date('F j, Y');
        // echo $date_time;
        // $hour=date("H");
        // echo $hour;
        // if($hour<=12){
        //     echo "Good morning!";
        // }
        // else if($hour<=18){
        //     echo "Good afternoon!";
        // }
        // else{
        //     echo "Good evening!";
        // }
        $comments = [
            'Goods','I like it','How are you ?'
        ];
        // if(!empty($comments)){
        //     echo "There are comments";
        // }
        // else{
        //     echo "No comments";
        // }
        // echo !empty($comments) ? 'Comments':'No comments';
        // echo !empty($comments) ? $comments[0] :'No comments';
        // $first_comment = $comments[0] ?? 'No comments';
        // echo $first_comment;
        $favorite_color = 'aqua';
        switch($favorite_color){
            case 'red':
                echo "Your favorite color is red";
                break;
            case 'blue':
                echo "Your favorite color is blue";
                break;
            case 'green':
                echo "Your favorite color is green";
                break;
            default:
                echo "Your favorite color is not red, blue or green";
        }
?>