
<?php 
session_start();
include 'header.php';
include 'config.php';

?>


<?php

if(isset($_POST['edit'])){




     $id =  $_SESSION['id'];



    $password   = $_POST['currentPassword'];
    $newpassword   = $_POST['newPassword'];

$duplicate=mysqli_query($con,"select * from shops where password='$password'");

if (mysqli_num_rows($duplicate)>0)
{

            $edit_medical_query=mysqli_query($con,"UPDATE `shops` SET `password` = '$newpassword' WHERE `id` = $id;");
                    echo "<div id='alert_good'> تم تغيير كلمه السر بنجاح</div>";


}else{

        echo "<div id='alert_good'>كلمه السر غير صحيحة</div>";
}

}



if(isset($_POST['editdata'])){




     $id =  $_SESSION['id'];


  $shop_name    = $_POST['shop_name'];
    $phone  = $_POST['phone'];
    $address   = $_POST['address'];



            $edit_medical_query=mysqli_query($con,"UPDATE `shops` SET `shop_name` = '$shop_name',`phone` = '$phone',`address` = '$address' WHERE `id` = $id;");
                    echo "<div id='alert_good'> تم بنجاح</div>";




}


if(isset($_POST['editgas'])){
         $id =  $_SESSION['id'];

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

   $edit_medical_query=mysqli_query($con,"UPDATE `shops` SET `agb` = '$agb',`total` = '$total',`aman` = '$aman',`alnail` = '$alnail',`gadra` = '$gadra' ,`alwdania` = '$alwdania',`soda` = '$soda',`iran` = '$iran' WHERE `id` = $id;");
                    echo "<div id='alert_good'> تم بنجاح</div>";



}


