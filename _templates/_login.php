<?php
//$username= $_POST['email_add'];
//$password= $_POST['u_password'];

//$result = validate_credentials($username, $password);


//if ($result) {
// Redirect to the dashboard or home page

// ?>
<!-- <main class="container">
    <div class="bg-body-tertiary p-5 rounded mt-3">
        <h1>Login Successful </h1>
        <p class="lead">This example is a quick exercise to login validation .</p> <a
            class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar" role="button">View navbar docs »</a>
    </div>
</main> -->

<?php

//} else {
?>


<?php
include_once "libs/load.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM auth WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        echo "Login successful!";
    } else {
        echo "Login failed!";
    }
}
?>


<main class="form-signin w-100 m-auto">
    <form method="post" action="test.php"> <img class="mb-4"
            src="https://marstech.lk/wp-content/uploads/2025/03/Mars-Logo.png" alt="" width="300">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <div class="form-floating"> <input name="email_add" type="email" class="form-control" id="floatingInput"
                placeholder="name@example.com"> <label for="floatingInput">Email address</label> </div>
        <div class="form-floating"> <input name="u_password" type="password" class="form-control" id="floatingPassword"
                placeholder="Password"> <label for="floatingPassword">Password</label> </div>
        <div class="form-check text-start my-3"> <input class="form-check-input" type="checkbox" value="remember-me"
                id="checkDefault"> <label class="form-check-label" for="checkDefault">
                Remember me
            </label> </div> <button class="btn btn-primary w-100 py-2 hvr-wobble-bottom" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2025</p>
    </form>
</main>
<?php

//}
?>