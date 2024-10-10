<?php
include("../phpCode/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../html/styles-h.css">
    <link rel="stylesheet" href="../css/vedio_styles.css">

    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <h1>BAZO</h1>
            <ul>
                <li><a href="index.html">الصفحة الرئيسية</a></li>
                <li><a href="../phpCode/Cars.php">صفحات السيارات</a></li>
                <li><a href="../phpCode/Search_cars.php">صفحة البحث</a></li>
                <li><a href="../html/contact.html">صفحة الاتصال</a></li>
                <li><a href="../html/login.html">صفحة تسجيل الدخول</a></li>
                <li><a href="../html/owners.html">صفحة مالكين المعرض</a></li>
                <li><a href="../html/Add_Cars.html">إضافة سيارة</a></li>
            </ul>
        </nav>
    </header>
    <br>

    <div class="div_of_search">
        <form action="search_vedio.php" method="post">
            <input type="text" placeholder="أدخل نص البحث " id="search_video" name="search_video">
            <button type="submit" name="submit"><img src="../icons_and_images/icons8-search.png" alt="أيقونة البحث "></button>
        </form>

    </div>

    <br>


    <?php

    if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    ?>
        <div class="videos">
            <?php

            $video_name = $_POST['search_video'];

            $query = "SELECT * FROM videos where name like'%$video_name%' ";

            $result = mysqli_query($conn, $query);

            if (!$result) {
                echo $result . "<br/>" . mysqli_error($conn);
            }

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $video_url = $row['video_path'];
                    $id = $row['id'];
                    $name = $row['name'];
            ?>
                    <div class="videos_styles">
                        <video controls onclick="window.open('<?php echo $video_url; ?>', '_self')">
                            <source src=" <?php echo $video_url; ?>" type="video/mp4">
                            <source src="<?php echo $video_url; ?>" type="video/mpeg">
                            <source src="<?php echo $video_url; ?>" type="video/mpg">
                            <source src="<?php echo $video_url; ?>" type="video/ogg">

                        </video>

                        <p> <?php echo $id . " - " .  $name ?></p>
                    </div>

                <?php
                }
                ?>
        </div>
<?php
            } else {
                echo "<h2 align='center'>!Not Found any video</h2> ";
            }
        } else {
            echo "<h1>you made mestake !</h1>";
        }

?>

<br><br>
<footer>
    <div class="footer-content">

        <ul>
            <li><a href="../html/privacy.html">سياسة الخصوصية</a></li>
            <li><a href="../html/terms.html">شروط الاستخدام</a></li>
            <li><a href="../html/contact.html">اتصل بنا</a></li>
        </ul>
        <p>جميع الحقوق محفوظة &copy; 2023</p>
    </div>
</footer>
</body>

</html>