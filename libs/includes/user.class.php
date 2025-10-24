<?php

class User
{
    private $conn;
    public static function singup($Username, $Password, $email, $phone)
    {

        $Password = md5(strrev(md5($Password))); // Security Through Obscurity

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

    public static function login($Username, $Password)
    {
        $Password = md5(strrev(md5($Password)));
        $query = "SELECT * FROM auth WHERE username = 'test'";
        $conn = Database::getConnction();
        $result = $conn->query($query);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if ($row['password'] == $Password) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;


        }


    }




    public function __construct($Username)
    {
        $this->conn = Database::getConnction();
        $this->conn->query();

    }


    public static function authenticate()
    {

    }

    public static function getBio()
    {

    }

    public static function setBio()
    {

    }

    public static function getAvatar()
    {

    }

    public static function setAvatar()
    {

    }
}


?>