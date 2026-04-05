<?php
/*
Template Name: About Us
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
            width: 400px;
            height: 400px;
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
            filter: blur(80px);
            opacity: 0.15;
        }

        .blob-1 {
            top: -100px;
            right: -100px;
            background: radial-gradient(circle, var(--royal-blue) 0%, transparent 70%);
        }

        .blob-2 {
            bottom: 20%;
            left: -150px;
            background: radial-gradient(circle, var(--muted-saffron) 0%, transparent 70%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08); /* Changed from 0 15px 35px rgba(0, 0, 0, 0.05) */
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .glass-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 60px rgba(0, 0, 80, 0.12);
            background: rgba(255, 255, 255, 0.85);
            border-color: rgba(0, 0, 128, 0.2);
        }

        .hero-title-gradient {
            background: linear-gradient(135deg, var(--royal-blue) 0%, #0000b3 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Philosophy Redesign Styles */
        .philosophy-title {
            font-size: 3.1rem;
            line-height: 1.2;
            letter-spacing: -1px;
            font-weight: 800;
            color: var(--dark-gray);
        }

        .philosophy-icon-container {
            width: 70px;
            height: 70px;
            min-width: 70px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 10px 25px rgba(0, 0, 80, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .philosophy-feature:hover .philosophy-icon-container {
            transform: scale(1.1);
            box-shadow: 0 15px 35px rgba(0, 0, 80, 0.15);
        }

        .philosophy-badge {
            display: inline-flex;
            align-items: center;
            padding-left: 15px;
            border-left: 5px solid;
            border-image: linear-gradient(to bottom, #FF9933 0%, #FFFFFF 50%, #138808 100%) 1;
        }

        @media (max-width: 767px) {
            .philosophy-title {
                font-size: 2.8rem;
            }
        }

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
            0% {
                box-shadow: 0 0 0 0 rgba(19, 136, 8, 0.6);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(19, 136, 8, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(19, 136, 8, 0);
            }
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

        .hero-horizontal-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0, 0, 128, 0.9) 0%, rgba(0, 0, 128, 0.5) 35%, rgba(0, 0, 128, 0.2) 50%, transparent 70%);
            z-index: 0;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-auto-rows: 1fr;
            gap: 30px;
        }

        @media (max-width: 991px) {
            .bento-grid {
                grid-template-columns: 1fr;
                grid-auto-rows: auto;
            }
        }
    </style>
';
echo $extra_css;
?>

<!-- start page title -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/new/inner-pages-banner/about-us.jpg'); background-position: center center;">
    <!-- background decor moved inside overflow-hidden section -->
    <div class="decor-blob blob-1"></div>
    <div class="decor-blob blob-2"></div>
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-light bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span
                    class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Our
                    Legacy & Vision</span>
                <h1 class="text-white alt-font fw-700 ls-minus-2px mb-25px"
                    style="font-size: 4rem; line-height: 4.2rem;">
                    A Legacy of Service.<br>A Vision for Bagalkot.
                </h1>
                <p class="fs-20 text-white opacity-8 mb-35px w-80 lg-w-100 fw-300">
                    Shri Ajay Kumar Sarnaik is a distinguished political leader and veteran administrator with a legacy of service spanning over four decades. Dedicated to the socio-economic advancement of Karnataka.
                </p>
            </div>
        </div>
    </div>
    <div class="image-caption hero-caption bottom-40px">
        <i class="fa-solid fa-quote-left"></i> A Legacy of Trust & Development
    </div>
    <div class="down-section text-center position-absolute bottom-30px start-50 translate-middle-x z-index-1">
        <a href="#about-philosophy" class="section-link text-white opacity-5 hover-opacity-100">
            <i class="bi bi-chevron-down fs-30"></i>
        </a>
    </div>
</section>
<!-- end hero section -->

<!-- start philosophy section -->
<section id="about-philosophy" class="pt-100px pb-100px bg-alabaster overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-50px"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">The Philosophy</span>
                <h2 class="alt-font text-royal-blue fw-600 mb-20px ls-minus-1px" style="font-size: 3.5rem; line-height: 1.1;">Building a Resilient,<br>Cooperative Society.</h2>
                <div class="fancy-underline border-bottom-tricolor mb-35px" style="width: 100px;"></div>
                <p class="fs-19 lh-34 text-dark-gray opacity-8 mb-45px w-90 lg-w-100">
                    Born on May 12, 1956, in Bagalkot, Shri Sarnaik’s journey is rooted in the soil of North Karnataka. An alumnus of the prestigious Sainik School, Bijapur, he brings a disciplined and visionary approach to public life, characterized by a commitment to grassroots development and sports excellence.
                </p>
                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-md-6 philosophy-feature">
                        <div class="d-flex align-items-center">
                            <div class="philosophy-icon-container me-4">
                                <i class="bi bi-check2-circle text-emerald-green fs-35"></i>
                            </div>
                            <div>
                                <h6 class="fw-800 text-dark-gray mb-1 fs-18">Integrity First</h6>
                                <p class="fs-15 mb-0 opacity-7">Unblemished record for 3+ decades.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-md-6 philosophy-feature">
                        <div class="d-flex align-items-center">
                            <div class="philosophy-icon-container me-4">
                                <i class="bi bi-people text-muted-saffron fs-30"></i>
                            </div>
                            <div>
                                <h6 class="fw-800 text-dark-gray mb-1 fs-18">People Driven</h6>
                                <p class="fs-15 mb-0 opacity-7">Grassroots connection power.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-8 lg-ps-15px"
                data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
                <div class="position-relative">
                    <div class="image-wrapper rounded-20px overflow-hidden box-shadow-extra-large position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/anna-rahul.jpg" class="w-100" alt="About Ajaykumar Sarnaik">
                        <div class="image-caption bottom-20px left-20px">
                            <i class="fa-solid fa-handshake"></i> Championing People's Vision
                        </div>
                    </div>
                    <div class="position-absolute bottom-minus-40px right-minus-40px d-none d-lg-block">
                        <div class="bg-royal-blue p-40px border-radius-15px text-white text-center box-shadow-extra-large"
                            style="border: 1px solid rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                            <span class="fs-70 fw-800 d-block mb-0 lh-1">30+</span>
                            <span class="fs-13 text-uppercase fw-700 ls-2px opacity-8">Years of Service</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end philosophy section -->

<!-- start vision & mission section (Bento Grid) -->
<section class="bg-white pt-100px pb-100px position-relative overflow-hidden">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center"
                data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">The Foundation</span>
                <h2 class="alt-font text-royal-blue fw-700 ls-minus-1px mb-0" style="font-size: 3.5rem; line-height: 1.1;">Vision, Mission & Goals</h2>
                <p class="fs-18 opacity-7 mt-3">Our roadmap for a stronger Bagalkot and a prosperous Karnataka.</p>
            </div>
        </div>
        <div class="bento-grid"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

            <!-- Row 1: Vision -->
            <div class="glass-card p-5 d-flex flex-column bg-alabaster border-top-tricolor h-100">
                <i class="bi bi-eye text-muted-saffron fs-45 mb-25px"></i>
                <h4 class="alt-font fw-800 text-dark-gray mb-20px">The Vision</h4>
                <p class="fs-17 opacity-8 mb-0 lh-30">Balancing rural strengths with modern infrastructure, education, and economic resilience to ensure development reaches the last household.</p>
            </div>

            <!-- Row 1: Mission -->
            <div
                class="glass-card p-5 d-flex flex-column bg-royal-blue text-white overflow-hidden position-relative border-0 shadow-lg h-100">
                <div class="position-absolute right-minus-20px top-minus-20px opacity-1">
                    <i class="bi bi-bullseye" style="font-size: 180px;"></i>
                </div>
                <div class="position-relative z-index-1">
                    <span class="fs-13 fw-700 text-uppercase ls-2px mb-15px d-block opacity-7">The Mission</span>
                    <h4 class="alt-font fw-800 mb-20px text-white">Empowering Rural Karnataka.</h4>
                    <p class="fs-16 lh-28 opacity-8 mb-0">
                        To ensure that every farmer stands empowered, every youth finds opportunity, and every citizen's voice shapes governance.
                    </p>
                </div>
            </div>

            <!-- Row 2: Youth -->
            <div class="glass-card p-5 d-flex flex-column border-0 bg-white shadow-sm border-radius-15px h-100">
                <i class="bi bi-trophy text-emerald-green fs-45 mb-25px"></i>
                <h4 class="alt-font fw-800 text-dark-gray mb-20px">Youth Empowerment</h4>
                <p class="fs-17 opacity-8 mb-0 lh-30">Building infrastructure and systems that allow Karnataka's youth to compete nationally and globally through world-class facilities.</p>
            </div>

            <!-- Row 2: Infrastructure -->
            <div class="glass-card p-5 d-flex flex-column bg-alabaster border-0 h-100">
                <i class="bi bi-signpost-split text-royal-blue fs-45 mb-25px"></i>
                <h4 class="alt-font fw-800 text-dark-gray mb-20px">Infrastructure</h4>
                <p class="fs-17 opacity-8 mb-0 lh-30">Modernizing agriculture through irrigation justice, credit accessibility, and knowledge-driven farming for prosperity.</p>
            </div>

        </div>
    </div>
</section>
<!-- end vision & mission section -->

<!-- start journey timeline -->
<section id="biography" class="bg-alabaster pt-100px pb-100px overflow-hidden">
    <div class="container">
        <div class="row justify-content-center mb-60px">
            <div class="col-lg-8 text-center">
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">Leadership Journey</span>
                <h2 class="alt-font text-royal-blue fw-700 ls-minus-1px mb-0" style="font-size: 3.5rem; line-height: 1.1;">Milestones of Honor</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 position-relative">
                <div class="milestone-line d-none d-lg-block"></div>
                <div class="row row-cols-1 row-cols-lg-4 g-lg-5">
                    <!-- Item 1 -->
                    <div class="col mb-40px lg-mb-0 text-center text-lg-start" data-anime=\'{ "translateY" : [30,
                        0], "opacity" : [0,1], "duration" : 600, "delay" : 0, "easing" : "easeOutQuad" }\'>
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <span
                                class="fs-50 fw-900 text-dark-gray opacity-10 alt-font mb-10px lh-1 ls-minus-2px">1998</span>
                            <div class="milestone-dot mb-20px d-none d-lg-block"></div>
                            <h6 class="fw-700 text-royal-blue mb-10px">Member of Parliament</h6>
                            <p class="fs-15 opacity-7">Elected from Bagalkot. Handpicked to represent India at the United Nations, bringing rural perspectives to global diplomacy.</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="col mb-40px lg-mb-0 text-center text-lg-start" data-anime=\'{ "translateY" : [30,
                        0], "opacity" : [0,1], "duration" : 600, "delay" : 200, "easing" : "easeOutQuad" }\'>
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <span
                                class="fs-50 fw-900 text-dark-gray opacity-10 alt-font mb-10px lh-1 ls-minus-2px">2004</span>
                            <div class="milestone-dot mb-20px d-none d-lg-block"></div>
                            <h6 class="fw-700 text-royal-blue mb-10px">Cabinet Minister</h6>
                            <p class="fs-15 opacity-7">Transformed the state's sporting landscape. Successfully organized the National Games and modernized stadium architecture.</p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="col mb-40px lg-mb-0 text-center text-lg-start" data-anime=\'{ "translateY" : [30,
                        0], "opacity" : [0,1], "duration" : 600, "delay" : 400, "easing" : "easeOutQuad" }\'>
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <span
                                class="fs-50 fw-900 text-dark-gray opacity-10 alt-font mb-10px lh-1 ls-minus-2px">2013</span>
                            <div class="milestone-dot mb-20px d-none d-lg-block"></div>
                            <h6 class="fw-700 text-royal-blue mb-10px">DCC Bank President</h6>
                            <p class="fs-15 opacity-7">Revolutionizing rural credit and providing financial literacy as a lifeline for thousands of farming families.</p>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="col text-center text-lg-start" data-anime=\'{ "translateY" : [30, 0], "opacity" :
                        [0,1], "duration" : 600, "delay" : 600, "easing" : "easeOutQuad" }\'>
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <span
                                class="fs-50 fw-900 text-dark-gray opacity-10 alt-font mb-10px lh-1 ls-minus-2px">2024-2028</span>
                            <div class="milestone-dot mb-20px d-none d-lg-block"></div>
                            <h6 class="fw-700 text-royal-blue mb-10px">Vision 2028</h6>
                            <p class="fs-15 opacity-7">Empowering Rural Economy and Shaping the Future of the Congress Party and as the President of Bagalkot DCC Bank.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start core sectors section -->
