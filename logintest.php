<?php 

//include './libs/load.php';

include 'libs/load.php';


$user = "test";
$pass = "marstech";

$test = User::login($user, $pass);
if ($test) {
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}


?>