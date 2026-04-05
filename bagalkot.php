<?php
$page_title = "Bagalkot Constituency - Ajaykumar Sarnaik";
$page_description = "Learn about the Bagalkot constituency. Its development, culture, and the vision for progress spearheaded by Ajaykumar Sarnaik.";
$extra_css = '
    <style>
        :root {
            --royal-blue: #000080;
            --muted-saffron: #FF9933;
            --emerald-green: #138808;
            --alabaster: #FAFAFA;
        }

        .region-card {
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            height: 350px;
        }

        .region-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .region-card:hover img {
            transform: scale(1.1);
        }

        .region-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 30px;
            background: linear-gradient(transparent, rgba(0, 0, 128, 0.9));
            color: #fff;
        }

        .constituency-stat {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            text-align: center;
            border-top: 4px solid var(--royal-blue);
        }
    </style>
';

include 'parts/html-header.php';
include 'parts/header.php';
?>

<!-- Hero -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden" style="background-image: url('images/new/inner-pages-banner/bagalkot.jpg');">
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Our Homeland</span>
                <h1 class="alt-font text-white fw-700 ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">Bagalkot: The Heart of Heritage.</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Cultivating progress while preserving the rich historical soul of our land.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="pt-50px pb-50px bg-white">
    <div class="container">
        <div class="row g-4"
            data-anime='{ "el": "childs", "translateY": [20, 0], "opacity": [0,1], "duration": 600, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-lg-3 col-md-6">
                <div class="constituency-stat">
                    <h2 class="fw-800 text-royal-blue mb-1">~10L+</h2>
                    <span class="text-uppercase fw-600 fs-13 opacity-6">Voters Represented</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="constituency-stat" style="border-color: var(--muted-saffron);">
                    <h2 class="fw-800 text-royal-blue mb-1">150+</h2>
                    <span class="text-uppercase fw-600 fs-13 opacity-6">Villages Connected</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="constituency-stat" style="border-color: var(--emerald-green);">
                    <h2 class="fw-800 text-royal-blue mb-1">30%</h2>
                    <span class="text-uppercase fw-600 fs-13 opacity-6">Agri Sector Growth</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="constituency-stat" style="border-color: #000;">
                    <h2 class="fw-800 text-royal-blue mb-1">0</h2>
                    <span class="text-uppercase fw-600 fs-13 opacity-6">Criminal Tolerance</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Development Focus -->
<section class="pt-100px pb-100px bg-alabaster">
    <div class="container">
        <div class="row justify-content-center mb-60px">
            <div class="col-lg-8 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">The Vision</span>
                <h2 class="alt-font fw-700 text-royal-blue mb-0 ls-minus-1px" style="font-size: 3.5rem; line-height: 1.1;">Development Roadmap</h2>
                <p class="fs-18 opacity-7 mt-3">Our vision for Bagalkot is built on the pillars of infrastructure,
                    cooperative economy, and heritage preservation.</p>
            </div>
        </div>
        <div class="row g-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <div class="col-lg-4">
                <div class="region-card shadow-lg">
                    <img src="images/new/sugar.jpg" alt="Agriculture">
                    <div class="region-overlay text-white">
                        <h5 class="fw-700 mb-2 text-white">The Sugar Hub</h5>
                        <p class="fs-15 mb-0 opacity-8 text-white">Revitalizing the sugar cooperative sector to
                            ensure fair prices for our sugarcane farmers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="region-card shadow-lg">
                    <img src="images/new/infra.jpg" alt="Infrastructure">
                    <div class="region-overlay text-white">
                        <h5 class="fw-700 mb-2 text-white">Rural Infrastructure</h5>
                        <p class="fs-15 mb-0 opacity-8 text-white">Aggressive expansion of all-weather roads and
                            digital connectivity in remote villages.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="region-card shadow-lg">
                    <img src="images/new/tourism.jpg" alt="Heritage">
                    <div class="region-overlay text-white">
                        <h5 class="fw-700 mb-2 text-white">Tourism & Heritage</h5>
                        <p class="fs-15 mb-0 opacity-8 text-white">Developing the Badami-Aihole-Pattadakal circuit
                            for global tourism and local employment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'parts/footer.php';
include 'parts/html-footer.php';
?>