<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل محل غاز جديد</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
</head>
<style>

input[type=checkbox]{
  background-color: red;
  width: auto;
}

/* .checkbox-container {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.checkbox-container input[type="checkbox"] {
    margin-left: 10px;
}

.row {
    display: flex;
    flex-wrap: wrap;
}

.col-6 {
    flex: 0 0 50%;
    max-width: 50%;
    box-sizing: border-box;
} */

</style>
<body>
  <?php
  // Include Header
  include 'header.php';
  ?>
<center>

    <div class="registration-container">
        <h2>تسجيل محل غاز جديد</h2>
        <form action="/submit-gas-shop" method="POST" enctype="multipart/form-data">
            <label for="shop-name">اسم المحل:</label>
            <input type="text" id="shop-name" name="shop-name" required>

            <label for="shop-image">صورة المحل:</label>
            <input type="file" id="shop-image" name="shop-image" accept="image/*" required>

            <label for="phone">رقم الهاتف:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="address">العنوان:</label>
            <input type="text" id="address" name="address" required>

            <label for="password">كلمة المرور:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">تأكيد كلمة المرور:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <h3>تحديد الأنابيب المتوفرة:</h3>
            <div class="row">



    <div class="col-6">
    <label class="checkbox-container"><input type="checkbox" name="cylinders" value="اجب"/> اجب </label>
    </div>
    <div class="col-6">
        <label class="checkbox-container"><input type="checkbox" name="cylinders" value="توتال"> توتال</label>
    </div>
    <div class="col-6">
        <label class="checkbox-container"><input type="checkbox" name="cylinders" value="امان"> امان</label>
    </div>
    <div class="col-6">
        <label class="checkbox-container"><input type="checkbox" name="cylinders" value="النيل"> النيل</label>
    </div>
    <div class="col-6">
        <label class="checkbox-container"><input type="checkbox" name="cylinders" value="قادرة"> قادرة</label>
    </div>
    <div class="col-6">
        <label class="checkbox-container"><input type="checkbox" name="cylinders" value="الوطنية"> الوطنية</label>
    </div>
    <div class="col-6">
        <label class="checkbox-container"><input type="checkbox" name="cylinders" value="سودا"> سودا</label>
    </div>
    <div class="col-6">
        <label class="checkbox-container"><input type="checkbox" name="cylinders" value="ايران">ايران</label>
    </div>
</div>

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
