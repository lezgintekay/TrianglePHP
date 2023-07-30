<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Triangle</title>
</head>
<body>
<?php


function triangle($numberOfLine){
    $line = 1 ;

    while ($line <= $numberOfLine){

        for($column =1 ; $column<=$line; $column++){

            echo "O";
        }
        echo "<br>";
        $line++;
    }

}

triangle(15);

?>


</body>
</html>
