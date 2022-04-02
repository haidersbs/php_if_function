<?php 

$goldenPlus    = 100;

// short hand if statement

$number   = isset($_POST['check']) ? $_POST['number'] : 0;


    function sumon($goldenPlus , $number ){
        if($number == Null){
            echo "";
        }elseif($goldenPlus >= $number &&  $number >=90){ 
            echo "Golden A+";
        }elseif($goldenPlus >= $number &&  $number >=80){
            echo "A+";
        }elseif($goldenPlus >= $number &&  $number >=70){
            echo "B grade";
        }elseif($goldenPlus >= $number &&  $number >=60){
            echo "C grade";
        }elseif($goldenPlus >= $number &&  $number >=50){
            echo "C grade";
        }
        elseif($goldenPlus >= $number &&  $number >=33){
            echo "D grade";
        }else{
            echo "You failed";
        }
    }

    

    
    

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php learn</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="number">
       

        <input type="submit" name="check" value="check">
    </form>


    <h2 style="color:red;">Your Result: <?php  sumon($goldenPlus , $number ); ?></h2>
</body>
</html>