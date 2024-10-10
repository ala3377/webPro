<?php require("../phpCode/db.php"); // Adjust the path to your database connection file 
?>

<html>

<head>
    <link rel="stylesheet" href="../html/styles-h.css">
    <link rel="stylesheet" href="../css/vedio_styles.css">
    <title>Video Gallery</title>
</head>

<body dir="ltr">
    <header>
        <h1>BAZO</h1>
        <nav>
            <ul>
                <li><a href="../html/index.html">الصفحة الرئيسية</a></li>
                <li><a href="../phpCode/Cars.php">صفحات السيارات</a></li>
                <li><a href="../phpCode/Search_cars.php">صفحة البحث</a></li>
                <li><a href="../html/contact.html">صفحة الاتصال</a></li>
                <li><a href="../html/login.html">صفحة تسجيل الدخول</a></li>
                <li><a href="../html/owners.html">صفحة مالكين المعرض</a></li>
                <li><a href="../html/Add_Cars.html">إضافة سيارة</a></li>
                <li><a href="../deal_with_vedio/add_vedio.php">إضافة فيديو </a></li>
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
    $sql = "SELECT * FROM videos";
    $result = mysqli_query($conn, $sql) or die("Could not access DB: " . mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {

    ?>
        <div class="videos">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $video_url = $row['video_path'];
                $id = $row['id'];
                $name = $row['name'];
            ?>
                <!-- width="320px" height="300px" -->
                <div dir="rtl" class="videos_styles">
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

    ?>



    <footer>

        <div class="footer-content">

            <ul>
                <li><a href="privacy.html">سياسة الخصوصية</a></li>
                <li><a href="terms.html">شروط الاستخدام</a></li>
                <li><a href="contact.html">اتصل بنا</a></li>
            </ul>
            <p>جميع الحقوق محفوظة &copy; 2023</p>
        </div>

    </footer>


</body>

</html>