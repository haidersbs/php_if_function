<?php 

$goldenPlus    = 100;

// short hand if statement

$number   = isset($_POST['check']) ? $_POST['number'] : 0;


    function sumon($goldenPlus , $number ){
        if($number == Null){
            echo "";
        }elseif($goldenPlus < $number || $number < 0 ){
            echo "invalid";
        }elseif($number >= 80){
            echo "A+";
        }elseif ($number >= 70){
            echo "A";
        }elseif ($number >= 60){
            echo "A-";
        }elseif ($number >= 50){
            echo "B";
        }elseif($number >= 40){
            echo "C";
        }elseif($number >= 33){
            echo "D";
        }else{
            echo "failed";
        }
    }

    

    
    

?>