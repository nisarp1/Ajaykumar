<?php
$page_title = "Associations & Leadership - Ajaykumar Sarnaik";
$page_description = "Explore the institutions and cooperatives led by Ajaykumar Sarnaik. From DCC Bank to Farmers\' School, driving institutional progress in Karnataka.";
$extra_css = '
    <style>
        :root {
            --royal-blue: #000080;
            --muted-saffron: #FF9933;
            --emerald-green: #138808;
            --alabaster: #FAFAFA;
            --dark-gray: #232323;
        }

        .association-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
            transition: all 0.5s ease;
        }

        .association-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 60px rgba(0, 0, 80, 0.12);
        }

        .stat-circle-minimal {
            background: #fdfdfd;
            padding: 30px;
            border-radius: 15px;
            border: 1px solid rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .stat-circle-minimal:hover {
            background: #fff;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            transform: translateY(-5px);
        }

        .stat-circle-minimal h3 {
            margin-bottom: 5px;
            font-weight: 800;
            line-height: 1;
        }

        .badge-tricolor {
            background: linear-gradient(to right, #FF9933, #FFFFFF, #138808);
            height: 3px;
            width: 100%;
            display: block;
        }
    </style>
';

include 'parts/html-header.php';
include 'parts/header.php';
?>

<!-- Hero Section -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden" style="background-image: url('images/new/inner-pages-banner/associations.jpg');">
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Our Networks</span>
                <h1 class="alt-font fw-700 text-white ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">Strategic Associations</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Leading the cooperative movement to ensure social and financial parity.</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="pt-100px pb-100px bg-alabaster">
    <div class="container">
        <div class="row justify-content-center mb-60px">
            <div class="col-lg-8 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">Institutional Leadership</span>
                <h2 class="alt-font fw-700 text-royal-blue mb-0 ls-minus-1px" style="font-size: 3.5rem; line-height: 1.1;">Pillars of the Region.</h2>
                <p class="fs-18 opacity-7 mt-3">Leading the cooperative movement to ensure social and financial parity.</p>
            </div>
        </div>
        <div class="row g-5">
            <!-- Association 1: DCC Bank -->
            <div class="col-lg-6"
                data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 800, "easing": "easeOutQuad" }'>
                <div class="association-card h-100">
                    <div class="badge-tricolor"></div>
                    <div class="p-5">
                        <h4 class="alt-font fw-800 text-royal-blue mb-4">Bagalkot DCC Bank Ltd.</h4>
                        <p class="fs-17 opacity-8 mb-4">Under his presidency, the BDCC Bank has revolutionized rural credit, ensuring that farming families have access to low-interest loans and financial literacy.</p>
                        <div class="row text-center mt-60px g-4">
                            <div class="col-6">
                                <div class="stat-circle-minimal">
                                    <h3 class="text-royal-blue">1.5L+</h3>
                                    <span class="fs-12 fw-700 text-uppercase ls-1px text-dark-gray opacity-6">Farmers Supported</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-circle-minimal">
                                    <h3 class="text-muted-saffron">Modern</h3>
                                    <span class="fs-12 fw-700 text-uppercase ls-1px text-dark-gray opacity-6">Banking Infrastructure</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Association 2: Farmers School -->
            <div class="col-lg-6"
                data-anime='{ "translateX": [30, 0], "opacity": [0,1], "duration": 800, "easing": "easeOutQuad" }'>
                <div class="association-card h-100">
                    <div class="badge-tricolor"></div>
                    <div class="p-5">
                        <h4 class="alt-font fw-800 text-royal-blue mb-4">UKP & Irrigation Rights</h4>
                        <p class="fs-17 opacity-8 mb-4">A vocal advocate for the families affected by the Upper Krishna Project (UKP). Ajay Kumar Sarnaik continues to fight for fair compensation and irrigation justice.</p>
                        <ul class="list-unstyled mt-5">
                            <li class="mb-3 d-flex align-items-center fs-16 fw-600 text-dark-gray">
                                <div class="me-3 bg-india-green border-radius-100 w-35px h-35px d-flex align-items-center justify-content-center flex-shrink-0"><i class="bi bi-check text-white fs-22"></i></div>
                                Fair Land Compensation (₹35L–₹40L/acre)
                            </li>
                            <li class="mb-3 d-flex align-items-center fs-16 fw-600 text-dark-gray">
                                <div class="me-3 bg-india-green border-radius-100 w-35px h-35px d-flex align-items-center justify-content-center flex-shrink-0"><i class="bi bi-check text-white fs-22"></i></div>
                                Rehabilitation & Resettlement Focus
                            </li>
                            <li class="mb-3 d-flex align-items-center fs-16 fw-600 text-dark-gray">
                                <div class="me-3 bg-india-green border-radius-100 w-35px h-35px d-flex align-items-center justify-content-center flex-shrink-0"><i class="bi bi-check text-white fs-22"></i></div>
                                Irrigation for Arid Districts
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Association 3: Sugar Industry -->
            <div class="col-lg-12"
                data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
                <div class="association-card bg-royal-blue text-white p-5 d-flex align-items-center">
                    <div class="row w-100 align-items-center">
                        <div class="col-lg-8">
                            <span class="d-inline-block fs-14 fw-600 text-muted-saffron text-uppercase ls-1px mb-10px">Industrial Cooperative</span>
                            <h2 class="alt-font fw-700 mb-3 text-white">Sugar Cooperatives & APMC</h2>
                            <p class="fs-18 opacity-8 mb-0">Championing the rights of sugarcane growers and fighting for better returns across the district's industrial cooperatives and APMC sectors.
                            </p>
                        </div>
                        <div class="col-lg-4 text-center mt-4 mt-lg-0">
                            <i class="bi bi-gear-fill text-white opacity-2" style="font-size: 100px;"></i>
                        </div>
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