<?php
include("../phpCode/cookies.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles-h.css">
  <title>صفحة تسجيل الدخول</title>
  <link rel="icon " href="../image/ic.png" type="image/jpeg">
</head>

<body>
  <header>
    <h1>BAZO</h1>
    <nav>
      <ul>
        <li>
        <li><a href="../index.html/">الصفحة الرئيسية</a></li>
        </li>
        <li><a href="../phpCode/Cars.php">صفحات السيارات</a></li>
        <li><a href="../phpCode/Search_cars.php">صفحة البحث</a></li>
        <li><a href="../html/contact.html">صفحة الاتصال</a></li>
        <li><a href="../html/login.html">صفحة تسجيل الدخول</a></li>
        <li><a href="../html/owners.html">صفحة مالكين المعرض</a></li>
        <li><a href="../html/Add_Cars.html">إضافة سيارة</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="login">
      <h2>صفحة تسجيل الدخول</h2>
      <form action="../phpCode/LoginData.php" method="post">
        <input type="text" placeholder="اسم المستخدم" name="username" value="<?php
                                                                              echo $_COOKIE[$user_Cookie] ?>">
        <input type="password" placeholder="كلمة المرور" name="password" value="<?php
                                                                                echo $_COOKIE[$pass_Cookie] ?>"><br><br>
        <button type="submit">تسجيل الدخول</button><br>
        <hr>

      </form>
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
</body>

</html>