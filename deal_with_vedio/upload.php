<?php
session_start();
require("../phpCode/db.php"); // Adjust the path to your database connection file

function is_valid_type($file)
{
    $valid_types = array('video/mp4', 'video/mpeg', 'video/mpg', 'audio/mpeg');
    return in_array($file['type'], $valid_types);
}

$TARGET_FOLDER = "../videos_files/"; // Set your desired folder path
$name = $_POST['name']; // Assuming you have a 'name' field in your form
$video_path = $_FILES['video_path'];// لاستقبال ملف الفيديو الذي تم ادخاله

if ($name == "" || $video_path['name'] == "") {
    $_SESSION['error'] = "All fields are required";
    header("Location: form_script.php"); // Redirect back to your form page
    exit;
}

if (!is_valid_type($video_path)) {
    $_SESSION['error'] = "You must upload a valid video file";
    header("Location: index.php");
    exit;
}

$target_file = $TARGET_FOLDER . $video_path['name'];

//move the video in that folder
if (move_uploaded_file($video_path['tmp_name'], $target_file)) {
    $sql = "INSERT INTO videos (name, video_path) VALUES ('$name', '$target_file')";
    $result = mysqli_query($conn,$sql) or die("Could not insert data into DB: " . mysqli_error($conn));
    header("Location: ../deal_with_vedio/form_script.php"); // Redirect to a success page
    exit;
} else {
    $_SESSION['error'] = "Could not upload file. Check read/write permissions on the directory";
    header("Location: form_script.php");
    exit;
}
