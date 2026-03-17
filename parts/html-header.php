<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>
        <?php echo isset($page_title) ? $page_title : 'Ajaykumar Sarnaik - Profile'; ?>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Ajaykumar Sarnaik">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="<?php echo isset($page_description) ? $page_description : 'Official profile of Ajaykumar Sarnaik - Former Minister of Youth & Sports, President of Bagalkot DCC Bank, and Former MP. Dedicated to Clean Governance and Rural Development.'; ?>">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="css/vendors.min.css" />
    <link rel="stylesheet" href="css/icon.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="demos/beauty-salon/beauty-salon.css" />

    <?php if (isset($extra_css))
    echo $extra_css; ?>

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

        /* Remove the scale-out dot if it feels unnecessary */
        .dropdown-item::before {
            display: none;
        }

        /* Animation Fallback: Ensure content is visible if JS fails or is slow */
        /* Use high specificity without !important so JS inline styles can still override */
        body [data-anime]:not(.appear):not(.animating) {
            opacity: 1;
        }

        /* Allow the animation library to take over if it adds the .appear or .animating class */
        [data-anime].appear,
        [data-anime].animating {
            opacity: 1;
            /* JS will handle actual transitions via inline styles */
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

        /* Full width bar style for grid items */
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

        .image-caption.caption-bar::after {
            left: 0;
            border-bottom-right-radius: 0;
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

        /* Container alignment for floating captions in overflow sections */
        @media (min-width: 1200px) {
            .statesman-caption {
                left: calc((100vw - 1140px) / 2 + 15px + 5vw) !important; /* Start of container + 5vw to compensate for -5vw margin */
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
    </style>
</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#2E3844">