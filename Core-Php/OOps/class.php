<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class CSE{
    public $no = 39;
    function Name ($studentName ){
        echo $studentName;
    }
}

$obj = new CSE ;
$obj->Name("Ritik");
echo  " <br>{$obj->no}";
?>
</body>
</html>