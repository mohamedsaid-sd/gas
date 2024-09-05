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

    $agb   = "0";

    if (isset($_POST['agb'])) {
    $agb   = "1";
} 

   $total   = "0";


    if (isset($_POST['total'])) {
    $total   = "1";
} 

     $aman   = "0";


    if (isset($_POST['aman'])) {
    $aman   = "1";
} 
  $alnail   = "0";

    if (isset($_POST['alnail'])) {
    $alnail   = "1";
}

  $gadra   = "0";
    if (isset($_POST['gadra'])) {
    $gadra   = "1";
}
      $alwdania   = "0";
    if (isset($_POST['alwdania'])) {
    $alwdania   = "1";
}
      $soda   = "0";
    if (isset($_POST['soda'])) {
    $soda   = "1";
}

  $iran   = "0";
    if (isset($_POST['iran'])) {
    $iran   = "1";
}


 

$duplicate=mysqli_query($con,"select * from shops where shop_name='$shop_name'");

if (mysqli_num_rows($duplicate)>0)
{
        echo "<div id='alert_good'>هذا المحل موجود</div>";
}else{


$file = $_FILES['file'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $image_name = "images/". "IMG".date("h.i.s").".jpg";

    $add_shops_query = mysqli_query( $con ," INSERT INTO `shops` (`id`, `shop_name`, `shop_image`, `phone`, `location`, `address`, `password`) VALUES (NULL, '$shop_name', '$image_name', '$phone',  '$location', '$address', '$password'); ");
 
    move_uploaded_file($file_tmp, $image_name );



        if($add_shops_query){
            $id = mysqli_insert_id($con);
       

 $add_gas_query = mysqli_query( $con ," INSERT INTO `gas_tube` (`id`, `agb`, `total`, `aman`, `alnil`, `gadra`, `alwdania`, `soda`, `iran`, `shop_id`) VALUES (NULL, '$agb', '$total', '$aman', '$alnail', '$gadra', '$alwdania', '$soda', '$iran','$id'); ");



        echo "<div class='alert alert-success'>تم اضافه المحل بنجاح</div>";
        }else{
        echo "<div class='alert alert-danger'>خطأ في عملية الاضافة</div>";
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


<input name="agb" type="checkbox" value="1" > اجب</input>

    </div>
    <div class="col-6">


            <input name="total" type="checkbox" value="1" > توتال</input>

    </div>
    <div class="col-6">

            <input name="aman" type="checkbox" value="1" > امام</input>

    </div>
    <div class="col-6">
   <input name="alnail" type="checkbox" value="1" > النيل</input>

    </div>
    <div class="col-6">

     
                    <input name="gadra" type="checkbox" value="1" > قادرة</input>

    </div>
    <div class="col-6">
    <input name="alwdania" type="checkbox" value="1" > الوطنية</input>

    </div>
    <div class="col-6">

        <input name="soda" type="checkbox" value="1" > سودة</input>

    </div>
    <div class="col-6">
  <input name="iran" type="checkbox" value="1" > ايران</input>

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
