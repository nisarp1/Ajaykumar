<?php
$page_title = "Maintenance Mode - Ajaykumar Sarnaik";
$page_description = "Our website is currently undergoing maintenance. We will be back soon!";
$extra_css = '
    <style>
        .maintenance-hero {
            background-image: url(\'images/maintenance-bg.jpg\');
        }
    </style>
';

include 'parts/html-header.php';
?>
<section class="cover-background full-screen ps-8 pe-8 sm-ps-6 sm-pe-6 overflow-auto maintenance-hero">
    <div class="container-fluid h-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-lg-6 col-xl-5 text-center text-lg-start md-mb-30px"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <a href="index.php" class="mb-12 md-mb-50px d-inline-block text-decoration-none">
                    <span class="fs-24 fw-700 text-white text-nowrap alt-font">Ajaykumar
                        Sarnaik <img src="images/new/hand.png" alt=""
                            class="ms-2 position-relative bg-white rounded-circle p-5px"
                            style="height: 45px; max-height: 45px !important; top: -3px;"></span>
                </a>
                <h2 class="text-white fw-600 mb-20px ls-minus-1px">The website is in maintenance mode.</h2>
                <p class="text-white opacity-8 w-75 xl-w-100 mb-30px">We have almost done all the technical improvements
                    and will be back very soon. Thank you for your patience!</p>
                <div class="d-inline-block w-100 newsletter-style-03 position-relative mb-7">
                    <form action="email-templates/subscribe-newsletter.php" method="post"
                        class="position-relative w-70 xl-w-100">
                        <div class="position-relative">
                            <input
                                class="input-large bg-white border-color-transparent w-100 border-radius-5px box-shadow-extra-large form-control required"
                                type="email" name="email" placeholder="Enter your email address" />
                            <input type="hidden" name="redirect" value="">
                            <button
                                class="btn btn-large text-dark-gray ls-0px text-transform-none left-icon submit fw-700"
                                aria-label="submit"><i
                                    class="icon feather icon-feather-mail icon-small align-middle"></i><span>Notify
                                    me</span></button>
                        </div>
                        <div class="form-results border-radius-100px mt-15px p-15px fs-15 w-100 text-center d-none">
                        </div>
                    </form>
                </div>
                <div class="elements-social social-icon-style-08">
                    <ul class="small-icon light">
                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a class="twitter" href="https://twitter.com" target="_blank"><i
                                    class="fa-brands fa-twitter"></i></a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com" target="_blank"><i
                                    class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a class="instagram" href="https://www.instagram.com" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-7 text-center"
                data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 150, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <img src="https://placehold.co/936x828" class="animation-float" alt="">
            </div>
        </div>
    </div>
</section>
<?php
include 'parts/html-footer.php';
?>