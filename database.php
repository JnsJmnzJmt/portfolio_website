<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'portfolio_website';

$connection = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_error()){
    echo "Message: " . mysqli_connect_error(); 
}

else{
    echo "It is working as intended!";
}

?>