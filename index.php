<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is html code block</h1>
    <?php

    echo 'This is php block inside html';
    ?>

</body>
</html>



<?php

echo '<h1>Hello World</h1>';

// Calculation 
$number1 = 10;
$number2 = 20;

$result = $number1 + $number2;

echo 'The result is'. $result . '<br>';

// For loop
for($i=0; $i<5; $i++){
    echo 'Hello World <br>'; 
    echo $i. '<br>'; 
}


?>