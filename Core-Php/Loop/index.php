<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $name = array("Aman", "Sachin", "Soun", "Monu");

 // while loop
    $a  = 0;
    while ($a < count($name)) {
        echo $name[$a];
        echo "<br>";
        $a++;
    }


    $a  = 0;
    while ($a <= 10) {
        echo "<br>";

        echo "Hello!";
        echo "<br>";
        $a++;
    }

    // do while loop
    // $a  = 0;
    // do{
    //     echo "<br>";

    //     echo "Hyy";
    //     echo "<br>";
    //     $a++;
    // }

    // while ($a <= 5);


    //for loop

    for ($i=0; $i < 5; $i++) { 
        echo "Hurra";
    }





    ?>
</body>

</html>