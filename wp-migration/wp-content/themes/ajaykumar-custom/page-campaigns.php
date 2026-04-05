<?php
/*
Template Name: Campaigns
*/
get_header(); 
$extra_css = '
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .glass-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 80, 0.12);
            background: rgba(255, 255, 255, 0.85);
        }

        .event-badge {
            display: inline-block;
            background: var(--royal-blue);
            color: #fff;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .floating-date {
            background: #fff;
            padding: 15px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            min-width: 80px;
        }

        .floating-date .day {
            font-size: 28px;
            font-weight: 900;
            color: var(--royal-blue);
            line-height: 1;
            display: block;
        }
            text-transform: uppercase;
            margin-top: 5px;
            display: block;
        }
        .btn-register-now {
            border: 1px solid rgba(0, 0, 128, 0.2) !important;
            color: var(--royal-blue) !important;
            transition: all 0.3s ease;
            font-weight: 700;
        }

        .btn-register-now:hover {
            background-color: var(--royal-blue) !important;
            color: #fff !important;
            border-color: var(--royal-blue) !important;
            box-shadow: 0 10px 20px rgba(0, 0, 80, 0.15);
        }
    </style>
';
echo $extra_css;
?>

<!-- Hero -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/new/inner-pages-banner/campaigns.jpg'); background-position: center center;">
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Community Action</span>
                <h1 class="alt-font fw-700 text-white ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">The Pulse of the People.</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Join our movement for a prosperous and self-reliant Bagalkot.</p>
            </div>
        </div>
    </div>
</section>

<!-- Ongoing Campaigns -->
<section class="pt-100px pb-100px bg-alabaster">
    <div class="container">
        <div class="row justify-content-center mb-60px">
            <div class="col-lg-8 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">Active Outreach</span>
                <h2 class="alt-font text-royal-blue fw-700 ls-minus-1px mb-0" style="font-size: 3.5rem; line-height: 1.1;">Our Current Focus</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- Campaign 1 -->
            <div class="col">
                <div class="glass-card p-5 h-100 text-center border-top border-4 border-color-royal-blue">
                    <i class="bi bi-bank text-royal-blue fs-50 mb-25px d-block"></i>
                    <h5 class="fw-800 text-dark-gray mb-15px">The Cooperative Revolution</h5>
                    <p class="fs-16 opacity-7 mb-0">Spearheading massive credit-accessibility drives, ensuring over 1.5 lakh farming families have access to low-interest loans.</p>
                </div>
            </div>
            <!-- Campaign 2 -->
            <div class="col">
                <div class="glass-card p-5 h-100 text-center border-top border-4 border-color-muted-saffron">
                    <i class="bi bi-water text-muted-saffron fs-50 mb-25px d-block"></i>
                    <h5 class="fw-800 text-dark-gray mb-15px">Agricultural Advocacy</h5>
                    <p class="fs-16 opacity-7 mb-0">Fighting for fair compensation (₹35L–₹40L per acre) for families affected by the Upper Krishna Project Phase 3.</p>
                </div>
            </div>
            <!-- Campaign 3 -->
            <div class="col">
                <div class="glass-card p-5 h-100 text-center border-top border-4 border-color-emerald-green">
                    <i class="bi bi-trophy text-emerald-green fs-50 mb-25px d-block"></i>
                    <h5 class="fw-800 text-dark-gray mb-15px">Youth & Sports</h5>
                    <p class="fs-16 opacity-7 mb-0">Identifying and nurturing young rural athletes through modern synthetic tracks and indoor stadia infrastructure.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events Section -->
<section class="pt-100px pb-100px bg-white">
    <div class="container">
        <div class="row justify-content-center mb-40px">
            <div class="col-lg-8 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">Stay Connected</span>
                <h2 class="alt-font text-royal-blue fw-700 ls-minus-1px mb-0">Upcoming Events & Rallies</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 200, "easing": "easeOutQuad" }'>
                <div class="glass-card p-50px">
                    <i class="bi bi-calendar-event fs-60 text-muted-saffron mb-20px d-block"></i>
                    <h4 class="text-dark-gray fw-600 mb-15px">No Scheduled Events Promptly</h4>
                    <p class="fs-18 opacity-7 mb-0">There are currently no scheduled public rallies or events. Please check back soon or follow our social media channels for real-time updates.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
