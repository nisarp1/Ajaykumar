<?php
$page_title = "404 - Page Not Found - Ajaykumar Sarnaik";
$page_description = "The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.";
$extra_css = '
    <style>
        .error-404-hero {
            background-image: url(\'images/404-bg.jpg\');
            background-size: cover;
            background-position: center;
        }
    </style>
';

include 'parts/html-header.php';
include 'parts/header.php';
?>

<!-- Hero Section -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden" style="background-image: url('images/new/about-title-bg.jpg');">
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1 text-start" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Error 404</span>
                <h1 class="alt-font fw-700 text-white ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">Lost in Navigation?</h1>
                <p class="fs-20 text-white opacity-8 mb-25px w-80 lg-w-100 fw-300">The page you're looking for was moved, removed, or never existed.</p>
                <a href="index.php" class="btn btn-white btn-medium btn-round-edge">Back to Home</a>
            </div>
        </div>
    </div>
</section>

<?php
include 'parts/footer.php';
include 'parts/html-footer.php';
?>