<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Two Values</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <form method="post" action="" class="main">
        <div class="box">
            <h1>Add Values</h1>
            <input type="text" name="name1" placeholder="Enter Value">
            <input type="text" name="name2" placeholder="Enter Value">
            <button type="submit">Add</button>
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $num1 = $_POST["name1"];
                $num2 = $_POST["name2"];
                
                $result = $num1 + $num2;
                
                echo '<h2>Result: <span>' . $result . '</span></h2>';
            }
            ?>
        </div>
    </form>
</body>
</html>
