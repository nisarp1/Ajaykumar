<?php
$page_title = "Sitemap - Ajaykumar Sarnaik";
$page_description = "Official sitemap for the Ajaykumar Sarnaik website. Explore all pages and sections of the leader\'s profile.";
$extra_css = '
    <style>
        :root {
            --royal-blue: #000080;
            --muted-saffron: #FF9933;
            --emerald-green: #138808;
            --white: #ffffff;
        }

        .sitemap-list {
            list-style: none;
            padding: 0;
        }

        .sitemap-list li {
            margin-bottom: 20px;
            padding-left: 30px;
            position: relative;
        }

        .sitemap-list li::before {
            content: "\F138";
            font-family: "bootstrap-icons";
            position: absolute;
            left: 0;
            top: 0;
            color: var(--royal-blue);
            font-size: 18px;
        }

        .sitemap-list a {
            font-size: 18px;
            font-weight: 600;
            color: var(--dark-gray);
            transition: all 0.3s ease;
        }

        .sitemap-list a:hover {
            color: var(--royal-blue);
            padding-left: 10px;
        }

        .sitemap-list ul {
            list-style: none;
            padding-left: 30px;
            margin-top: 10px;
        }

        .sitemap-list ul li {
            margin-bottom: 10px;
            font-size: 15px;
            opacity: 0.8;
        }

        .sitemap-list ul li::before {
            content: "-";
            font-family: inherit;
        }

        .sitemap-card {
            background: #fff;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.05);
            border-top: 5px solid var(--royal-blue);
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
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Site Architecture</span>
                <h1 class="alt-font fw-700 text-white ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">Website Sitemap</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Navigate through the entire digital presence of Ajaykumar Sarnaik.</p>
            </div>
        </div>
    </div>
</section>

<!-- Content -->
<section class="pt-80px pb-100px bg-alabaster">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="sitemap-card">
                    <div class="row g-5">
                        <div class="col-md-6">
                            <ul class="sitemap-list">
                                <li><a href="index.php">Home Page</a></li>
                                <li><a href="about-us.php">About Me</a>
                                    <ul>
                                        <li>Introduction</li>
                                        <li>Mission & Vision Statement</li>
                                    </ul>
                                </li>
                                <li><a href="political-journey.php">Political Journey</a></li>
                                <li><a href="campaigns.php">Campaigns</a>
                                    <ul>
                                        <li>Events</li>
                                    </ul>
                                </li>
                                <li><a href="associations.php">Associations</a>
                                    <ul>
                                        <li>Bagalkot DCC Bank</li>
                                        <li>Farmers\' School</li>
                                    </ul>
                                </li>
                                <li><a href="bagalkot.php">Bagalkot Constituency</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="sitemap-list">
                                <li><a href="join-movement.php">Join the MOVEMENT</a></li>
                                <li><a href="voice-of-people.php">Voice of the People</a>
                                    <ul>
                                        <li>Online Form</li>
                                        <li>Polls & Discussion</li>
                                    </ul>
                                </li>
                                <li><a href="volunteer.php">Volunteer</a>
                                    <ul>
                                        <li>All round Development</li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                <li><a href="disclaimer.php">Disclaimers</a></li>
                            </ul>
                        </div>
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