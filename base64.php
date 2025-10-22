<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing</title>
</head>
<body>
    
 <?php

$pass = isset($_GET['pass']) ? $_GET['pass'] : '1234'; // Ternary Operator to check if 'pass' is set in GET parameters

echo password_hash($pass, PASSWORD_DEFAULT) . "<br>"; 
echo password_hash($pass, PASSWORD_BCRYPT);
 ?>


</body>
</html