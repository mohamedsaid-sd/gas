<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>عروض أنابيب الغاز - غازك علينا</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
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
        }

        .search-filter input[type="text"] {
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .search-filter select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
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
        }

        .offer-card h3 {
            margin-top: 10px;
            font-size: 18px;
            color: #333;
        }

        .offer-card .contact-info {
            margin: 10px 0;
            font-size: 14px;
        }

        .offer-card .contact-info .phone {
            font-weight: bold;
        }

        .offer-card .availability {
            margin-top: 10px;
        }

        .offer-card .availability h4 {
            margin-bottom: 5px;
        }

        .availability-status {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .availability-status .status-item {
            width: calc(50% - 10px);
            display: flex;
            align-items: center;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #fafafa;
        }

        .availability-status .status-item span {
            flex: 1;
        }

        .availability-status .status-item i {
            margin-left: 5px;
            color: #4CAF50; /* لون الشعار */
        }

        .availability-status .status-item.offline i {
            color: #f44336; /* لون أحمر */
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

        .status-item i {
    color: green; /* لون الأيقونات المتوفرة */
}

.status-item i.offline {
    color: red; /* لون الأيقونات غير المتوفرة */
}

    </style>
</head>
<body>
 
 
 <?php 
 // call the header 
 include 'header.php';
 ?>


<div class="offers-container">
    <div class="search-filter">

        <input type="text" placeholder="ابحث عن المحلات...">
       <button type="submit" name="search" >بحث</button>

        <select>
            <option value="">كل المناطق</option>
            <option value="area1"> الخرطوم </option>
            <option value="area2"> بحري </option>
            <option value="area3"> امدرمان </option>
        </select>
    </div>


   <div class="offers-grid">
    <?php 

    include 'config.php';


        
        


        
     
        
        // get all  data
        $select = mysqli_query( $con , "SELECT * FROM `shops`");

        
        // loop data to get valuse
        while ($row = mysqli_fetch_array($select)) {


        ?>

 

        <!-- Offer Card 1 -->
        <div class="offer-card">
            <img src="<?php echo $row['shop_image']; ?>" alt="Store 1">
            <h3><?php echo $row['shop_name']; ?></h3>
            <div class="contact-info">
                <p class="phone"><i class="fas fa-phone-alt"></i><?php echo $row['phone']; ?></p>
                <p class="address"><i class="fas fa-map-marker-alt"></i><?php echo $row['address']; ?></p>
            </div>



            <div class="availability">
                <h4>أنابيب الغاز المتوفرة:</h4>
                <div class="availability-status">

                     <?php 

                   
                        if($row['agb']=="1"){
                            echo "  <div class='status-item'><span>اجب</span> <i class='fas fa-check-circle'></i></div>";
                        }else{
                            echo "<div class='status-item'><span>اجب</span> <i class='fas fa-times-circle offline'></i></div>";
                        }



                        if($row['total']=="1"){
                            echo "  <div class='status-item'><span></span>توتال <i class='fas fa-check-circle'></i></div>";
                        }else{
                            echo "<div class='status-item'><span>توتال</span> <i class='fas fa-times-circle offline'></i></div>";
                        }



                         if($row['aman']=="1"){
                            echo "  <div class='status-item'><span>امان</span> <i class='fas fa-check-circle'></i></div>";
                        }else{
                            echo "<div class='status-item'><span>امان</span> <i class='fas fa-times-circle offline'></i></div>";
                        }


                         if($row['alnail']=="1"){
                            echo "  <div class='status-item'><span>النيل</span> <i class='fas fa-check-circle'></i></div>";
                        }else{
                            echo "<div class='status-item'><span>النيل</span> <i class='fas fa-times-circle offline'></i></div>";
                        }


                             if($row['gadra']=="1"){
                            echo "  <div class='status-item'><span>قادرة</span> <i class='fas fa-check-circle'></i></div>";
                        }else{
                            echo "<div class='status-item'><span>قادرة</span> <i class='fas fa-times-circle offline'></i></div>";
                        }


                             if($row['alwdania']=="1"){
                            echo "  <div class='status-item'><span>الوطنية</span> <i class='fas fa-check-circle'></i></div>";
                        }else{
                            echo "<div class='status-item'><span>الوطنية</span> <i class='fas fa-times-circle offline'></i></div>";
                        }


                            if($row['soda']=="1"){
                            echo "  <div class='status-item'><span>سودا</span> <i class='fas fa-check-circle'></i></div>";
                        }else{
                            echo "<div class='status-item'><span>سودا</span> <i class='fas fa-times-circle offline'></i></div>";
                        }



                            if($row['iran']=="1"){
                            echo "  <div class='status-item'><span>النيل</span> <i class='fas fa-check-circle'></i></div>";
                        }else{
                            echo "<div class='status-item'><span>النيل</span> <i class='fas fa-times-circle offline'></i></div>";
                        }








                    // <div class="status-item"><span></span> <i class="fas fa-check-circle"></i></div>
                    // <div class="status-item"><span>توتال</span><i class="fas fa-times-circle offline"></i></div>


                  
                  

                    // <div class="status-item"><span></span> <i class="fas fa-check-circle"></i></div>
                    // <div class="status-item"><span>امان</span> <i class="fas fa-times-circle offline"></i></div>


                    // <div class="status-item"><span>ايران</span> <i class="fas fa-check-circle"></i></div>
                    // <div class="status-item"><span>ايران</span> <i class="fas fa-times-circle offline"></i></div>

                    // <div class="status-item"><span></span> <i class="fas fa-times-circle offline"></i></div>
                    // <div class="status-item"><span></span><i class="fas fa-times-circle offline"></i></div>

                    // <div class="status-item"><span></span> <i class="fas fa-check-circle"></i></div>
                    //  <div class="status-item"><span>قادرة</span> <i class="fas fa-times-circle offline"></i></div>


                    // <div class="status-item"><span></span> <i class="fas fa-check-circle"></i></div>
                    //  <div class="status-item"><span>الوطنية</span><i class="fas fa-times-circle offline"></i></div>


                    // <div class="status-item"><span></span> <i class="fas fa-check-circle"></i></div>
                    // <div class="status-item"><span>سودا</span> <i class="fas fa-times-circle offline"></i></div>

                    ?>

                </div>
            </div>
        </div>

    




  

        <?php 
        } // end get data while loop
        ?>
  </div>


</section>

</div>

<?php
//include footer
include 'footer.php';
?>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
