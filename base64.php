<?php

// $pass = isset($_GET['pass']) ? $_GET['pass'] : '1234'; // Ternary Operator to check if 'pass' is set in GET parameters

// echo(md5($pass));

// echo password_hash($pass, PASSWORD_DEFAULT) . "<br>"; 
// echo password_hash($pass, PASSWORD_BCRYPT);


$str = <<< EOT
 password12341325465++++++++++++++++++x2jth5fb63f4f4h2f+
 EOT;

echo("Data Length: " . strlen($str) . "\n");

$md5 = md5($str);
$md5len = strlen($md5);

$b64 = base64_encode($str);
$b64len = strlen($b64);

echo("MD5: $md5 (Length:  $md5len) \n"); 
echo("Base64: $b64 (Length:  $b64len) \n"); 
 ?>