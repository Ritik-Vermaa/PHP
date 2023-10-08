<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    .container{
        max-width: 80%;
        background-color: aqua;
        margin: auto;
        padding: 23px;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lets Learn About PHP</h1>
        <?php
        $age = 10;

        if ($age >= 10) {
            echo "You can go to party";
        }
        else {
            echo "You can not go to the party";
        }
        ?>
    </div>
</body>
</html>


<!-- http://localhost/core-php/Conditional%20Statements/Index.php -->