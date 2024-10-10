<?php
session_start();

include("cookies.php");
function login()
{
    require("db.php");
    include("cookies.php");

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Retrieve the input values
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Hash the password securely
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        setcookie($user_Cookie, $username, time() + (86400*30)); // 86400 = 1 day
        setcookie($pass_Cookie, $password, time() + (86400*30)); // 86400 = 1 day

       // if(!isset($_COOKIE[]))

        // Checking if user exists in the database
        $sql = "SELECT * FROM user WHERE username = '$username'";

        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $row = mysqli_fetch_assoc($result);

        if ($row && $password===$row['PASSWORD']) {

            if ($result) {
                $_SESSION[$username];
                header("Location: ../html/index.html"); // Redirect user to index.html
            }
            setcookie("username", $username, time() + 600);
            setcookie("password", $password, time() + 600);
            // Valid login credentials
         //header("Location: ../html/index.html"); // Redirect user to index.html
        } else {
            echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='../html/login.html'>create a new account</a></div>";
        }



    }
    mysqli_close($conn);
}

login();

?>