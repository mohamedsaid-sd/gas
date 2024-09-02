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

    include 'config.php';

// Add new customer
if(isset($_POST['add_shope'])){


 


    $shop_name    = $_POST['shop_name'];
    $phone  = $_POST['phone'];
    $location = $_POST['location'];
    $address   = $_POST['address'];

    $password   = $_POST['password'];
    $agb   = $_POST['agb'];
    $total   = $_POST['total'];
    $aman   = $_POST['aman'];
    $alnail   = $_POST['alnail'];
    $gadra   = $_POST['gadra'];
    $alwdania   = $_POST['alwdania'];
    $soda   = $_POST['soda'];
    $iran   = $_POST['iran'];


 

$duplicate=mysqli_query($con,"select * from shops where shop_name='$shop_name'");

if (mysqli_num_rows($duplicate)>0)
{
        echo "<div id='alert_good'>هذا المحل موجود</div>";
}else{


$file = $_FILES['file'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $image_name = "images/". "IMG".date("h.i.s").".jpg";

    $add_shops_query = mysqli_query( $con ," INSERT INTO `shops` (`id`, `shop_name`, `shop_image`, `phone`, `location`, `address`, `password`, `agb`, `total`, `aman`, `alnail`, `gadra`, `alwdania`, `soda`, `iran`) VALUES (NULL, '$shop_name', '$image_name', '$phone',  '$location', '$address', '$password', '$agb', '$total', '$aman', '$alnail', '$gadra', '$alwdania', '$soda', '$iran'); ");
 
    move_uploaded_file($file_tmp, $image_name );






        if($add_shops_query){
        echo "<div id='alert_good'>تم اضافه المحل بنجاح</div>";
        }else{
        echo "خطأ في عملية الاضافة";
        }
    
}
}
  ?>
<center>

    <div class="registration-container">
        <h2>تسجيل محل غاز جديد</h2>
        <form action="gas-registration.php" method="POST" enctype="multipart/form-data">
            <label for="shop_name">اسم المحل:</label>
            <input type="text" id="shop_name" name="shop_name" required>

            <label for="shop_image">صورة المحل:</label>
            <input type="file" id="file" name="file" accept="image/*" required>

            <label for="phone">رقم الهاتف:</label>
            <input type="tel" id="phone" name="phone" required>


              <label for="location">المنطقه :</label>
            <select id="location" name="location" required>
                <option value="الخرطوم">الخرطوم</option>
                <option value="بحري">بحري</option>
                <option value="امدرمان">امدرمان</option>

            </select>

            <label for="address">العنوان:</label>
            <input type="text" id="address" name="address" required>

            <label for="password">كلمة المرور:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">تأكيد كلمة المرور:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <h3>تحديد الأنابيب المتوفرة:</h3>
            <div class="row">



    <div class="col-6">

        <label for="agb">اجب :</label>
            <select id="agb" name="agb" required>
                <option value="1">متوفرة</option>
                <option value="0">غير متوفرة</option>
            </select>


    </div>
    <div class="col-6">
            <label for="total">توتال :</label>
            <select id="total" name="total" required>
                <option value="1">متوفرة</option>
                <option value="0">غير متوفرة</option>
            </select>
    </div>
    <div class="col-6">

             <label for="aman">امام :</label>
            <select id="aman" name="aman" required>
                <option value="1">متوفرة</option>
                <option value="0">غير متوفرة</option>
            </select>
    </div>
    <div class="col-6">

            <label for="alnail">النيل :</label>
            <select id="alnail" name="alnail" required>
                <option value="1">متوفرة</option>
                <option value="0">غير متوفرة</option>
            </select>
    </div>
    <div class="col-6">

            <label for="gadra">قادرة :</label>
            <select id="gadra" name="gadra" required>
                <option value="1">متوفرة</option>
                <option value="0">غير متوفرة</option>
            </select>
    </div>
    <div class="col-6">

          <label for="alwdania">الوطنية :</label>
            <select id="alwdania" name="alwdania" required>
                <option value="1">متوفرة</option>
                <option value="0">غير متوفرة</option>
            </select>
    </div>
    <div class="col-6">

        <label for="soda">سودة :</label>
            <select id="soda" name="soda" required>
                <option value="1">متوفرة</option>
                <option value="0">غير متوفرة</option>
            </select>
    </div>
    <div class="col-6">

        <label for="iran">ايران :</label>
            <select id="iran" name="iran" required>
                <option value="1">متوفرة</option>
                <option value="0">غير متوفرة</option>
            </select>
    </div>
</div>

            <button type="submit" name="add_shope" >تسجيل</button>
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
