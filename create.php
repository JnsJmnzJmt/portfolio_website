<?php 

require('database.php');

if(isset($_POST['send_button'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $queryCreate = "INSERT INTO contact_table VALUES (null, '$name', '$email', '$message')";
    $sqlCreate = mysqli_query($connection, $queryCreate);

    echo '<script> alert("Sent Successfully"); </script>';
    echo '<script> window.location.href = "home.php" </script>';
}

else{
    echo '<script> window.location.href = "contact.php" </script>';
}

?>