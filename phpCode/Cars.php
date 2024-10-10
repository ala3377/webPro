<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-h.css">
    <title>صفحات السيارات</title>
    <style>
        #cars {
            position: relative;
            display: contents;
            text-align: center;

        }

        div {
            width: 50%;
            height: 50%;
            margin-bottom: 2%;
            /* margin-top: 25%; */
            margin-right: 0%;
            margin-left: 25%;
        }

        div #car_image {
            width: 190%;
            height: 40%;
        }

        div p {
            position: relative;
            display: list-item;
        }
    </style>
    <link rel="icon " href="../image/ic.png" type="image/jpeg">
</head>

<body>
    <header>
        <nav>
            <h1>BAZO</h1>
            <ul>
                <li><a href="../index.html">الصفحة الرئيسية</a></li>
                <li><a href="../phpCode/Cars.php">صفحات السيارات</a></li>
                <li><a href="../deal_with_vedio/displaying.php"> فيديوهات</a></li>
                <li><a href="../phpCode/Search_cars.php">صفحة البحث</a></li>
                <li><a href="../html/contact.html">صفحة الاتصال</a></li>
                <li><a href="../html/login.html">صفحة تسجيل الدخول</a></li>
                <li><a href="../html/owners.html">صفحة مالكين المعرض</a></li>
                <li><a href="../html/Add_Cars.html">إضافة سيارة</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="cars">

            <?php

            $query = "SELECT * FROM car";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                echo $result . "<br/>" . mysqli_error($conn);
            }

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <div class="car">
                        <img id="car_image" src="<?php echo $row['car_image']; ?>" alt="صورة السيارة"" height=" 300px" width="400px" />
                        <p> <strong>العلامة التجارية</strong> <img src="<?php echo $row['CAR_Image_BRAND']; ?>" alt="العلامة التجارية" height=" 20px" width="30px" />
                        <p><strong>الموديل:</strong><?php echo $row['CAR_MODEL']; ?></p>
                        <p><strong>لون السيارة:</strong><?php echo $row['CAR_COLOR']; ?></p>
                        <p><strong>سعة السيارة:</strong><?php echo $row['CAR_CAPACITY']; ?></p>
                        <p><strong>نوع الوقود:</strong><?php echo $row['CAR_FUEL_TYPE']; ?></p>
                        <p><strong>حالة السيارة:</strong><?php echo $row['CAR_CONDITION']; ?></p>
                        <p><strong>السعر:</strong><?php echo $row['CAR_PRICE']; ?></p>
                        <p><strong>الشركة المصنعة:</strong><?php echo $row['compony_name']; ?></p>;

                        </p>
                    </div>

                <?php
                }
            } else {
                ?>
                <h3>No image Found!</h3>
            <?php
            }
            ?>


        </section>
    </main>
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
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>