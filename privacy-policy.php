<?php
$page_title = "Privacy Policy - Ajaykumar Sarnaik";
$page_description = "Official Privacy Policy for Ajaykumar Sarnaik\'s profile website.";
$extra_css = '
    <style>
        :root {
            --royal-blue: #000080;
        }

        .policy-container {
            background: #fff;
            padding: 60px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.05);
        }

        h4 {
            color: var(--royal-blue);
            margin-top: 30px;
            font-weight: 700;
        }

        p {
            opacity: 0.8;
            line-height: 1.8;
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
            <div class="col-xl-7 col-lg-8 position-relative z-index-1 text-start" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Your Privacy</span>
                <h1 class="alt-font fw-700 text-white ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">Privacy Policy</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Last Updated: March 2026. How we protect and manage your data.</p>
            </div>
        </div>
    </div>
</section>

<section class="pt-80px pb-80px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="policy-container">

                    <h4>1. Information Collection</h4>
                    <p>We collect information you provide directly to us through our contact forms, newsletter
                        sign-ups, and volunteer registration. This may include your name, email address, phone
                        number, and any other details you choose to provide.</p>

                    <h4>2. Use of Information</h4>
                    <p>The information we collect is used solely to respond to your enquiries, provide updates about
                        our campaigns and initiatives, and manage our volunteer network. We do not sell or rent your
                        personal information to third parties.</p>

                    <h4>3. Data Security</h4>
                    <p>We implement a variety of security measures to maintain the safety of your personal
                        information when you enter, submit, or access your details.</p>

                    <h4>4. Third-Party Links</h4>
                    <p>Our website may contain links to social media platforms and other external sites. We are not
                        responsible for the privacy practices or content of these third-party websites.</p>

                    <div class="mt-5 text-center">
                        <a href="index.php" class="btn btn-medium bg-royal-blue text-white btn-rounded">Back to
                            Home</a>
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