<section class="bg-white pt-100px pb-100px overflow-hidden">
    <div class="container">
        <div class="row justify-content-center mb-5 md-mb-30px">
            <div class="col-lg-8 text-center" data-anime='{ "translateY" : [30, 0], "opacity" :
                [0,1], "duration" : 600, "easing" : "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">Core Impact</span>
                <h2 class="alt-font text-royal-blue fw-600 mb-0 ls-minus-1px" style="font-size: 3.5rem; line-height: 1.1;">Driving Growth Across Diverse Sectors.</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 g-4" data-anime=\'{ "el" : "childs" , "translateY" : [30, 0], "opacity"
            : [0,1], "duration" : 600, "delay" : 200, "staggervalue" : 200, "easing" : "easeOutQuad" }\'>
            <div class="col">
                <div class="glass-card h-100 p-0 overflow-hidden border-0">
                    <div class="position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/sugar.jpg" class="w-100 h-250px object-fit-cover" alt="Sugar Industry">
                        <div class="image-caption caption-bar">
                            <span><i class="fa-solid fa-wheat-awn"></i> Sustainable Agriculture</span>
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h5 class="alt-font fw-700 text-royal-blue mb-10px">Agriculture & Sugar Industry</h5>
                        <p class="fs-15 opacity-7 mb-0">Championing the rights of sugarcane farmers and modernizing
                            the sugar cooperative sector for better returns and stability.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="glass-card h-100 p-0 overflow-hidden border-0">
                    <div class="position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/works/2.jpg" class="w-100 h-250px object-fit-cover"
                            alt="Cooperative Banking">
                        <div class="image-caption caption-bar">
                            <span><i class="fa-solid fa-building-columns"></i> Financial Inclusion</span>
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h5 class="alt-font fw-700 text-royal-blue mb-10px">Financial Inclusion</h5>
                        <p class="fs-15 opacity-7 mb-0">Transforming DCC Banks into modern digital financial hubs
                            that support small-scale entrepreneurs and rural families.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="glass-card h-100 p-0 overflow-hidden border-0">
                    <div class="position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/youth.jpg" class="w-100 h-250px object-fit-cover" alt="Youth Empowerment">
                        <div class="image-caption caption-bar">
                            <span><i class="fa-solid fa-bolt"></i> Youth Empowerment</span>
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h5 class="alt-font fw-700 text-royal-blue mb-10px">Youth & Social Progress</h5>
                        <p class="fs-15 opacity-7 mb-0">Implementing state-of-the-art sports facilities and
                            vocational training centers to make youth self-reliant and competitive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end core sectors section -->


<?php get_footer(); ?>
