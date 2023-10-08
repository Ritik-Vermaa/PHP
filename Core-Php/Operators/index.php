<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $variable1 = 10;
    $variable2 = 2;
    // Operators in PHP

    // Arithmetic Operators
    echo "The value of Variable1 + Variable2 is :  ";
    echo $variable1 +  $variable2;
    echo "<br>";
    echo "The value of Variable1 - Variable2 is :  ";
    echo $variable1 -  $variable2;
    echo "<br>";
    echo "The value of Variable1 * Variable2 is :  ";
    echo $variable1 *  $variable2;
    echo "<br>";
    echo "The value of Variable1 / Variable2 is :  ";
    echo $variable1 /  $variable2;
    echo "<br>";


    // Assinment Operators
    echo "<h1>Assinment Operators</h1>";
    echo "<br>";
    $newVar = $variable1;
    $newVar += 1;

    echo $newVar;

    // comparision Operators
    echo "<h1>Comparision Operators</h1>";
    echo var_dump(1==5); // var_dump ka use karke php me two value ko check kar sakte ha
    echo "<br>";
    echo var_dump(1>4);
    echo "<br>";
    echo var_dump(1<4);


    // Increment/ Decrement Operators
    echo "<h1>Increment/ Decrement Operators</h1>";
    echo $variable1++;
    echo "<br>";
    echo $variable1--;
    echo "<br>";
    echo ++$variable1;
    echo "<br>";
    echo --$variable1;
    echo "<br>";


    // Logical Operators
    echo "<h1>Logical Operators</h1>";
    //and (&&) Dono value true 
    $myVar = (true && true);
    echo var_dump($myVar)
    // or(||) ek condition true  hogi
    // xor ek value false hogi
    // (!) not 

    ?>

</body>

</html>