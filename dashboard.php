<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>لوحة التحكم - غازك علينا</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .dashboard-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .header {
            width: 100%;
            background-color: #eee;
            color: white;
            padding: 15px;
            text-align: center;
            color: #333;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
            width: 100%;
        }

        .stat-box {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            width: 45%;
        }

        .tables-container {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }

        .table-box {
            width: 45%;
        }

        .table {
            width: 100%;
            background-color: #fff;
            border-collapse: collapse;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .add-gas-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .profile {
            text-align: center;
            margin: 20px 0;
        }

        .profile img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 50%;
        }

        .close-modal {
            float: right;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
// Include Header
include 'header.php';

include 'config.php';


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


        echo "<div id='alert_good'>تم اضافه المحل بنجاح</div>";
        }else{
        echo "خطأ في عملية الاضافة";
        }
    
}
}
?>

<div class="dashboard-container">
    <div class="header">
         <a href="admin.php?exit=0">
            <button style="float: right;" class="btn btn-danger" onclick="logout()">تسجيل الخروج</button>
        </a>
        <h2> مرحبا ادارة غازك علينا </h2>
    </div>

    <div class="stats-container">
        <div class="stat-box">
            <h3>عدد العملاء</h3>
            <p>
            <?php
// call the connection file 
include 'config.php';

// جلب عدد العملاء
$sql = "SELECT COUNT(*) as customer_count FROM customers";
$result = $con->query($sql);

// استخراج عدد العملاء
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $customer_count = $row['customer_count'];
    echo $customer_count;
} else {
    echo " لا يوجد عملاء بعد ";
}

// إغلاق الاتصال
$con->close();
?></p>
        </div>
        <div class="stat-box">
            <h3>عدد محلات الغاز</h3>
            <p>
<?php
// call the connection file 
include 'config.php';
// جلب عدد العملاء
$sql2 = "SELECT  COUNT(*) as 'shops_count' FROM shops ";
$result2 = $con->query($sql2);

// استخراج عدد العملاء
if ($result2->num_rows > 0) {
    $row2 = $result2->fetch_assoc();
    $shops_count = $row2['shops_count'];
    echo $shops_count;
} else {
    echo " لا يوجد محلات بعد ";
}

// إغلاق الاتصال
$con->close();
?>
            </p>
        </div>
    </div>

    <div class="tables-container">
        <div class="table-box">
            <h3>آخر 5 عملاء</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>البريد الإلكتروني</th>
                        <th>الهاتف</th>
                    </tr>
                </thead>
                <tbody>
<?php
// include the connection fiel
include 'config.php';

$select_customers = "SELECT * FROM `customers` LIMIT 5";
$customers_result = mysqli_query($con , $select_customers);
while ($customer_row = mysqli_fetch_array($customers_result)) {
// last 5 customers from database    
?>

   <tr>
    <td><?php echo $customer_row['name']; ?></td>
    <td><?php echo $customer_row['email']; ?></td>
    <td><?php echo $customer_row['phone']; ?></td>
   </tr>

<?php
}
?>

                </tbody>
            </table>
        </div>
        <div class="table-box">
            <h3>آخر 5 محلات غاز</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>اسم المحل</th>
                        <th>العنوان</th>
                        <th>الهاتف</th>
                    </tr>
                </thead>
                <tbody>
<?php
// include the connection fiel
include 'config.php';

$select_shops = "SELECT * FROM `shops` LIMIT 5";
$shops_result = mysqli_query($con , $select_shops);
while ($shop_row = mysqli_fetch_array($shops_result)) {
// last 5 customers from database    
?>

   <tr>
    <td><?php echo $shop_row['shop_name']; ?></td>
    <td><?php echo $shop_row['location']; ?></td>
    <td><?php echo $shop_row['phone']; ?></td>
   </tr>

<?php
}
?>

                </tbody>
            </table>
        </div>
    </div>

    <button class="add-gas-button" onclick="openModal()">إضافة محل جديد</button>

    <!-- Modal for Adding New Gas Station -->
    <div class="modal" id="addGasModal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal()">&times;</span>
            <h3>إضافة محل غاز جديد</h3>
            <form action="dashboard.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="shop_name">اسم المحل:</label>
                    <input type="text" id="shop_name" name="shop_name" required>
                </div>


                <div class="form-group">
                           <label for="shop_image">صورة المحل:</label>
                        <input type="file" id="file" name="file" accept="image/*" required>
                </div>

               <div class="form-group">
                    <label for="shopPhone">الهاتف:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>


                  <div class="form-group">
                          
                  <label for="location">المنطقه :</label>
               <select id="location" name="location" required>
                  <option value="الخرطوم">الخرطوم</option>
                 <option value="بحري">بحري</option>
                 <option value="امدرمان">امدرمان</option>
                </select>

                </div>


                <div class="form-group">
                    <label for="shopAddress">العنوان:</label>
                    <input type="text" id="address" name="address" required>
                </div>


                <div class="form-group">
                       <label for="password">كلمة المرور:</label>
            <input type="password" id="password" name="password" required>
                </div>

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
              
                <button type="submit" class="btn btn-primary" name="add_shope">إضافة</button>
            </form>
        </div>
    </div>


</div>

<!-- Footer Section -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <!-- <img src="images/logo.png" alt="Logo"> -->
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

<script>
    function openModal() {
        document.getElementById('addGasModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('addGasModal').style.display = 'none';
    }

    function logout() {
        // Logout logic here
    }
</script>

</body>
</html>
