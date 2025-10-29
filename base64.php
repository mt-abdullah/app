<?php
// $pass = isset($_GET['pass']) ? $_GET['pass'] : '1234'; // Ternary Operator to check if 'pass' is set in GET parameters

// echo(md5($pass));

// echo password_hash($pass, PASSWORD_DEFAULT) . "<br>"; 
// echo password_hash($pass, PASSWORD_BCRYPT);


// $str = <<< EOT
//  password12341325465++++++++++++++++++x2jth5fb63f4f4h2f+
//  EOT;

// echo("Data Length: " . strlen($str) . "\n");

// $md5 = md5($str);
// $md5len = strlen($md5);

// $b64 = base64_encode($str);
// $b64len = strlen($b64);

// echo("MD5: $md5 (Length:  $md5len) \n"); 
// echo("Base64: $b64 (Length:  $b64len) \n"); 

// $data = "hello";



// foreach (hash_algos() as $v) {

//         $r = hash($v, $data, false);

//         printf("%-12s %3d %s\n", $v, strlen($r), $r);

// }

// $time = microtime(true);

// $options = [
//     // Increase the bcrypt cost from 12 to 13.
//     'cost' => 7,
// ];
// echo password_hash("123", PASSWORD_BCRYPT, $options);
// echo "\nTook time " . (microtime(true) - $time)." seconds\n";

// See the password_hash() example to see where this came from.
$hash = '$2y$07$fmUw0QpToffEwp0heuBM8evjShqXIJXYIHhndmIgIPwp5uFkkfOSe';

if (password_verify('123', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

 ?>