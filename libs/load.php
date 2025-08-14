<?php

function load_template($name){
  // include __DIR__."/../_templates/$name.php";
  include $_SERVER['DOCUMENT_ROOT'] . "/abdulla-0310/app/_templates/$name.php";

}
   
 function validate_credentials($username, $password) {
    // Dummy validation for demonstration purposes
    if ($username == "abdullah@gmail.com" && $password == "1234") {
        return true;
    } else {
        return false;
    }
  }

?>

<!-- // git status
// git add .
// git commit -m "step1"

// git config --global user.email "you@example.com"
// git config --global user.name "Your Name"
// git push origin main -->
