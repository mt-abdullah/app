<?php

class Database
{
    public static $conn = null;
    public static function getConnction()
    {
        if (Database::$conn == null) {
            $servername = "localhost";
            $username = "abdulla-0310";
            $password = "200309201173";
            $dbname = "abdulla_newdb";

            mysqli_report(MYSQLI_REPORT_OFF);

            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($connection->connect_error) {
                // die("Connection failed: ");
                echo "Connection failed: " . $connection->connect_error;

            } else {
                //echo "Connected successfully...... assing new connection";
                Database::$conn = $connection;
                return Database::$conn;
            }

        }
        else {
            echo "Using existing connection";
            return Database::$conn;
        }
    }
}

?>