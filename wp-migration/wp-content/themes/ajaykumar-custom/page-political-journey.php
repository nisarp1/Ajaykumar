<?php
/*
Template Name: Political Journey
*/
get_header(); 
$extra_css = '
    <style>
        :root {
            --royal-blue: #000080;
            --muted-saffron: #FF9933;
            --emerald-green: #138808;
            --alabaster: #FAFAFA;
            --dark-gray: #232323;
            --medium-gray: #717580;
            --white: #ffffff;
        }

        .bg-royal-blue {
            background-color: var(--royal-blue) !important;
        }

        .text-royal-blue {
            color: var(--royal-blue) !important;
        }

        .border-bottom-tricolor {
            border-bottom: 3px solid;
            border-image: linear-gradient(to right, #FF9933 33%, #FFFFFF 33%, #FFFFFF 66%, #138808 66%) 1;
        }

        /* Premium Decor Blobs */
        .decor-blob {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
            filter: blur(80px);
            opacity: 0.12;
        }

        .blob-1 {
            top: 5%;
            left: -100px;
            background: radial-gradient(circle, var(--royal-blue) 0%, transparent 70%);
        }

        .blob-2 {
            top: 40%;
            right: -150px;
            background: radial-gradient(circle, var(--muted-saffron) 0%, transparent 70%);
        }

        .blob-3 {
            bottom: 5%;
            left: -100px;
            background: radial-gradient(circle, var(--emerald-green) 0%, transparent 70%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 24px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            box-shadow: 0 10px 30px rgba(0, 0, 80, 0.05);
        }

        .glass-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 60px rgba(0, 0, 80, 0.12);
            background: rgba(255, 255, 255, 0.9);
        }

        .legacy-title-gradient {
            background: linear-gradient(135deg, var(--royal-blue) 0%, #0033cc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .philosophy-quote-box {
            border: none;
            border-left: 6px solid;
            border-image: linear-gradient(to bottom, var(--muted-saffron), var(--emerald-green)) 1;
        }

        .floating-badge {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 12px 20px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            display: inline-flex;
            align-items: center;
        }

        .timeline-box {
            position: relative;
            padding-left: 50px;
            margin-bottom: 60px;
            border-left: 2px dashed rgba(0, 0, 128, 0.2);
        }

        .timeline-box::before {
            content: \'\';
            position: absolute;
            left: -11px;
            top: 0;
            width: 20px;
            height: 20px;
            background: var(--white);
            border: 4px solid var(--royal-blue);
            border-radius: 50%;
            z-index: 2;
        }

        .timeline-year {
            font-size: 3rem;
            font-weight: 900;
            color: var(--royal-blue);
            opacity: 0.08;
            line-height: 1;
            position: absolute;
            right: 0;
            top: 0;
            font-family: var(--alt-font);
        }

        .section-label {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 4px;
            background: rgba(0, 0, 128, 0.05);
            color: var(--royal-blue);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 13px;
            margin-bottom: 15px;
            border-left: 4px solid var(--muted-saffron);
        }

        /* Milestone Dots & Lines from About Page */
        .milestone-dot {
            width: 14px;
            height: 14px;
            background: #138808;
            border: 2px solid #fff;
            border-radius: 50%;
            position: relative;
            z-index: 5;
            box-shadow: 0 0 0 0 rgba(19, 136, 8, 0.6);
            animation: dot-pulse 2s infinite;
        }

        .milestone-dot::after {
            content: \'\';
            position: absolute;
            top: -8px;
            left: -8px;
            right: -8px;
            bottom: -8px;
            border: 1px solid rgba(19, 136, 8, 0.3);
            border-radius: 50%;
            z-index: -1;
        }

        @keyframes dot-pulse {
            0% { box-shadow: 0 0 0 0 rgba(19, 136, 8, 0.6); }
            70% { box-shadow: 0 0 0 15px rgba(19, 136, 8, 0); }
            100% { box-shadow: 0 0 0 0 rgba(19, 136, 8, 0); }
        }

        .milestone-line {
            position: absolute;
            top: 67px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(19, 136, 8, 0.2) 15%, rgba(19, 136, 8, 0.2) 85%, rgba(0, 0, 0, 0) 100%);
            z-index: 1;
        }
    </style>
';
echo $extra_css; // Output the CSS
?>

<!-- start page title -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/new/new/page-banners/political-journey.jpg'); background-position: center center;">
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">The Democratic Odyssey</span>
                <h1 class="text-white alt-font fw-700 ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">A Journey of Grit & Governance</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">A legacy of service spanning over four decades, from grassroots agricultural leadership to state governance and national representation.</p>
            </div>
        </div>
    </div>
</section>

<!-- start intro section -->
<section class="pt-100px pb-100px position-relative overflow-hidden bg-white">
    <!-- Decorative Blobs -->
    <div class="decor-blob blob-1"></div>
    <div class="decor-blob blob-2"></div>
    <div class="decor-blob blob-3"></div>

    <div class="container position-relative z-index-1">
        <!-- Storyline Row 1: The Core Philosophy -->
        <div class="row align-items-center mb-100px md-mb-60px">
            <!-- Left: Impactful Image with Floating Element -->
            <div class="col-lg-6" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 800, "easing": "easeOutQuad" }'>
                <div class="position-relative pe-40px sm-pe-0">
                    <div class="overflow-hidden border-radius-24px shadow-xl">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/new/strategy.jpg" class="w-100 hover-scale" alt="Cooperative Leadership">
                    </div>
                    <!-- Floating Badge -->
                    <div class="position-absolute bottom-30px right-minus-10px sm-right-10px floating-badge" data-anime='{ "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
                        <div class="bg-royal-blue w-40px h-40px border-radius-10px d-flex align-items-center justify-content-center me-3">
                            <i class="bi bi-shield-check text-white fs-20"></i>
                        </div>
                        <div>
                            <span class="d-block fs-13 fw-700 text-uppercase text-royal-blue ls-1px line-height-1">Strategic</span>
                            <span class="d-block fs-16 fw-800 text-dark-gray">Governance Expert</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right: Premium Content -->
            <div class="col-lg-5 offset-lg-1 md-mt-40px" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 800, "easing": "easeOutQuad" }'>
                <div class="d-flex align-items-center mb-20px">
                    <span class="w-40px h-2px bg-royal-blue me-15px"></span>
                    <span class="fs-15 fw-700 text-royal-blue text-uppercase ls-2px">Institutional Legacy</span>
                </div>
                <h2 class="alt-font fw-800 text-dark-gray mb-30px ls-minus-2px line-height-1-1">
                    <span class="legacy-title-gradient">Rooted in Strategy,</span><br>Driven by Empathy.
                </h2>
                <p class="fs-19 lh-34 text-dark-gray opacity-8 mb-40px fw-300">
                    Shri Sarnaik’s political journey reflects steady evolution—from leading the APMC Bagalkot as a champion for farmers' rights to serving as the <strong class="text-royal-blue">Minister of Youth Services and Sports</strong>. His leadership has been characterized by irrigation justice and rural resilience.
                </p>
                <div class="row g-4 mb-10px">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-bank fs-30 text-royal-blue me-15px"></i>
                            <span class="fs-16 fw-700 text-dark-gray">Cooperative<br>Leadership</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-heart-pulse fs-30 text-emerald-green me-15px"></i>
                            <span class="fs-16 fw-700 text-dark-gray">Mission Driven<br>Action</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Storyline Row 2: The Vision Quote -->
        <div class="row align-items-center">
            <!-- Left: High Impact Quote -->
            <div class="col-lg-6 order-2 order-lg-1" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 800, "easing": "easeOutQuad" }'>
                <div class="glass-card p-60px lg-p-40px position-relative overflow-hidden philosophy-quote-box">
                    <div class="position-absolute top-minus-30px right-minus-30px opacity-1">
                        <i class="bi bi-quote text-royal-blue" style="font-size: 200px;"></i>
                    </div>
                    <div class="position-relative z-index-1">
                        <i class="bi bi-quote text-royal-blue fs-60 mb-20px d-block opacity-4"></i>
                        <h3 class="alt-font font-italic fw-500 text-royal-blue mb-40px" style="line-height: 1.4;">
                            "Development must not be selective. It must reach the last household in the last village."
                        </h3>
                        <div class="d-flex align-items-center">
                            <div class="w-10px h-10px rounded-circle bg-muted-saffron me-3"></div>
                            <span class="fs-22 fw-800 text-royal-blue alt-font">Ajaykumar Sarnaik</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right: Portrait Section -->
            <div class="col-lg-5 offset-lg-1 order-1 order-lg-2 md-mb-40px" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 800, "easing": "easeOutQuad" }'>
                <div class="position-relative">
                    <div class="p-4 bg-alabaster border-radius-24px">
                        <div class="overflow-hidden border-radius-20px shadow-lg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/new/grassroot.jpg" class="w-100 hover-scale" alt="Grassroots Philosophy">
                        </div>
                    </div>
                    <!-- Caption Overlay -->
                    <div class="position-absolute bottom-0px left-minus-30px lg-left-0 d-none d-xl-block">
                        <div class="bg-royal-blue text-white p-20px px-30px border-radius-15px shadow-xl d-flex align-items-center">
                            <i class="bi bi-lightning-charge-fill fs-30 text-muted-saffron me-15px"></i>
                            <span class="fs-14 text-uppercase fw-700 ls-1px mb-0">Grassroots Connection</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start timeline section -->
