<?php

session_start();
$cookie_name = "testscript";
$cookie_value = $_SERVER['REQUEST_URI'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

// print_r("_SERVER");
// print_r($_SERVER);
// print_r("_GET");
// print_r($_GET);
// print_r("_POST");
// print_r($_POST);
// print_r("_FILES");
// print_r($_FILES);
// print_r("_COOKIE");
// print_r($_COOKIE);

print ("_SESSION <br>");
print_r($_SESSION);

if (isset($_SESSION["a"])) {
    print ("Variable already exists..... Value: {$_SESSION['a']}");
} else {
    $_SESSION ['a'] = time();
    print ("Assigning new variable..... value: {$_SESSION['a']}");
}







?>