<?php
$page_title = "Contact Us - Ajaykumar Sarnaik";
$page_description = "Get in touch with Ajaykumar Sarnaik\'s office. For general enquiries, feedback, or suggestions, use our official contact platform.";
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

include 'parts/html-header.php';
include 'parts/header.php';
?>

<!-- Page Title -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden" style="background-image: url('images/new/about-title-bg.jpg');">
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
                        <p class="mb-0 fs-18">Main Market Road, Near Gandhi Circle,<br>Bagalkot, Karnataka 587101.</p>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="bi bi-telephone-fill text-royal-blue me-3 fs-20"></i>
                        <p class="mb-0 fs-18">+91 08354 220000</p>
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
                        <a href="mailto:pr@ajaykumarsarnaik.com" class="text-dark-gray fw-600 fs-17">pr@ajaykumarsarnaik.com</a>
                    </div>
                    <a href="mailto:pr@ajaykumarsarnaik.com" class="btn btn-medium btn-transparent-dark-gray mt-2">Email PR Team</a>
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
                    <form action="#" method="post">
                        <div class="row">
                            <!-- 3 Columns Row -->
                            <div class="col-md-4 mb-4">
                                <label class="form-label fw-600 text-dark-gray">Full Name</label>
                                <input type="text" placeholder="Enter your name" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-md-4 mb-4">
                                <label class="form-label fw-600 text-dark-gray">Email Address</label>
                                <input type="email" placeholder="example@domain.com" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-md-4 mb-4">
                                <label class="form-label fw-600 text-dark-gray">Enquiry Type</label>
                                <select class="form-control form-control-lg" required>
                                    <option value="">Select Option</option>
                                    <option value="general">General Enquiry</option>
                                    <option value="feedback">Feedback / Suggestions</option>
                                    <option value="issue">Regional Issue Report</option>
                                    <option value="appointment">Appointment Request</option>
                                </select>
                            </div>
                            <!-- Full Width Row -->
                            <div class="col-md-12 mb-4">
                                <label class="form-label fw-600 text-dark-gray">Your Message</label>
                                <textarea placeholder="How can we help you? Describe in detail..." class="form-control form-control-lg" rows="4" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-extra-large bg-royal-blue text-white btn-rounded w-100 py-3">
                                    Send Message <i class="bi bi-send-fill ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122820.738018445!2d75.6441716!3d16.1852684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb9e3e3e3e3e3e3%3A0x7b0b0b0b0b0b0b0b!2sBagalkot%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1709460000000!5m2!1sen!2sin"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<?php
include 'parts/footer.php';
include 'parts/html-footer.php';
?>