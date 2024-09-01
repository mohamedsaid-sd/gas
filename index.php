<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>غازك علينا</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style type="text/css">
    a{
        text-decoration: none;
        color: #eee;
    }
</style>
<body>

<?php
// Include Header
include 'header.php';
?>

<div class="intro-container">
    <div class="image-and-text">
        <img src="images/images.jpg" alt="Project Image" class="project-image">
        <div class="intro-text">
            <h1>غازك علينا</h1>
            <p>سواء كنت عميلًا أو محل غاز، نحن هنا لخدمتك.</p>
        </div>
    </div>
    <div class="button-container">
        <button class="btn client-btn">
            <a href="login.php"><i class="fas fa-user"></i> الدخول كعميل</a>
        </button>
        <button class="btn shop-btn">
            <a href="gas-login.php"><i class="fas fa-store"></i> الدخول كمحل غاز</a>
        </button>
    </div>
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
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">البريد الإلكتروني:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">رسالتك:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn submit-btn">إرسال</button>
            </form>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-content">
            <div class="footer-links">
                <a href="#about">عن المشروع</a>
                <a href="#services">الخدمات</a>
                <a href="#contact">تواصل معنا</a>
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
