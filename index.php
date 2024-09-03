<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>غازك علينا</title>
    
    <!-- خط عربي جميل من Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap">

    <!-- تنسيق CSS الخاص بالموقع -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            font-family: 'Amiri', serif; /* استخدام الخط العربي */
        }
        a{
            color: #fff;
            text-decoration: none;
        }

    </style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- Introduction Section -->
<div class="intro-container">
    <div class="image-and-text">
        <img src="images/images.jpg" alt="Project Image" class="project-image">
        <div class="intro-text">
            <h1>غازك علينا</h1>
            <p>سواء كنت عميلًا أو محل غاز، نحن هنا لخدمتك.</p>
        </div>
    </div>
    <div class="button-container">
        <button class="btn btn-success">
            <a href="login.php"><i class="fas fa-user"></i> الدخول كعميل</a>
        </button>
        <button class="btn btn-success">
            <a href="gas-login.php"><i class="fas fa-store"></i> الدخول كمحل غاز</a>
        </button>
    </div>
</div>

<!-- Slider Section -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="images/slider1.jpg" alt="Slider Image 1">
            <div class="caption">الخدمة الأولى</div>
        </div>
        <div class="swiper-slide">
            <img src="images/slider2.jpg" alt="Slider Image 2">
            <div class="caption">الخدمة الثانية</div>
        </div>
        <div class="swiper-slide">
            <img src="images/slider3.jpg" alt="Slider Image 3">
            <div class="caption">الخدمة الثالثة</div>
        </div>
    </div>
    <!-- Swiper Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Swiper Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <h2>عن المشروع</h2>
        <p>مشروعنا يهدف إلى تقديم حلول مبتكرة وشاملة لتسهيل حياتك اليومية سواء كنت عميلًا تبحث عن خدمات ذات جودة عالية، أو صاحب محل غاز يسعى لتوسيع نطاق عمله. نقدم لك كل ما تحتاجه لتلبية احتياجاتك بطرق سهلة وسريعة.</p>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services-section">
    <div class="container">
        <h2>خدماتنا</h2>
        <div class="services-grid">
            <div class="service-item">
                <i class="fas fa-gas-pump"></i>
                <h3>الوصول السريع للغاز</h3>
                <p>نقدم خدمة الوصول السريع إلى الغاز لعملائنا مع التأكد من توفر الغاز في منطقتك بسرعة وسهولة.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-search-location"></i>
                <h3>البحث حسب المنطقة ونوع الأنبوبة</h3>
                <p>ابحث بسهولة عن موزعي الغاز القريبين منك واختر نوع الأنبوبة المناسبة لاحتياجاتك.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-headset"></i>
                <h3>خدمة عملاء متميزة</h3>
                <p>فريق خدمة العملاء لدينا مستعد دائمًا لتقديم الدعم والمساعدة لكافة استفساراتك.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2>تواصل معنا</h2>
        <p>إذا كان لديك أي استفسارات أو ترغب في التواصل معنا، لا تتردد في ملء النموذج أدناه وسنكون سعداء بالرد عليك في أقرب وقت ممكن.</p>
        <div class="contact-form">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">الاسم:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">البريد الإلكتروني:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message">رسالتك:</label>
                    <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-custom">إرسال</button>
            </form>
        </div>
    </div>
</section>

<?php
//include footer
include 'footer.php';
?>

<!-- Bootstrap and Swiper JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Swiper Initialization -->
<script>
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>
</html>