<section class="bg-alabaster pt-100px pb-100px overflow-hidden">
    <div class="container">
        <div class="row justify-content-center mb-60px">
            <div class="col-lg-8 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">A Lifetime of Service</span>
                <h2 class="alt-font text-royal-blue fw-700 ls-minus-1px mb-0" style="font-size: 3.5rem; line-height: 1.1;">Electoral & Political Milestones</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 position-relative">
                <div class="milestone-line d-none d-lg-block"></div>
                <div class="row row-cols-1 row-cols-lg-4 g-lg-5">
                    <!-- Item 1 -->
                    <div class="col mb-40px lg-mb-0 text-center text-lg-start" data-anime='{ "translateY" : [30, 0], "opacity" : [0,1], "duration" : 600, "delay" : 0, "easing" : "easeOutQuad" }'>
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <span class="fs-50 fw-900 text-dark-gray opacity-10 alt-font mb-10px lh-1 ls-minus-2px">1989</span>
                            <div class="milestone-dot mb-20px d-none d-lg-block"></div>
                            <h6 class="fw-700 text-royal-blue mb-10px">Legislative Impact</h6>
                            <p class="fs-15 opacity-7">Elected as MLA from Bagalkot. Focused on large-scale infrastructure and regional development over two terms.</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="col mb-40px lg-mb-0 text-center text-lg-start" data-anime='{ "translateY" : [30, 0], "opacity" : [0,1], "duration" : 600, "delay" : 200, "easing" : "easeOutQuad" }'>
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <span class="fs-50 fw-900 text-dark-gray opacity-10 alt-font mb-10px lh-1 ls-minus-2px">1998</span>
                            <div class="milestone-dot mb-20px d-none d-lg-block"></div>
                            <h6 class="fw-700 text-royal-blue mb-10px">National Representation</h6>
                            <p class="fs-15 opacity-7">Member of Parliament, 12th Lok Sabha. Represented India at the United Nations, bringing rural perspectives to global diplomacy.</p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="col mb-40px lg-mb-0 text-center text-lg-start" data-anime='{ "translateY" : [30, 0], "opacity" : [0,1], "duration" : 600, "delay" : 400, "easing" : "easeOutQuad" }'>
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <span class="fs-50 fw-900 text-dark-gray opacity-10 alt-font mb-10px lh-1 ls-minus-2px">2012</span>
                            <div class="milestone-dot mb-20px d-none d-lg-block"></div>
                            <h6 class="fw-700 text-royal-blue mb-10px">Cooperative Revolution</h6>
                            <p class="fs-15 opacity-7">Taking helm as President of BDCC Bank. Revolutionized rural credit, ensuring farmers have access to fair loans.</p>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="col text-center text-lg-start" data-anime='{ "translateY" : [30, 0], "opacity" : [0,1], "duration" : 600, "delay" : 600, "easing" : "easeOutQuad" }'>
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <span class="fs-50 fw-900 text-dark-gray opacity-10 alt-font mb-10px lh-1 ls-minus-2px">Present</span>
                            <div class="milestone-dot mb-20px d-none d-lg-block"></div>
                            <h6 class="fw-700 text-royal-blue mb-10px">State Leadership</h6>
                            <p class="fs-15 opacity-7 text-royal-blue fw-700">Currently serving as the Member of Congress Party, helping shape the party's vision and strategy for Karnataka.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start achievements section -->
