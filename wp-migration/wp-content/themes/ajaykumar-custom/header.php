<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Ajaykumar Sarnaik">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    
    <!-- favicon icon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/new/favicon/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/new/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/new/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/new/favicon/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/images/new/favicon/favicon-large.png">

    <!-- SEO & Social Media Meta Tags -->
    <meta name="description" content="Ajaykumar Sarnaik - Official Website. Dedicated to the vision of development, community empowerment, and public service in Bagalkot.">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url( home_url( add_query_arg( null, null ) ) ); ?>">
    <meta property="og:title" content="<?php echo wp_get_document_title(); ?>">
    <meta property="og:description" content="Official website of Ajaykumar Sarnaik. Dedicated to the vision of development, community empowerment, and public service in Bagalkot.">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/new/favicon/og.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo esc_url( home_url( add_query_arg( null, null ) ) ); ?>">
    <meta property="twitter:title" content="<?php echo wp_get_document_title(); ?>">
    <meta property="twitter:description" content="Official website of Ajaykumar Sarnaik. Dedicated to the vision of development, community empowerment, and public service in Bagalkot.">
    <meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/new/favicon/og.png">
    
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        .tricolor-border {
            border-bottom: 4px solid transparent;
            border-image: linear-gradient(to right, #FF9933 33%, #FFFFFF 33%, #FFFFFF 66%, #138808 66%) 1;
        }

        .btn-congress-green {
            background-color: var(--congress-green);
            color: #fff;
        }

        .btn-congress-green:hover {
            background-color: #0e6b05;
            color: #fff;
        }

        .btn-royal-blue {
            background-color: var(--royal-blue);
            color: #fff;
        }

        .card-tricolor-hover {
            position: relative;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            transform: translateY(0);
            border-bottom: 0px solid transparent;
        }

        .card-tricolor-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
        }

        .card-tricolor-hover::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #FF9933 33.33%, #FFFFFF 33.33%, #FFFFFF 66.66%, #138808 66.66%);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
            z-index: 2;
        }

        .card-tricolor-hover:hover::after {
            transform: scaleX(1);
        }

        .btn-tricolor-hover:hover {
            color: var(--royal-blue) !important;
        }

        .btn-tricolor-hover:hover .btn-text,
        .btn-tricolor-hover:hover i {
            color: var(--royal-blue) !important;
        }

        /* Dropdown Styling - Simple & Flowy Hover */
        @media (min-width: 992px) {
            .navbar-nav li.dropdown:hover > .dropdown-menu {
                display: block;
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
                pointer-events: auto;
            }

            .navbar-nav li.dropdown:hover > .nav-link {
                color: var(--royal-blue) !important;
            }

            /* Overriding massive 60px padding and detatched position */
            .navbar .navbar-nav .dropdown .dropdown-menu {
                display: block !important;
                opacity: 0;
                visibility: hidden;
                transform: translateY(10px);
                transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s;
                pointer-events: none;
                border: none;
                box-shadow: 0 10px 30px rgba(0, 0, 80, 0.1);
                border-radius: 8px;
                padding: 15px 0 !important; /* Fix for the 60px gap */
                background: #fff;
                margin-top: 2px; /* Pulls it closer to the navbar */
                border-top: 3px solid var(--royal-blue);
                min-width: 220px;
            }

            /* Invisible bridge to prevent menu closing when moving mouse */
            .navbar-nav .dropdown-menu::before {
                content: '';
                position: absolute;
                top: -15px;
                left: 0;
                width: 100%;
                height: 15px;
            }
        }

        /* Minimalistic Dropdown Chevron Icon */
        .dropdown-toggle::after {
            content: "" !important;
            display: inline-block !important;
            width: 7px;
            height: 7px;
            border-right: 1.2px solid currentColor;
            border-bottom: 1.2px solid currentColor;
            border-left: 0 !important;
            border-top: 0 !important;
            transform: rotate(45deg);
            transition: transform 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            vertical-align: middle;
            margin-left: 10px;
            margin-top: -4px;
            opacity: 0.6;
        }

        .nav-item.dropdown:hover > .dropdown-toggle::after {
            transform: rotate(225deg);
            margin-top: 2px;
            opacity: 1;
        }

        /* Simplified and cleaner dropdown items */
        .dropdown-item {
            color: var(--royal-blue) !important;
            font-size: 15px !important;
            font-weight: 500 !important;
            padding: 10px 25px !important;
            transition: all 0.2s ease !important;
            background: transparent !important;
            border: none !important;
        }

        .dropdown-item:hover {
            color: var(--royal-blue) !important;
            background-color: rgba(0, 0, 128, 0.04) !important;
            padding-left: 30px !important;
        }

        /* Brand Styled Image Captions */
        .image-caption {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 10px 18px;
            border-radius: 4px;
            border-left: 5px solid var(--royal-blue);
            font-family: inherit;
            font-size: 9px;
            font-weight: 700;
            color: var(--royal-blue);
            z-index: 10;
            box-shadow: 0 8px 25px rgba(0, 0, 60, 0.1);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            line-height: 1;
            display: inline-flex;
            align-items: center;
            max-width: calc(100% - 40px);
        }

        .image-caption.caption-bar {
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            max-width: none;
            display: flex;
            justify-content: space-between;
            padding: 15px 20px;
            border-radius: 0;
            border-left: none;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.85);
            margin: 0;
        }

        .image-caption::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: -5px;
            width: 100%;
            height: 3px;
            background: linear-gradient(to right, #FF9933 33.33%, #FFFFFF 33.33%, #FFFFFF 66.66%, #138808 66.66%);
            border-bottom-right-radius: 4px;
        }

        @media (min-width: 1200px) {
            .statesman-caption {
                left: calc((100vw - 1140px) / 2 + 15px + 5vw) !important;
            }
        }
        @media (min-width: 1400px) {
            .statesman-caption {
                left: calc((100vw - 1320px) / 2 + 15px + 5vw) !important;
            }
        }

            .border-start-tricolor {
            border-left: 5px solid;
            border-image: linear-gradient(to bottom, #FF9933, #FFFFFF, #138808) 1 !important;
            padding-left: 15px;
        }

        /* Navbar Overflow & Kannada Translation Fixes */
        @media (min-width: 992px) {
            .navbar-nav .nav-link {
                padding-left: 12px !important;
                padding-right: 12px !important;
                font-size: 17px !important;
                letter-spacing: -0.2px !important;
                font-weight: 600 !important;
            }
            header .navbar-brand {
                font-size: 21px !important;
            }
            header .navbar-brand img {
                height: 54px !important;
            }
        }

        @media (min-width: 992px) and (max-width: 1399px) {
            .navbar-nav .nav-link {
                padding-left: 9px !important;
                padding-right: 9px !important;
                font-size: 16px !important;
            }
            header .navbar-brand {
                font-size: 20px !important;
            }
        }

        /* Shrink even more when translated to handle longer Kannada strings */
        html.translated-ltr .navbar-nav .nav-link,
        html.translated-rtl .navbar-nav .nav-link {
            padding-left: 7px !important;
            padding-right: 7px !important;
            font-size: 15px !important;
        }

        /* Mobile-Specific: Two-Line Branding and Switcher */
        @media (max-width: 991px) {
            header .navbar-brand {
                white-space: normal !important;
                font-size: 18px !important; 
                display: flex !important;
                align-items: center;
                line-height: 1.1 !important;
                min-width: 140px;
            }

            header .navbar-brand span.name-wrap {
                display: inline-block;
                vertical-align: middle;
            }

            header .navbar-brand span.name-line {
                display: block;
                white-space: nowrap !important;
            }

            .header-icon {
                display: flex !important;
                flex-direction: column !important;
                align-items: flex-end !important;
                line-height: 1.2 !important;
            }

            .header-icon a, 
            .header-icon .gt-link,
            .header-icon #gt-selected {
                display: block !important;
                padding: 0 !important;
                margin: 0 !important;
                text-align: right !important;
                font-size: 15px !important;
                white-space: nowrap !important;
            }

            .header-icon span.opacity-5,
            .header-icon .gt-separator {
                display: none !important;
            }

            .navbar .container-fluid {
                flex-wrap: nowrap !important;
            }
            .header-logo-col {
                flex-grow: 1 !important;
                max-width: none !important;
            }

            /* Force Visibility and Position of Mobile Menu (Unified) */
            #navbarNav.show, 
            .navbar-collapse.show {
                visibility: visible !important;
                display: block !important;
                opacity: 1 !important;
                position: fixed !important;
                top: 0 !important;
                left: 0 !important;
                width: 100% !important;
                height: 100vh !important;
                background-color: #ffffff !important;
                z-index: 100000 !important;
                overflow-y: auto !important;
                padding: 80px 40px 100px 40px !important; /* Spacing for links */
                text-align: left !important;
            }

            #navbarNav.show ul, 
            .navbar-collapse.show ul {
                display: block !important;
                text-align: left !important;
                padding-left: 0 !important;
                margin-bottom: 0 !important;
            }

            #navbarNav.show ul li, 
            .navbar-collapse.show ul li {
                margin: 15px 0 !important;
                display: flex !important;
                flex-direction: column !important;
                align-items: flex-start !important;
                width: 100% !important;
                position: relative !important;
            }

            #navbarNav.show ul li a, 
            .navbar-collapse.show ul li a {
                font-size: 20px !important;
                color: var(--royal-blue) !important;
                font-weight: 700 !important;
                display: block !important;
                padding: 10px 0 !important;
                line-height: 1.2 !important;
                white-space: normal !important;
                width: 100% !important;
                text-align: left !important;
            }

            /* Fix Mobile Dropdowns - Make them flow vertically */
            #navbarNav.show .dropdown-menu, 
            .navbar-collapse.show .dropdown-menu {
                position: static !important;
                display: block !important;
                float: none !important;
                background-color: transparent !important;
                border: none !important;
                box-shadow: none !important;
                padding: 0 0 0 25px !important; /* Indent sub-links */
                margin-top: 35px !important;
                opacity: 1 !important;
                visibility: visible !important;
                transform: none !important;
            }

            #navbarNav.show .dropdown-menu .dropdown-item, 
            .navbar-collapse.show .dropdown-menu .dropdown-item {
                font-size: 18px !important;
                font-weight: 500 !important;
                color: #555 !important;
                padding: 10px 0 !important;
                text-align: left !important;
            }

            /* Ensure header toggler is visible */
            .navbar-toggler {
                display: flex !important;
                visibility: visible !important;
                opacity: 1 !important;
                padding: 10px !important;
                z-index: 1000000 !important; /* Above everything */
                border: none !important;
                outline: none !important;
            }
            
            .navbar-toggler-line {
                display: block !important;
                width: 25px !important;
                height: 2px !important;
                background-color: #232323 !important;
                margin: 5px 0 !important;
                visibility: visible !important;
            }
        }

        /* Desktop Restoration: Old Style */
        @media (min-width: 992px) {
            header .navbar-brand {
                white-space: nowrap !important;
                display: inline-block !important;
            }
            header .navbar-brand span.name-line {
                display: inline !important;
            }
            header .navbar-brand span.name-line:first-child::after {
                content: " " !important;
            }
            .header-icon {
                display: flex !important;
                flex-direction: row !important;
                align-items: center !important;
            }
            .header-icon a {
                display: inline-block !important;
                margin: 0 5px !important;
            }
        }

        .text-dark-gray {
            color: #232323 !important;
        }
    </style>
    <!-- Animation Fallback: Ensure content is visible if JS fails or is slow -->
    <style>
        body [data-anime]:not(.appear):not(.animating) {
            opacity: 1;
        }
        [data-anime].appear,
        [data-anime].animating {
            opacity: 1;
        }
        /* Super-Aggressive GTranslate Separator - REMOVED for two-line layout */
    </style>
    <script>
        document.documentElement.className += ' no-js';
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- start header -->
    <header>
        <!-- Tricolor Top Line -->
        <div class="w-100 h-5px bg-tricolor-gradient position-absolute top-0 start-0 z-index-999"></div>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg bg-white box-shadow-medium border-bottom-tricolor sticky-header header-appear-down-scroll" data-header-hover="light">
            <div class="container-fluid">
                <div class="col-lg-3 col-auto header-logo-col me-auto">
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <span class="fw-700 text-dark-gray alt-font d-inline-block name-wrap">
                            <span class="name-line">Ajaykumar</span>
                            <span class="name-line">Sarnaik</span>
                        </span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/hand.png" alt="" class="ms-2 position-relative"
                             style="height: 50px; max-height: 50px !important; top: -2px;">
                    </a>
                </div>
                <div class="col-auto d-flex align-items-center ms-auto">
                    <!-- Language Switcher (Visible on Mobile/Tablet only) -->
                    <div class="header-icon d-lg-none me-3">
                         <?php echo do_shortcode('[gtranslate]'); ?>
                    </div>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                </div>
                
                <div class="collapse navbar-collapse justify-content-center col-lg-6" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link text-royal-blue fw-700">Home</a>
                        </li>

                        <!-- About Dropdown -->
                        <li class="nav-item dropdown">
                            <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="nav-link text-royal-blue dropdown-toggle" id="navbarAbout" role="button" aria-expanded="false">About</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarAbout">
                                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About the Leader</a></li>
                                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/about-us/#biography' ) ); ?>">Biography</a></li>
                                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/about-us/#about-philosophy' ) ); ?>">Values & Philosophy</a></li>
                            </ul>
                        </li>

                        <!-- Journey Dropdown -->
                        <li class="nav-item dropdown">
                            <a href="<?php echo esc_url( home_url( '/political-journey/' ) ); ?>" class="nav-link text-royal-blue dropdown-toggle" id="navbarJourney" role="button" aria-expanded="false">Journey</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarJourney">
                                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/political-journey/' ) ); ?>">Political Journey</a></li>
                                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/campaigns/' ) ); ?>">Campaigns & Events</a></li>
                                <!-- Removed Notable Associations and Bagalkot Legacy as requested -->
                            </ul>
                        </li>

                        <!-- Focus Areas -->
                        <li class="nav-item">
                            <a href="<?php echo esc_url( home_url( '/associations/' ) ); ?>" class="nav-link text-royal-blue">Focus Areas</a>
                        </li>

                        <!-- Legislative -->
                        <li class="nav-item">
                            <a href="<?php echo esc_url( home_url( '/bagalkot/' ) ); ?>" class="nav-link text-royal-blue">Legislative</a>
                        </li>

                        <!-- Contact Dropdown -->
                        <li class="nav-item dropdown">
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="nav-link text-royal-blue dropdown-toggle" id="navbarContact" role="button" aria-expanded="false">Contact</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarContact">
                                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get in Touch</a></li>
                                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/join-movement/' ) ); ?>">Join the Movement</a></li>
                                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/volunteer/' ) ); ?>">Volunteer</a></li>
                                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/voice-of-the-people/' ) ); ?>">Voice of the People</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Desktop Language Switcher (Far Right) -->
                <div class="col-lg-3 col-auto d-none d-lg-flex text-end justify-content-end">
                    <div class="header-icon">
                        <?php echo do_shortcode('[gtranslate]'); ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
