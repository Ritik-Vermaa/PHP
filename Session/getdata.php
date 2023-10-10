<?php
//start the session and get tha data 
session_start();
if(isset($_SESSION['username'])){
   echo "Welcome " . $_SESSION['username']; 
echo "<br> Your Favorite category is " .$_SESSION['favCat']; 
}

else{
    echo "Please login to continue";
}

?>