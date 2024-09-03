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
    </style>
</head>
<body>

<?php
// Include Header
include 'header.php';
?>

<div class="container">
    <div class="profile-container">
        <img src="images/download.jpg" alt="صورة المحل">
        <h2>اسم المحل</h2>
        <p>رقم الهاتف: 123-456-789</p>
        <p>العنوان: شارع المثال، المدينة، البلد</p>
        <center>
            <button onclick="editProfile()"><i class="fas fa-edit"></i> تعديل البيانات</button>
        </center>
    </div>

    <div class="form-section">
        <h3>تحديث حالة الأنابيب</h3>
        <form>
            <div class="pipe-row">
                <div class="form-group">
                    <label for="pipe1"> اجب :</label>
                    <select id="pipe1">
                        <option value="available">متوفر</option>
                        <option value="unavailable">غير متوفر</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pipe2"> توتال :</label>
                    <select id="pipe2">
                        <option value="available">متوفر</option>
                        <option value="unavailable">غير متوفر</option>
                    </select>
                </div>
            </div>
            <div class="pipe-row">
                <div class="form-group">
                    <label for="pipe3"> امان :</label>
                    <select id="pipe3">
                        <option value="available">متوفر</option>
                        <option value="unavailable">غير متوفر</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pipe4"> النيل :</label>
                    <select id="pipe4">
                        <option value="available">متوفر</option>
                        <option value="unavailable">غير متوفر</option>
                    </select>
                </div>
            </div>
            <div class="pipe-row">
                <div class="form-group">
                    <label for="pipe5"> قادرة :</label>
                    <select id="pipe5">
                        <option value="available">متوفر</option>
                        <option value="unavailable">غير متوفر</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pipe6"> الوطنية :</label>
                    <select id="pipe6">
                        <option value="available">متوفر</option>
                        <option value="unavailable">غير متوفر</option>
                    </select>
                </div>
            </div>
            <div class="pipe-row">
                <div class="form-group">
                    <label for="pipe7"> سودا :</label>
                    <select id="pipe7">
                        <option value="available">متوفر</option>
                        <option value="unavailable">غير متوفر</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pipe8"> ايران:</label>
                    <select id="pipe8">
                        <option value="available">متوفر</option>
                        <option value="unavailable">غير متوفر</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-success" type="submit"><i class="fas fa-save"> </i> حفظ التغييرات </button>
        </form>
    </div>

    <div class="form-section">
        <h3>تغيير كلمة السر</h3>
        <form>
            <div class="form-group">
                <label for="currentPassword">كلمة السر الحالية:</label>
                <input type="password" id="currentPassword" required>
            </div>
            <div class="form-group">
                <label for="newPassword">كلمة السر الجديدة:</label>
                <input type="password" id="newPassword" required>
            </div>
            <div class="form-group">
                <label for="confirmNewPassword">تأكيد كلمة السر الجديدة:</label>
                <input type="password" id="confirmNewPassword" required>
            </div>
            <button class="btn btn-success" type="submit"> <i class="fas fa-lock"> </i> تغيير كلمة السر </button>
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

<script src="js/bootstrap.bundle.min.js"></script>
<script>
    function editProfile() {
        // Functionality to edit profile
    }
</script>
</body>
</html>