?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بروفايل محل الغاز</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: right;
            direction: rtl;
        }
        .container {
            margin-top: 50px;
        }
        .profile-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
        }
        .profile-container img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #ddd;
            margin-bottom: 20px;
        }
        .profile-container h2 {
            margin-bottom: 15px;
            color: #333;
        }
        .profile-container p {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }
        .profile-container button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .profile-container button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .profile-container button i {
            margin-right: 8px;
        }
        .form-section {
            margin-top: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .form-section h3 {
            margin-bottom: 15px;
            color: #333;
        }
        .form-section .form-group {
            margin-bottom: 20px;
        }
        .form-section .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .form-section .form-group select, 
        .form-section .form-group input {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }
        .form-section .form-group button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-section .form-group button:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
        .form-section .form-group button i {
            margin-right: 8px;
        }
        .pipe-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .pipe-row .form-group {
            flex: 1;
            margin-right: 10px;
        }
        .pipe-row .form-group:last-child {
            margin-right: 0;
        }
        .footer-section {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .footer-section a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        .footer-section .footer-bottom p {
            margin: 10px 0 0;
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




    $id =  $_SESSION['id'];

    $select_query = mysqli_query( $con , "SELECT * FROM `shops` WHERE `id` = '$id'");
    while ($row = mysqli_fetch_array($select_query)) {
        


?>
<div class="container">
    <div class="profile-container">
        <img src="<?php echo $row['shop_image']; ?>" alt="صورة المحل">
        <h2><?php echo $row['shop_name']; ?></h2>
        <p><?php echo $row['phone']; ?></p>
        <p><?php echo $row['address']; ?></p>
         <p><?php echo $row['password']; ?></p>
        <center>
            <button onclick="openModal()"><i class="fas fa-edit"></i> تعديل البيانات</button>
        </center>
    </div>

    <div class="form-section">
        <h3>تحديث حالة الأنابيب</h3>
        <form   action="gas-detailes.php"  method="POST" >
<?php
            if ($row['agb'] == "1") {
             echo"<input name='agb'type='checkbox' value='1' checked > اجب</input>";
            } else {
             echo"<input name='agb'type='checkbox' value='0'  > اجب</input>";
            }




             if ($row['total'] == "1") {
             echo"<input name='total'type='checkbox' value='1' checked > توتال</input>";
            } else {
             echo"<input name='total'type='checkbox' value='0'  > توتال</input>";
            }




             if ($row['aman'] == "1") {
             echo"<input name='aman'type='checkbox' value='1' checked > امام</input>";
            } else {
             echo"<input name='aman'type='checkbox' value='0'  > امام</input>";
            }



             if ($row['alnail'] == "1") {
             echo"<input name='alnail'type='checkbox' value='1' checked > النيل</input>";
            } else {
             echo"<input name='alnail'type='checkbox' value='0'  > النيل</input>";
            }



             if ($row['gadra'] == "1") {
             echo"<input name='gadra'type='checkbox' value='1' checked > قادرة</input>";
            } else {
             echo"<input name='gadra'type='checkbox' value='0'  > قادرة</input>";
            }



             if ($row['alwdania'] == "1") {
             echo"<input name='alwdania'type='checkbox' value='1' checked > الوطنية</input>";
            } else {
             echo"<input name='alwdania'type='checkbox' value='0'  > الوطنية</input>";
            }




             if ($row['soda'] == "1") {
             echo"<input name='soda'type='checkbox' value='1' checked > سودة</input>";
            } else {
             echo"<input name='soda'type='checkbox' value='0'  > سودة</input>";
            }



             if ($row['iran'] == "1") {
             echo"<input name='iran'type='checkbox' value='1' checked > ايران</input>";
            } else {
             echo"<input name='iran'type='checkbox' value='0'  > ايران</input>";
            }





            ?>

          

            </div>
            <button class="btn btn-success" type="submit" name="editgas"><i class="fas fa-save"> </i> حفظ التغييرات </button>
        </form>
    </div>

 <?php 
        } // end get data while loop
        ?>
    <div class="form-section">
        <h3>تغيير كلمة السر</h3>
        <form  action="gas-detailes.php"  method="POST">
            <div class="form-group">
                <label for="currentPassword">كلمة السر الحالية:</label>
                <input type="password" name="currentPassword" id="currentPassword" required>
            </div>
            <div class="form-group">
                <label for="newPassword">كلمة السر الجديدة:</label>
                <input type="password" id="newPassword" name="newPassword" required>
            </div>
            <div class="form-group">
                <label for="confirmNewPassword">تأكيد كلمة السر الجديدة:</label>
                <input type="password" id="confirmNewPassword" required>
            </div>
            <button class="btn btn-success" type="submit" name="edit"> <i class="fas fa-lock"> </i> تغيير كلمة السر </button>
        </form>
    </div>
</div>

<footer class="footer-section">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <!-- <img src="images/logo.png" alt="Logo"> -->
            </div>
            <div class="footer-links">
                <a href="#">الرئيسية</a>
                <a href="#">حول</a>
                <a href="#">اتصل بنا</a>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 جميع الحقوق محفوظة</p>
            </div>
        </div>
    </div>

</footer>



<div id="updateModal" class="modal">
  <div class="modal-content">
            <span class="close-modal" onclick="closeModal()">&times;</span>
    <h2>تنفيذ الطلب</h2>
    <?php
// Include Header




    $id =  $_SESSION['id'];

    $select_query = mysqli_query( $con , "SELECT * FROM `shops` WHERE `id` = '$id'");
    while ($row = mysqli_fetch_array($select_query)) {
        


?>

    <form method="post" action="gas-detailes.php" id="executeForm">
        <div class="form-group">
                    <label for="shop_name">اسم المحل:</label>
                    <input type="text" id="shop_name" name="shop_name" value="<?php echo $row['shop_name']; ?>" required>
                </div>

               <div class="form-group">
                    <label for="shopPhone">الهاتف:</label>
                    <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>" required>
                </div>




                <div class="form-group">
                    <label for="shopAddress">العنوان:</label>
                    <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>" required>
                </div>
        <button  type="submit" class="confirm-btn" name="editdata">تأكيد التنفيذ</button>
    </form>
 <?php 
        } // end get data while loop
        ?>

  </div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>
<script>
    function editProfile() {
        // Functionality to edit profile
    }



     function openModal() {
        document.getElementById('updateModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('updateModal').style.display = 'none';
    }

</script>
</body>
</html>
