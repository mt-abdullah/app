<?php

//include './libs/load.php';

include 'libs/load.php';

$user = "test";
$pass = "marstech";
$result = null;

if(isset($_GET['logout'])){
    Session::destroy();
    die("Session Destroyed <br> <br> <a href='logintest.php'>Login Again </a> ");
}

if (Session::get('is_loggedin')) {
    $userdata = Session::get('session_user');
    print ("Welcome Back , $user");
    $result = $userdata;
} else {
    print ("No Session Found, trying to login now.<br>");
    $result = User::login($user, $pass);
    print_r($result);

    if ($result) {
        echo "Login successful! $user";
        Session::set('is_loggedin', true);
        Session::set('session_user', $result);
    } else {
        echo "Invalid username or password.";
    }
}

echo <<< EOL
<br><br><a href="logintest.php?logout">Logout</a>
EOL


?>