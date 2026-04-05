<?php
/*
Template Name: Volunteer
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

        .role-card {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            border-bottom: 5px solid transparent;
        }

        .role-card:hover {
            transform: translateY(-10px);
            border-bottom-color: var(--royal-blue);
            box-shadow: 0 20px 40px rgba(0, 0, 80, 0.1);
        }

        .volunteer-hero {
            background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 0, 0.7)), url(\'images/new/anna-rahul.jpg\');
            background-size: cover;
            background-position: center;
        }

        .impact-badge {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(0, 0, 128, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--royal-blue);
            font-size: 24px;
            margin-bottom: 25px;
        }

        .cta-spacer {
            margin-top: 80px;
        }
    </style>
';
echo $extra_css;
?>
<!-- Hero -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/new/inner-pages-banner/volunteer.jpg');">
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Leaders in the Making</span>
                <h1 class="alt-font fw-700 text-white ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">Be Part of the Transformative Journey.</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Empowering youth and community leaders to build a stronger Bagalkot together.</p>
            </div>
        </div>
    </div>
</section>

<!-- All round development -->
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
        <div class="row row-cols-1 row-cols-md-3 g-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col">
                <div class="bg-white p-5 border-radius-15px shadow-sm text-center h-100">
                    <i class="bi bi-link-45deg fs-40 text-muted-saffron mb-3 d-block"></i>
                    <h5 class="fw-700 text-dark-gray">Networking</h5>
                    <p class="fs-15 opacity-7">Connect with district leaders, industrialists, and social workers.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="bg-white p-5 border-radius-15px shadow-sm text-center h-100">
                    <i class="bi bi-lightbulb fs-40 text-royal-blue mb-3 d-block"></i>
                    <h5 class="fw-700 text-dark-gray">Skill Building</h5>
                    <p class="fs-15 opacity-7">Gain experience in management, digital communication, and research.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="bg-white p-5 border-radius-15px shadow-sm text-center h-100">
                    <i class="bi bi-award fs-40 text-india-green mb-3 d-block"></i>
                    <h5 class="fw-700 text-dark-gray">Recognition</h5>
                    <p class="fs-15 opacity-7">Earn certificates and recognition for exceptional public service.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Volunteer Roles -->
<section class="pt-100px pb-100px bg-white">
    <div class="container">
        <div class="row justify-content-center mb-60px">
            <div class="col-lg-8 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">Opportunities</span>
                <h2 class="alt-font fw-700 text-royal-blue mb-0 ls-minus-1px" style="font-size: 3.5rem; line-height: 1.1;">Available Roles</h2>
            </div>
        </div>
        <div class="row g-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "staggervalue": 200, "easing": "easeOutQuad" }'>

            <div class="col-lg-4 col-md-6">
                <div class="role-card">
                    <div class="impact-badge"><i class="bi bi-person-walking"></i></div>
                    <h5 class="fw-700 text-dark-gray">Field Agent</h5>
                    <p class="fs-15 opacity-7 mb-0">Door-to-door awareness, collecting public feedback, and event
                        support.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="role-card">
                    <div class="impact-badge"><i class="bi bi-journal-text"></i></div>
                    <h5 class="fw-700 text-dark-gray">Researcher</h5>
                    <p class="fs-15 opacity-7 mb-0">Analyze regional issues, demographics, and development needs.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="role-card">
                    <div class="impact-badge"><i class="bi bi-people"></i></div>
                    <h5 class="fw-700 text-dark-gray">Community Lead</h5>
                    <p class="fs-15 opacity-7 mb-0">Heading a group of volunteers for specific village or street
                        units.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center cta-spacer" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 400, "easing": "easeOutQuad" }'>
            <div class="col-lg-8">
                <div class="bg-white p-5 border-radius-20px shadow-lg text-center border border-color-extra-medium-gray">
                    <h3 class="alt-font fw-700 text-royal-blue mb-2">Start Your Journey Now</h3>
                    <p class="fs-18 opacity-7 mb-4">Fill out the quick signup form to get a callback from our team.</p>
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#volunteerModal" class="btn btn-large bg-royal-blue text-white btn-rounded shadow-large d-inline-flex align-items-center justify-content-center">
                        Fill Registration Form <i class="bi bi-pencil-square ms-10px"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Volunteer Modal -->
<div class="modal fade" id="volunteerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-radius-20px overflow-hidden border-0 shadow-lg">
            <div class="modal-header bg-royal-blue text-white border-0 p-4">
                <h5 class="modal-title alt-font fw-700 mb-0">Volunteer Registration</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 bg-alabaster">
                <?php echo do_shortcode('[contact-form-7 title="Volunteer Form"]'); ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
