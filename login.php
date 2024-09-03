<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>تسجيل الدخول - غازك علينا</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      <!-- خط عربي جميل من Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap">
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
        $email = $_POST['email'];
        $password = $_POST['password'];

        $flag = false;
        $query = mysqli_query($con, "SELECT * FROM `customers`");
        while ($row = mysqli_fetch_array($query)) {
            if($email == $row['email'] && $password == $row['password']){
                $flag = true;
              
            }
        }

                                $redirectUrl = "offers.php";


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
        <img src="images/client-image.jpg" alt="Client Image">
    </div>
    <div class="login-form">
        <h2>تسجيل الدخول كعميل</h2>
        <form action="login.php" method="post" >
            <div class="form-group">
                <label for="username">البريد الإلكتروني أو اسم المستخدم:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">كلمة المرور:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn" name="login">تسجيل الدخول</button>
            <div class="links">
                <a href="registration.php">إنشاء حساب جديد</a> 
               <!--  | <a href="registration.php">نسيت كلمة المرور؟</a> -->
            </div>
        </form>
    </div>
</div>

<?php
//include footer
include 'footer.php';
?>

</body>
</html>
