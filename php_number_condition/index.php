<?php 




$defaultNumber     = 100;

//$number            = $_POST['number'] ;

// short hand if statement

$number   = isset($_POST['number']) ? $_POST['number'] : NULL;

if($defaultNumber > $number ){
    echo 'condition right';
}else{
    echo 'condition false';
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
</body>
</html>