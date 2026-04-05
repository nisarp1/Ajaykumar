<?php
/*
Template Name: Join the Movement
*/
get_header(); 
$extra_css = '
    <style>
        :root {
            --royal-blue: #000080;
            --muted-saffron: #FF9933;
            --emerald-green: #138808;
            --alabaster: #FAFAFA;
        }

        .form-glass {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 40px 80px rgba(0, 0, 80, 0.1);
        }

        .input-premium {
            background: transparent !important;
            border: none !important;
            border-bottom: 2px solid rgba(0, 0, 128, 0.1) !important;
            border-radius: 0 !important;
            padding: 15px 0 !important;
            font-size: 16px !important;
            color: var(--royal-blue) !important;
        }

        .input-premium:focus {
            border-bottom-color: var(--royal-blue) !important;
            box-shadow: none !important;
        }

        .cta-box {
            background: var(--royal-blue);
            color: #fff;
            padding: 60px;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }

        .cta-box::after {
            content: \'\';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255, 153, 51, 0.15);
            border-radius: 50%;
            z-index: 0;
        }

        .text-tricolor-gradient {
            background: linear-gradient(180deg, #FF9933 0%, #FFFFFF 50%, #138808 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }

        .top-right-icon {
            position: absolute;
            top: 30px;
            right: 30px;
            font-size: 100px;
            color: #FFFFFF;
            opacity: 0.1;
            transform: rotate(-15deg);
            z-index: 1;
            pointer-events: none;
        }
    </style>
';
echo $extra_css;
?>
<!-- Page Title -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/new/inner-pages-banner/join-movement.jpg');">
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Community Action</span>
                <h1 class="alt-font text-white fw-700 ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">Be the Change.<br>Join the Movement.</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">This is not just a membership; it's a commitment to a stronger, more prosperous Bagalkot.</p>
            </div>
        </div>
    </div>
</section>

<!-- Form Section -->
<section class="pt-80px pb-100px bg-alabaster">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6"
                data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 800, "easing": "easeOutQuad" }'>
                <div class="cta-box">
                    <i class="bi bi-award-fill top-right-icon"></i>
                    <h3 class="alt-font fw-700 text-white mb-4">Why Stand with Us?</h3>
                    <div class="d-flex mb-4">
                        <div class="me-4"><i class="bi bi-people fs-40 text-tricolor-gradient"></i></div>
                        <div>
                            <h5 class="fw-700 text-white mb-1">Grassroots Power</h5>
                            <p class="opacity-7 mb-0">Join a network of thousands of workers dedicated to rural
                                upliftment.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="me-4"><i class="bi bi-shield-check fs-40 text-tricolor-gradient"></i></div>
                        <div>
                            <h5 class="fw-700 text-white mb-1">Clean Leadership</h5>
                            <p class="opacity-7 mb-0">Support a legacy of integrity and transparency in public
                                service.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="me-4"><i class="bi bi-megaphone fs-40 text-tricolor-gradient"></i></div>
                        <div>
                            <h5 class="fw-700 text-white mb-1">Your Voice Matters</h5>
                            <p class="opacity-7 mb-0">Direct access to policy discussions and community initiatives.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6"
                data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 800, "easing": "easeOutQuad" }'>
                <div class="form-glass">
                    <h4 class="alt-font fw-700 text-royal-blue mb-40px">Membership Registration</h4>
                    <?php echo do_shortcode('[contact-form-7 title="Join the Movement"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
