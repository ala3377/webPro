<?php
include("cookies.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-h.css">
    <title>Document</title>
</head>

<body>


    <main>
        <section id="login">
            <h2>صفحة تسجيل الدخول</h2>
            <form action="../phpCode/LoginData.php" method="post">
                <input type="text" placeholder="اسم المستخدم" name="username" value="<?php
                echo $_COOKIE[$user_Cookie] ?>"  >
                <input type="password" placeholder="كلمة المرور" name="password" value="<?php
                echo $_COOKIE[$pass_Cookie] ?>"><br><br>
                <button type="submit">تسجيل الدخول</button><br>
                <hr>

            </form>
        </section>
    </main>


</body>

</html>