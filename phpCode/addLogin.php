<?php
require("db.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the input values
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $password2=$_POST['pass2'];
    $email = $_POST['email'];
    $email2 = $_POST['email2'];
    $phone_num=$_POST['phone'];
    // Construct the SQL query
    if($password=== $password2 and $email=== $email2){

    $sql = "INSERT INTO user (username, email,password,phon_num) VALUES (?,?,?,?)";

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the input values to the prepared statement
    //   على حسب عدد الاعمدة التي سنستخدمها في الاستعلام s نعمل حرف ال
    mysqli_stmt_bind_param($stmt,"ssss",$username, $email, $password, $phone_num);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
            header("Location: ../html/index.html"); // Redirect user to index.html
    } else {
        echo "Error inserting record: " . mysqli_error($conn);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
}else{
echo"password and it's repeared or email and it's reapeared isn't simlier" ."<br>";
}
}

// Close the database connection
mysqli_close($conn);

