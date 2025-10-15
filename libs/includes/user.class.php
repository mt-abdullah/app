<?php

class User {
    private $conn;
    public static function singup($Username, $Password, $email, $phone)
{



    $conn = Database::getConnction();


    $sql = "INSERT INTO `auth` (`id`, `username`, `password`, `email`, `phone`, `blocked`, `active`) 
VALUES (NULL, '$Username', '$Password', '$email', '$phone', '0', '0')";

    $error = false;

    if ($conn->query($sql) === TRUE) {
        $error = false;
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        $error = $conn->error;
    }

    $conn->close();

    return $error;



}

public function __construct($Username){
    $this->conn = Database::getConnction();
    $this->conn->query();

}
}


?>