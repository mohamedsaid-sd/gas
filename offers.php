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

<header class="main-header">
    <div class="logo">
        <img src="images/logo.png" alt="Logo">
    </div>
    <nav class="main-nav">
        <ul>
            <li><a href="index.html#home">الرئيسية</a></li>
            <li><a href="index.html#about">عن المشروع</a></li>
            <li><a href="index.html#services">الخدمات</a></li>
            <li><a href="index.html#contact">تواصل معنا</a></li>
        </ul>
    </nav>
</header>

<div class="offers-container">
    <div class="search-filter">
        <input type="text" placeholder="ابحث عن المحلات...">
        <select>
            <option value="">كل المناطق</option>
            <option value="area1"> الخرطوم </option>
            <option value="area2"> بحري </option>
            <option value="area3"> امدرمان </option>
        </select>
    </div>

    <div class="offers-grid">
        <!-- Offer Card 1 -->
        <div class="offer-card">
            <img src="images/store1.jpg" alt="Store 1">
            <h3>محل الغاز 1</h3>
            <div class="contact-info">
                <p class="phone"><i class="fas fa-phone-alt"></i> 123-456-7890</p>
                <p class="address"><i class="fas fa-map-marker-alt"></i> شارع 123، المدينة</p>
            </div>
            <div class="availability">
                <h4>أنابيب الغاز المتوفرة:</h4>
                <div class="availability-status">
                    <div class="status-item"><span>توتال</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>اجب</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>امان</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>ايران</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>النيل</span> <i class="fas fa-times-circle offline"></i></div>
                    <div class="status-item"><span>قادرة</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>الوطنية</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>سودا</span> <i class="fas fa-check-circle"></i></div>
                </div>
            </div>
        </div>

        <!-- Offer Card 2 -->
        <div class="offer-card">
            <img src="images/store2.jpg" alt="Store 2">
            <h3>محل الغاز 2</h3>
            <div class="contact-info">
                <p class="phone"><i class="fas fa-phone-alt"></i> 234-567-8901</p>
                <p class="address"><i class="fas fa-map-marker-alt"></i> شارع 456، المدينة</p>
            </div>
            <div class="availability">
                <h4>أنابيب الغاز المتوفرة:</h4>
                <div class="availability-status">
                    <div class="status-item"><span>توتال</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>اجب</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>امان</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>ايران</span> <i class="fas fa-check-circle offline"></i></div>
                    <div class="status-item"><span>النيل</span> <i class="fas fa-times-circle offline"></i></div>
                    <div class="status-item"><span>قادرة</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>الوطنية</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>سودا</span> <i class="fas fa-check-circle"></i></div>
                </div>
            </div>
        </div>

        <!-- Offer Card 3 -->
        <div class="offer-card">
            <img src="images/store3.jpg" alt="Store 3">
            <h3>محل الغاز 3</h3>
            <div class="contact-info">
                <p class="phone"><i class="fas fa-phone-alt"></i> 345-678-9012</p>
                <p class="address"><i class="fas fa-map-marker-alt"></i> شارع 789، المدينة</p>
            </div>
            <div class="availability">
                <h4>أنابيب الغاز المتوفرة:</h4>
                <div class="availability-status">
                    <div class="status-item"><span>توتال</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>اجب</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>امان</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>ايران</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>النيل</span> <i class="fas fa-times-circle offline"></i></div>
                    <div class="status-item"><span>قادرة</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>الوطنية</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>سودا</span> <i class="fas fa-check-circle"></i></div>
                </div>
            </div>
        </div>

        <!-- Offer Card 4 -->
        <div class="offer-card">
            <img src="images/store4.jpg" alt="Store 4">
            <h3>محل الغاز 4</h3>
            <div class="contact-info">
                <p class="phone"><i class="fas fa-phone-alt"></i> 456-789-0123</p>
                <p class="address"><i class="fas fa-map-marker-alt"></i> شارع 012، المدينة</p>
            </div>
            <div class="availability">
                <h4>أنابيب الغاز المتوفرة:</h4>
                <div class="availability-status">
                    <div class="status-item"><span>توتال</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>اجب</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>امان</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>ايران</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>النيل</span> <i class="fas fa-times-circle offline"></i></div>
                    <div class="status-item"><span>قادرة</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>الوطنية</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>سودا</span> <i class="fas fa-check-circle"></i></div>
                </div>
            </div>
        </div>

        <!-- Offer Card 5 -->
        <div class="offer-card">
            <img src="images/store5.jpg" alt="Store 5">
            <h3>محل الغاز 5</h3>
            <div class="contact-info">
                <p class="phone"><i class="fas fa-phone-alt"></i> 567-890-1234</p>
                <p class="address"><i class="fas fa-map-marker-alt"></i> شارع 345، المدينة</p>
            </div>
            <div class="availability">
                <h4>أنابيب الغاز المتوفرة:</h4>
                <div class="availability-status">
                    <div class="status-item"><span>توتال</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>اجب</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>امان</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>ايران</span> <i class="fas fa-check-circle offline"></i></div>
                    <div class="status-item"><span>النيل</span> <i class="fas fa-times-circle offline"></i></div>
                    <div class="status-item"><span>قادرة</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>الوطنية</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>سودا</span> <i class="fas fa-check-circle"></i></div>
                </div>
            </div>
        </div>

        <!-- Offer Card 6 -->
        <div class="offer-card">
            <img src="images/store6.jpg" alt="Store 6">
            <h3>محل الغاز 6</h3>
            <div class="contact-info">
                <p class="phone"><i class="fas fa-phone-alt"></i> 678-901-2345</p>
                <p class="address"><i class="fas fa-map-marker-alt"></i> شارع 678، المدينة</p>
            </div>
            <div class="availability">
                <h4>أنابيب الغاز المتوفرة:</h4>
                <div class="availability-status">
                    <div class="status-item"><span>توتال</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>اجب</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>امان</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>ايران</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>النيل</span> <i class="fas fa-times-circle offline"></i></div>
                    <div class="status-item"><span>قادرة</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>الوطنية</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>سودا</span> <i class="fas fa-check-circle"></i></div>
                </div>
            </div>
        </div>

        <!-- Offer Card 7 -->
        <div class="offer-card">
            <img src="images/store7.jpg" alt="Store 7">
            <h3>محل الغاز 7</h3>
            <div class="contact-info">
                <p class="phone"><i class="fas fa-phone-alt"></i> 789-012-3456</p>
                <p class="address"><i class="fas fa-map-marker-alt"></i> شارع 901، المدينة</p>
            </div>
            <div class="availability">
                <h4>أنابيب الغاز المتوفرة:</h4>
                <div class="availability-status">
                    <div class="status-item"><span>توتال</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>اجب</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>امان</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>ايران</span> <i class="fas fa-check-circle offline"></i></div>
                    <div class="status-item"><span>النيل</span> <i class="fas fa-times-circle offline"></i></div>
                    <div class="status-item"><span>قادرة</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>الوطنية</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>سودا</span> <i class="fas fa-check-circle"></i></div>
                </div>
            </div>
        </div>

        <!-- Offer Card 8 -->
        <div class="offer-card">
            <img src="images/store8.jpg" alt="Store 8">
            <h3>محل الغاز 8</h3>
            <div class="contact-info">
                <p class="phone"><i class="fas fa-phone-alt"></i> 890-123-4567</p>
                <p class="address"><i class="fas fa-map-marker-alt"></i> شارع 234، المدينة</p>
            </div>
            <div class="availability">
                <h4>أنابيب الغاز المتوفرة:</h4>
                <div class="availability-status">
                    <div class="status-item"><span>توتال</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>اجب</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>امان</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>ايران</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>النيل</span> <i class="fas fa-times-circle offline"></i></div>
                    <div class="status-item"><span>قادرة</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>الوطنية</span> <i class="fas fa-check-circle"></i></div>
                    <div class="status-item"><span>سودا</span> <i class="fas fa-check-circle"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

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

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
