<pre>
<?php 
     
    $cookie_name = "testscript";
    $cookie_value = $_SERVER['REQUEST_URI'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    print_r("_SERVER");
    print_r($_SERVER);
    print_r("_GET");
    print_r($_GET);
    print_r("_POST");
    print_r($_POST);
    print_r("_FILES");
    print_r($_FILES);
    print_r("_COOKIE");
    print_r($_COOKIE);

    echo __DIR__;
?>
</pre>
