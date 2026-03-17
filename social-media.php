<?php
$page_title = "Social Media Links - Ajaykumar Sarnaik";
$page_description = "Connect with Ajaykumar Sarnaik across all social media platforms. Official links to Facebook, Instagram, Twitter, and LinkedIn.";
$extra_css = '
    <style>
        :root {
            --royal-blue: #000080;
            --muted-saffron: #FF9933;
            --emerald-green: #138808;
        }

        .social-card {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: all 0.4s ease;
            height: 100%;
            border-bottom: 4px solid transparent;
            text-decoration: none !important;
            display: block;
        }

        .social-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 80, 0.1);
        }

        .fb:hover {
            border-bottom-color: #1877F2;
        }

        .ig:hover {
            border-bottom-color: #E4405F;
        }

        .tw:hover {
            border-bottom-color: #000000;
        }

        .li:hover {
            border-bottom-color: #0A66C2;
        }

        .social-icon {
            font-size: 50px;
            margin-bottom: 20px;
            display: block;
        }

        .social-card.fb i {
            color: #1877F2;
        }

        .social-card.ig i {
            color: #E4405F;
        }

        .social-card.tw i {
            color: #000000;
        }

        .social-card.li i {
            color: #0A66C2;
        }
    </style>
';

include 'parts/html-header.php';
include 'parts/header.php';
?>

<!-- Page Title -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden" style="background-image: url('images/new/hero.jpg');">
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1 text-start" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Digital Community</span>
                <h1 class="alt-font fw-700 text-white ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">Follow the Movement</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Stay connected with official updates, live streams, and community discussions across all platforms.</p>
            </div>
        </div>
    </div>
</section>

<!-- Social Cards -->
<section class="pt-0 pb-100px">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col">
                <a href="#" class="social-card fb">
                    <i class="bi bi-facebook social-icon"></i>
                    <h5 class="fw-700 text-dark-gray mb-1">Facebook</h5>
                    <p class="fs-13 opacity-5 mb-0">@AjaykumarSarnaikOfficial</p>
                </a>
            </div>
            <div class="col">
                <a href="#" class="social-card ig">
                    <i class="bi bi-instagram social-icon"></i>
                    <h5 class="fw-700 text-dark-gray mb-1">Instagram</h5>
                    <p class="fs-13 opacity-5 mb-0">@ajaykumar_sarnaik</p>
                </a>
            </div>
            <div class="col">
                <a href="#" class="social-card tw">
                    <i class="bi bi-twitter-x social-icon"></i>
                    <h5 class="fw-700 text-dark-gray mb-1">Twitter / X</h5>
                    <p class="fs-13 opacity-5 mb-0">@AKSarnaikINC</p>
                </a>
            </div>
            <div class="col">
                <a href="#" class="social-card li">
                    <i class="bi bi-linkedin social-icon"></i>
                    <h5 class="fw-700 text-dark-gray mb-1">LinkedIn</h5>
                    <p class="fs-13 opacity-5 mb-0">ajaykumar-sarnaik</p>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
include 'parts/footer.php';
include 'parts/html-footer.php';
?>