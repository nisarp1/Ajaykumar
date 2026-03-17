<?php
$page_title = "News & Events - Ajaykumar Sarnaik";
$page_description = "Stay updated with the latest news, press releases, and event highlights from Ajaykumar Sarnaik\'s official office.";
$extra_css = '
    <style>
        :root {
            --royal-blue: #000080;
            --muted-saffron: #FF9933;
            --emerald-green: #138808;
            --alabaster: #FAFAFA;
        }

        .news-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            height: 100%;
        }

        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 80, 0.1);
        }

        .news-img {
            height: 250px;
            object-fit: cover;
            width: 100%;
            border-bottom: 4px solid var(--royal-blue);
        }

        .press-badge {
            background: rgba(0, 0, 128, 0.1);
            color: var(--royal-blue);
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 12px;
            display: inline-block;
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
            <div class="col-xl-7 col-lg-8 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Media Highlights</span>
                <h1 class="alt-font fw-700 text-white ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">News & Press Archive</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Official updates and media highlights covering the progress of our constituency.</p>
            </div>
        </div>
    </div>
</section>

<!-- News Feed -->
<section class="pt-20px pb-100px bg-alabaster">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <!-- News 1 -->
            <div class="col">
                <div class="news-card">
                    <img src="images/new/hero-below.jpg" class="news-img" alt="DCC Bank Growth">
                    <div class="p-4">
                        <div class="press-badge">Institutional Growth</div>
                        <h5 class="fw-700 text-royal-blue mb-3">Bagalkot DCC Bank achieves record profits under
                            Ajaykumar Sarnaik\'s leadership.</h5>
                        <p class="fs-14 opacity-6">A detailed look at the financial reforms that transformed the
                            district\'s cooperative banking sector...</p>
                        <hr class="opacity-1 mt-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fs-12 fw-600 opacity-5"><i class="bi bi-calendar-event me-2"></i>Mar 01,
                                2026</span>
                            <a href="#" class="fs-13 fw-700 text-royal-blue">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- News 2 -->
            <div class="col">
                <div class="news-card">
                    <img src="images/new/sugar.jpg" class="news-img" alt="Farmer Support">
                    <div class="p-4">
                        <div class="press-badge">Farmer Prosperity</div>
                        <h5 class="fw-700 text-royal-blue mb-3">Sarnaik calls for immediate release of drought
                            relief funds for sugarcane farmers.</h5>
                        <p class="fs-14 opacity-6">The former minister addressed a massive gathering of farmers in
                            Badami yesterday, demanding better FRP prices...</p>
                        <hr class="opacity-1 mt-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fs-12 fw-600 opacity-5"><i class="bi bi-calendar-event me-2"></i>Feb 24,
                                2026</span>
                            <a href="#" class="fs-13 fw-700 text-royal-blue">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- News 3 -->
            <div class="col">
                <div class="news-card">
                    <div
                        class="bg-royal-blue news-img d-flex align-items-center justify-content-center text-white text-center p-4">
                        <div>
                            <i class="bi bi-megaphone fs-50 mb-3 d-block opacity-5"></i>
                            <h4 class="alt-font fw-700 mb-0">Official Statement</h4>
                            <span class="fs-13 text-uppercase fw-600 opacity-7">RE: Infrastructure Project</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="press-badge">Press Release</div>
                        <h5 class="fw-700 text-royal-blue mb-3">Detailed roadmap for the 2026-2030 Infrastructure
                            Plan released.</h5>
                        <p class="fs-14 opacity-6">Focusing on bridge-cum-barrages and 4-lane connectivity for
                            internal constituency roads...</p>
                        <hr class="opacity-1 mt-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fs-12 fw-600 opacity-5"><i class="bi bi-calendar-event me-2"></i>Feb 18,
                                2026</span>
                            <a href="#" class="fs-13 fw-700 text-royal-blue">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination Mockup -->
        <div class="row pt-80px">
            <div class="col-12 text-center">
                <nav class="d-inline-block">
                    <ul class="pagination pagination-style-01 mb-0 border-radius-4px overflow-hidden">
                        <li class="page-item"><a class="page-link" href="#"><i class="bi bi-arrow-left-short"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="bi bi-arrow-right-short"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php
include 'parts/footer.php';
include 'parts/html-footer.php';
?>