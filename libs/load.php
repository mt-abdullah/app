<?php

include_once 'includes/database.class.php';
include_once 'includes/user.class.php';
include_once 'includes/session.class.php';


Session::start();
function load_template($name){
  // include __DIR__."/../_templates/$name.php";
  include $_SERVER['DOCUMENT_ROOT'] . "/abdulla-0310/app/_templates/$name.php";
  

}
   
//  function validate_credentials($username, $password) {
//     // Dummy validation for demonstration purposes
//     if ($username == "abdullah@gmail.com" && $password == "1234") {
//         return true;
//     } else {
//         return false;
//     }
//   }


// function singup($Username, $Password, $email, $phone) {

// // $servername = "localhost";
// // $username = "abdulla-0310";
// // $password = "200309201173";
// // $dbname = "abdulla_newdb";

// // mysqli_report (MYSQLI_REPORT_OFF);

// // // Create connection
// // $conn = new mysqli($servername, $username, $password, $dbname);
// // // Check connection
// // if ($conn===false) {
// //   // die("Connection failed: ");
// //   echo "Connection failed: ";

// // }
// // else {
// //   echo "Connected successfully";
// // }

//  $conn = Database::getConnction();


// $sql = "INSERT INTO `auth` (`id`, `username`, `password`, `email`, `phone`, `blocked`, `active`) 
// VALUES (NULL, '$Username', '$Password', '$email', '$phone', '0', '0')";

// $error = false;

// if ($conn->query($sql) === TRUE) {
//   $error = false;
// } else {
//   //echo "Error: " . $sql . "<br>" . $conn->error;
//   $error = $conn->error;
// }

// $conn->close();

// return $error;

// }


// git status
// git add .
// git commit -m "step1"

// git config --global user.email "you@example.com"
// git config --global user.name "Your Name"
// git push origin main -->

?>

