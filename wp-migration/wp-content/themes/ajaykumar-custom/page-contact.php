<?php
/*
Template Name: Contact
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

        .contact-info-box {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
            border-top: 4px solid var(--royal-blue);
        }

        .contact-form-glass {
            background: #fff;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 40px 80px rgba(0, 0, 80, 0.1);
        }

        .map-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            height: 450px;
        }
    </style>
';
echo $extra_css;
?>
<!-- Page Title -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/new/new/page-banners/contact.jpg'); background-position: center center;">
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Get in Touch</span>
                <h1 class="alt-font fw-700 text-white ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">Let's Connect for a Better Bagalkot.</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Your voice matters. Reach out to our official office for support, collaboration, or queries.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info & Form -->
<section class="pt-20px pb-100px bg-alabaster">
    <div class="container">
        <!-- Top Row: Address and Media Cards -->
        <div class="row g-4 mb-5" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- Address Card -->
            <div class="col-lg-6">
                <div class="contact-info-box">
                    <h5 class="fw-700 text-dark-gray mb-4">Constituency Office</h5>
                    <div class="d-flex mb-3">
                        <i class="bi bi-geo-alt-fill text-muted-saffron me-3 fs-24"></i>
                        <p class="mb-0 fs-18">District Congress Office,<br>Kaulpet, Bagalkote, Karnataka 587101.</p>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="bi bi-telephone-fill text-royal-blue me-3 fs-20"></i>
                        <p class="mb-0 fs-18">+91 98453 52310</p>
                    </div>
                    <div class="d-flex">
                        <i class="bi bi-envelope-fill text-emerald-green me-3 fs-20"></i>
                        <p class="mb-0 fs-18">office@ajaykumarsarnaik.com</p>
                    </div>
                </div>
            </div>

            <!-- Media Card -->
            <div class="col-lg-6">
                <div class="contact-info-box" style="border-top-color: var(--muted-saffron);">
                    <h5 class="fw-700 text-dark-gray mb-4">Media & Public Relations</h5>
                    <p class="fs-17 opacity-7 mb-4">For press enquiries, official interviews, or documentation requests, please contact our dedicated PR division via email or phone.</p>
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-envelope-paper-fill text-muted-saffron me-3 fs-20"></i>
                        <a href="mailto:office@ajaykumarsarnaik.com" class="text-dark-gray fw-600 fs-17">office@ajaykumarsarnaik.com</a>
                    </div>
                    <a href="mailto:office@ajaykumarsarnaik.com" class="btn btn-medium btn-transparent-dark-gray mt-2">Email PR Team</a>
                </div>
            </div>
        </div>

        <!-- Bottom Row: Form Card -->
        <div class="row" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
            <div class="col-12">
                <div class="contact-form-glass">
                    <div class="row align-items-center mb-4">
                        <div class="col-md-6">
                            <h3 class="alt-font fw-700 text-royal-blue mb-0">Enquiry Form</h3>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <span class="fs-15 text-muted">* All fields are mandatory for official correspondence</span>
                        </div>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 title="Enquiry Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="pt-0 pb-100px bg-white">
    <div class="container">
        <div class="map-container" data-anime='{ "opacity": [0,1], "duration": 1000, "easing": "easeOutQuad" }'>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3831.6354038485856!2d75.692701675445!3d16.187741636253815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc77861e943953d%3A0x21fb9cdcc65d3a0!2sDistrict%20Congress%20Office%20Bagalkot!5e0!3m2!1sen!2sin!4v1773991913363!5m2!1sen!2sin"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php get_footer(); ?>
