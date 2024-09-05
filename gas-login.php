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

 
    </style>
</head>
<body>

<?php
// Include Header
include 'header.php';
include 'config.php';


 if(isset($_POST['login'])){
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        $flag = false;
        $query = mysqli_query($con, "SELECT * FROM `shops`");
        while ($row = mysqli_fetch_array($query)) {
            if($phone == $row['phone'] && $password == $row['password']){
                $flag = true;

                            $_SESSION['id'] = $row['id'] ;

              
            }
        }

                                $redirectUrl = "gas-detailes.php";


        if($flag){
           

                echo "<div class='alert alert-success'>تم تسجيل الدخول بنجاح... ";
                echo "<meta http-equiv='refresh' content='3;url={$redirectUrl}'>";
            }
         else {
            echo "<div class='alert alert-danger'>خطأ في بيانات الدخول.</div>";
        }
    }
    
?>

<div class="login-container">
    <div class="image-container">
        <img src="images/download.jpg" alt="Client Image">
    </div>
    <div class="login-form">
        <h2>تسجيل الدخول كمحل غاز</h2>
        <form action="gas-login.php" method="post">
            <div class="form-group">
                <label for="username">رقم الهاتف:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="password">كلمة المرور:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn" name="login">تسجيل الدخول</button>
            <div class="links">
                <a href="gas-registration.php">إنشاء حساب جديد</a> | 
                <a href="gas-detailes.php">نسيت كلمة المرور؟</a>
            </div>
        </form>
    </div>
</div>

<!-- Footer Section -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
               <!--  <img src="images/logo.png" alt="Logo"> -->
            </div>
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
