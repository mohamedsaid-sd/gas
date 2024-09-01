<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل حساب عميل</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
</head>
<body style="text-align: center;align-items: center;align-self: center;align-content: center;">

  <?php
  // Include Header
  include 'header.php';
  ?>
   <center>
    <div class="registration-container">
        <h2>تسجيل حساب عميل</h2>
        <form action="/submit-form" method="POST">
            <label for="name">الاسم:</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">رقم الهاتف:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="gender">النوع:</label>
            <select id="gender" name="gender" required>
                <option value="male">ذكر</option>
                <option value="female">أنثى</option>
                <option value="other">آخر</option>
            </select>

            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">كلمة السر:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">تأكيد كلمة السر:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <button type="submit">تسجيل</button>
        </form>
    </div>
  </center>
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
