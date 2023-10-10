<?php
$cookie_name = "name";
$cookie_value = "Ritik";

setcookie($cookie_name ,$cookie_value , time() + 10 ,"/");


?>

<?php
    if(isset($_COOKIE[$cookie_name])) {
        echo "Your name is {$cookie_value}";
    }
    
?>