<section class="pt-100px pb-100px bg-white">
    <div class="container">
        <div class="row justify-content-center mb-60px">
            <div class="col-lg-8 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">Legislative Archive</span>
                <h2 class="alt-font text-royal-blue fw-700 ls-minus-1px mb-0" style="font-size: 3.5rem; line-height: 1.1;">Key Parliamentary Contributions.</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 g-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <div class="col">
                <div class="glass-card p-5 h-100 border-top border-4 border-color-royal-blue">
                    <i class="bi bi-award text-royal-blue fs-45 mb-25px d-block"></i>
                    <h5 class="fw-800 text-dark-gray mb-15px">Best Horticulturist</h5>
                    <p class="fs-16 opacity-7">Honored by the Government of Karnataka in 1995 for innovative contributions and leadership in the field of agriculture.</p>
                </div>
            </div>
            <div class="col">
                <div class="glass-card p-5 h-100 border-top border-4 border-color-muted-saffron">
                    <i class="bi bi-star-fill text-muted-saffron fs-45 mb-25px d-block"></i>
                    <h5 class="fw-800 text-dark-gray mb-15px">Excellence in Governance</h5>
                    <p class="fs-16 opacity-7">Under his leadership as MLA, the Bagalkot Taluka Panchayat was recognized as the "Best Taluka Panchayat" in the state.</p>
                </div>
            </div>
            <div class="col">
                <div class="glass-card p-5 h-100 border-top border-4 border-color-emerald-green">
                    <i class="bi bi-trophy text-emerald-green fs-45 mb-25px d-block"></i>
                    <h5 class="fw-800 text-dark-gray mb-15px">Sports Architecture</h5>
                    <p class="fs-16 opacity-7">Transformed the state's sporting landscape by organizing the National Games and building international-standard stadium infrastructure.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
