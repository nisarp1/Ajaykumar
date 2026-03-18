<?php
$page_title = "Search Results - Ajaykumar Sarnaik";
$page_description = "Search results for your query on the official website of Ajaykumar Sarnaik.";

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
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Search Results</span>
                <h1 class="alt-font fw-700 text-white ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">Found for your inquiry.</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Official archive and search findings across the digital platform of Ajaykumar Sarnaik.</p>
            </div>
        </div>
    </div>
</section>

<!-- start section -->
<section class="pt-0 ps-15 pe-15 xl-ps-2 xl-pe-2 lg-ps-2 lg-pe-2 sm-mx-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ul
                    class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                <a href="#"><img src="https://placehold.co/800x570" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pt-30px pb-30px">
                                <span class="fs-13 text-uppercase mb-5px d-block"><a href="#"
                                        class="text-dark-gray text-dark-gray-hover fw-600 categories-text">Business</a><a
                                        href="#" class="blog-date text-dark-gray-hover">26 August 2023</a></span>
                                <a href="#"
                                    class="card-title mb-10px alt-font fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block w-95">Recognizing
                                    the need is the primary condition for design.</a>
                                <p class="mb-10px w-95">Lorem ipsum is simply dummy printing typesetting industry...</p>
                                <a href="#"
                                    class="card-link alt-font fs-12 text-uppercase text-dark-gray text-dark-gray-hover fw-700">More
                                    reading<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- repeat items as needed -->
                    <?php for ($i = 0; $i < 7; $i++): ?>
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                <a href="#"><img src="https://placehold.co/800x570" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pt-30px pb-30px">
                                <span class="fs-13 text-uppercase mb-5px d-block"><a href="#"
                                        class="text-dark-gray text-dark-gray-hover fw-600 categories-text">Political</a><a
                                        href="#" class="blog-date text-dark-gray-hover">25 August 2023</a></span>
                                <a href="#"
                                    class="card-title mb-10px alt-font fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block w-95">Development
                                    initiatives for Bagalkot rural area.</a>
                                <p class="mb-10px w-95">Working towards a better future for the farmers and youth of
                                    Karnataka...</p>
                                <a href="#"
                                    class="card-link alt-font fs-12 text-uppercase text-dark-gray text-dark-gray-hover fw-700">More
                                    reading<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                            </div>
                        </div>
                    </li>
                    <?php
endfor; ?>
                </ul>
            </div>
            <div class="col-12 mt-2 d-flex justify-content-center">
                <ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">
                    <li class="page-item"><a class="page-link" href="#"><i
                                class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                    <li class="page-item active"><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i
                                class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<?php
include 'parts/footer.php';
include 'parts/html-footer.php';
?>