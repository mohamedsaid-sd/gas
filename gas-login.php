<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>تسجيل الدخول - غازك علينا</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Login Page Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .login-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .login-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }

        .login-form .form-group {
            margin-bottom: 20px;
        }

        .login-form .btn {
            width: 100%;
            background-color: #28a745; /* لون الزر أخضر */
            color: #fff;
            border: none;
            padding: 10px;
        }

        .login-form .btn:hover {
            background-color: #218838;
        }

        .login-form .links {
            margin-top: 15px;
            text-align: center;
        }

        .login-form .links a {
            color: #28a745;
            text-decoration: none;
        }

        .footer-section {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-links a {
            color: #fff;
            margin-right: 15px;
            text-decoration: none;
        }

        .footer-social a {
            color: #fff;
            margin-right: 10px;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<?php
session_start();
// Include Header
include 'header.php';
include 'config.php';

if (isset($_POST['login'])) {
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM `shops` WHERE phone='$phone'");
    $row = mysqli_fetch_array($query);

    if ($row && $password == $row['password']) { // يجب استخدام التحقق من كلمة المرور المشفرة إذا كانت كذلك
        $_SESSION['id'] = $row['id'];
        echo "<div class='alert alert-success'>تم تسجيل الدخول بنجاح...</div>";
        header("refresh:3;url=gas-detailes.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>خطأ في بيانات الدخول.</div>";
    }
}
?>

<div class="login-container">
    <div class="image-container">
        <img src="images/download.jpg" alt="Client Image"> <!-- إعادة الصورة -->
    </div>
    <div class="login-form">
        <h2>تسجيل الدخول كمحل غاز</h2>
        <form action="gas-login.php" method="post">
            <div class="form-group">
                <label for="phone">رقم الهاتف:</label>
                <input type="text" id="phone" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">كلمة المرور:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success" name="login">تسجيل الدخول</button> <!-- زر باللون الأخضر -->
            <div class="links">
                <a href="gas-registration.php">إنشاء حساب جديد</a>
            </div>
        </form>
    </div>
</div>

<!-- Footer Section -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-content">
            <div class="footer-links">
                <a href="index.html#about">عن المشروع</a>
                <a href="index.html#services">الخدمات</a>
                <a href="index.html#contact">تواصل معنا</a>
            </div>
            <div class="footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 جميع الحقوق محفوظة.</p>
        </div>
    </div>
</footer>

</body>
</html>
