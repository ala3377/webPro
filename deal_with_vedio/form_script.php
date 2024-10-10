<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/styles-index.css">
    <link rel="stylesheet" href="../css/styles_add_cars.css">
    <link rel="stylesheet" href="../css/form_script_styles.css">
    <style>
        .AddVideo_Box select {
            width: 91%;
            padding: 1%;
            margin-top: 4%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
    </style>
    <title>Upload Video</title>
</head>

<body dir="ltr">

    <header>
        <nav>
            <h1>BAZO</h1>
            <ul>
                <li><a href="../html/index.html">الصفحة الرئيسية</a></li>
                <li><a href="../phpCode/Cars.php">صفحات السيارات</a></li>
                <li><a href="../phpCode/Search_cars.php">صفحة البحث</a></li>
                <li><a href="../html/contact.html">صفحة الاتصال</a></li>
                <li><a href="../html/login.html">صفحة تسجيل الدخول</a></li>
                <li><a href="../html/owners.html">صفحة مالكين المعرض</a></li>
                <li><a href="../html/Add_Cars.html">إضافة سيارة</a></li>
                <li><a href="../deal_with_vedio/displaying.php">عرض الفيديوهات </a></li>
            </ul>
        </nav>
    </header>
    <br>
    <div class="mydiv" dir="ltr">
        <form action="upload.php" method="post" enctype="multipart/form-data" class="AddVideo_Box">
            Video Name:<input type="text" name="name" id="name" required><br><br>

            Video category:<br> <select id="video_category" name="video_category" size="0"><!-- To Add type of fuel -->
                <option value="فيديوهات مضحكه">فيديوهات مضحكه</option>
                <option value="مقاطع قصيره">مقاطع قصيره</option>
            </select><br><br><br><br>

            Choose a video file: <div class="myfiles">
                <input type="file" name="video_path" id="video_path" accept="video/*" required><br>
            </div>
            <input type="submit" value="Upload">
        </form>

    </div>

    <br><br><br>

    <footer>
        <ul>
            <li><a href="../html/privacy.html">سياسة الخصوصية</a></li>
            <li><a href="../html/terms.html">شروط الاستخدام</a></li>
            <li><a href="../html/contact.html">اتصل بنا</a></li>
        </ul>
        <p>جميع الحقوق محفوظة لدى الشركة &copy; 2023</p>
    </footer>

</body>

</html>