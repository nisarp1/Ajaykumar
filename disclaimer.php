<?php
$page_title = "Disclaimer - Ajaykumar Sarnaik";
$page_description = "Official Disclaimer for Ajaykumar Sarnaik\'s profile website.";
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
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden" style="background-image: url('images/new/hero.jpg');">
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1 text-start" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Legal Information</span>
                <h1 class="alt-font fw-700 text-white ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">General Disclaimer</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Official Website of Ajaykumar Sarnaik. Understanding our terms and information accuracy.</p>
            </div>
        </div>
    </div>
</section>

<section class="pt-80px pb-80px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="policy-container">

                    <h4>1. Information Accuracy</h4>
                    <p>The information contained on this website is for general information purposes only. While we
                        endeavour to keep the information up to date and correct, we make no representations or
                        warranties of any kind, express or implied, about the completeness, accuracy, reliability,
                        suitability or availability with respect to the website or the information, products,
                        services, or related graphics contained on the website.</p>

                    <h4>2. Not Legal Advice</h4>
                    <p>Any political or policy views expressed are for informational purposes and should not be
                        construed as legal or financial advice. For specific matters, please consult with the
                        relevant official departments or legal representatives.</p>

                    <h4>3. External Links</h4>
                    <p>Through this website, you are able to link to other websites which are not under the control
                        of the office of Ajaykumar Sarnaik. We have no control over the nature, content and
                        availability of those sites. The inclusion of any links does not necessarily imply a
                        recommendation or endorse the views expressed within them.</p>

                    <h4>4. Official Status</h4>
                    <p>This is the official platform managed by the office of Ajaykumar Sarnaik. Any other websites
                        or social media handles claiming to represent the leader are unofficial unless explicitly
                        listed on our \'Social Media\' page.</p>

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