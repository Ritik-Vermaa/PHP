<?php
//verfiy the user login info 
session_start();
$_SESSION['username'] = "Ritik";
$_SESSION['favCat'] = "Books";

echo "We have saved your session";
?>