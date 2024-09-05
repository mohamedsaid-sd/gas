<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عروض أنابيب الغاز - غازك علينا</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Offers Page Styles */
        .offers-container {
            padding: 20px;
            background-color: #f4f4f4;
        }

        .search-filter {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            gap: 10px;
        }

        .search-filter input[type="text"] {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 90%;
        }

        .search-filter button {
            padding: 10px 20px;
            margin-left: 10px;
        }

        .offers-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .offer-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            animation: fadeIn 0.5s ease-in-out;
        }

        .offer-card:hover {
            transform: scale(1.02);
        }

        .offer-card img {
            width: 100%;
            height: 150px;
            border-radius: 8px;
            object-fit: cover;
        }

        .offer-card h3 {
            margin-top: 10px;
            font-size: 18px;
            color: #333;
        }

        .contact-info p {
            margin: 5px 0;
            font-size: 14px;
        }

        .contact-info .phone {
            font-weight: bold;
        }

        .availability {
            margin-top: 10px;
        }

        .availability-status {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .status-item {
            display: flex;
            align-items: center;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #fafafa;
            width: 45%;
        }

        .status-item span {
            flex-grow: 1;
        }

        .status-item i {
            margin-left: 5px;
        }

        .status-item i.online {
            color: #4CAF50; /* لون متاح */
        }

        .status-item i.offline {
            color: #f44336; /* لون غير متاح */
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @media (max-width: 768px) {
            .offers-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .offers-grid {
                grid-template-columns: 1fr;
            }
        }

        a {
            color: #345;
            text-decoration: underline;
        }

        a:hover {
            color: #890;
        }

        .not_found {
            text-align: center;
            color: #a12;
            font-size: 25px;
            width: 100%;
        }
    </style>
</head>
<body>

<?php 
// Include the header
include 'header.php';
?>

<div class="offers-container">
    <div class="search-filter">
        <form method="post" action="offers.php" style="flex-grow: 1;">
            <input name="search_text" type="text" placeholder="ابحث عن المحلات...">
            <button style="float: left;" class="btn btn-primary" type="submit" name="search">بحث</button>
        </form>
        <div>
            <a href="offers.php?f=1"><i class="fas fa-map-marker-alt"></i> الخرطوم</a> | 
            <a href="offers.php?f=2"><i class="fas fa-map-marker-alt"></i> بحري</a> |  
            <a href="offers.php?f=3"><i class="fas fa-map-marker-alt"></i> امدرمان</a>
        </div>
    </div>

    <div class="offers-grid">
        <?php 
$con = mysqli_connect("localhost" , "root" , "" , "gas")or die("Erorr in Connection");

        // Filter based on location or search
        if(isset($_GET['f'])){
            $location = $_GET['f'];
            if($location == "1") {
                $select = mysqli_query($con, "SELECT * FROM `shops` WHERE location = 'الخرطوم'");
            } elseif ($location == "2") {
                $select = mysqli_query($con, "SELECT * FROM `shops` WHERE location = 'بحري'");
            } else {
                $select = mysqli_query($con, "SELECT * FROM `shops` WHERE location = 'امدرمان'");
            }
        } elseif(isset($_POST['search'])){
            $search_text = $_POST['search_text'];
            $select = mysqli_query($con, "SELECT * FROM `shops` WHERE shop_name LIKE '%$search_text%'");
        } else {
            $select = mysqli_query($con, "SELECT * FROM `shops`");
        }

        $i = 1;
        while ($row = mysqli_fetch_array($select)) {
        ?>
        <div class="offer-card">
            <img src="<?php echo $row['shop_image']; ?>" alt="<?php echo $row['shop_name']; ?>">
            <h3><?php echo $row['shop_name']; ?></h3>
            <div class="contact-info">
                <p class="phone"><i class="fas fa-phone-alt"></i> <?php echo $row['phone']; ?></p>
                <p class="address"><i class="fas fa-map-marker-alt"></i> <?php echo $row['address']; ?></p>
            </div>

            <div class="availability">
                <h4>أنابيب الغاز المتوفرة:</h4>
                <div class="availability-status">
                    <?php 
                    $shop_id = $row['id'];
                    $select_gas_tube_query = mysqli_query($con, "SELECT * FROM `gas_tube` WHERE `shop_id` = '$shop_id'");
                    while ($rowgas = mysqli_fetch_array($select_gas_tube_query)) {
                        $gas_types = ['agb' => 'اجب', 'total' => 'توتال', 'aman' => 'امان', 'alnil' => 'النيل', 'gadra' => 'قادرة', 'alwdania' => 'الوطنية', 'soda' => 'سودا', 'iran' => 'ايران'];
                        foreach ($gas_types as $key => $label) {
                            $status_class = $rowgas[$key] == "1" ? "fa-check-circle online" : "fa-times-circle offline";
                            echo "<div class='status-item'><span>$label</span><i class='fas $status_class'></i></div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php 
        $i++;
        } 

        if($i == 1){
            echo "<div class='not_found'> لا توجد محلات مطابقة </div>";
        }
        ?>
    </div>
</div>

<?php
// Include the footer
include 'footer.php';
?>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
