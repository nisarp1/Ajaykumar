<?php
/*
Template Name: About Us
*/
get_header(); 
$extra_css = '
    <style>
        :root {
            --royal-blue: #000080;
            --muted-saffron: #FF9933;
            --emerald-green: #138808;
            --alabaster: #FAFAFA;
            --dark-gray: #232323;
            --medium-gray: #717580;
            --white: #ffffff;
        }

        .bg-royal-blue {
            background-color: var(--royal-blue) !important;
        }

        .text-royal-blue {
            color: var(--royal-blue) !important;
        }

        .border-bottom-tricolor {
            border-bottom: 3px solid;
            border-image: linear-gradient(to right, #FF9933 33%, #FFFFFF 33%, #FFFFFF 66%, #138808 66%) 1;
        }

        /* Premium Decor Blobs */
        .decor-blob {
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
            filter: blur(80px);
            opacity: 0.15;
        }

        .blob-1 {
            top: -100px;
            right: -100px;
            background: radial-gradient(circle, var(--royal-blue) 0%, transparent 70%);
        }

        .blob-2 {
            bottom: 20%;
            left: -150px;
            background: radial-gradient(circle, var(--muted-saffron) 0%, transparent 70%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08); /* Changed from 0 15px 35px rgba(0, 0, 0, 0.05) */
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .glass-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 60px rgba(0, 0, 80, 0.12);
            background: rgba(255, 255, 255, 0.85);
            border-color: rgba(0, 0, 128, 0.2);
        }

        .hero-title-gradient {
            background: linear-gradient(135deg, var(--royal-blue) 0%, #0000b3 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Philosophy Redesign Styles */
        .philosophy-title {
            font-size: 3.1rem;
            line-height: 1.2;
            letter-spacing: -1px;
            font-weight: 800;
            color: var(--dark-gray);
        }

        .philosophy-icon-container {
            width: 70px;
            height: 70px;
            min-width: 70px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 10px 25px rgba(0, 0, 80, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .philosophy-feature:hover .philosophy-icon-container {
            transform: scale(1.1);
            box-shadow: 0 15px 35px rgba(0, 0, 80, 0.15);
        }

        .philosophy-badge {
            display: inline-flex;
            align-items: center;
            padding-left: 15px;
            border-left: 5px solid;
            border-image: linear-gradient(to bottom, #FF9933 0%, #FFFFFF 50%, #138808 100%) 1;
        }

        @media (max-width: 767px) {
            .philosophy-title {
                font-size: 2.8rem;
            }
        }

        .milestone-dot {
            width: 14px;
            height: 14px;
            background: #138808;
            border: 2px solid #fff;
            border-radius: 50%;
            position: relative;
            z-index: 5;
            box-shadow: 0 0 0 0 rgba(19, 136, 8, 0.6);
            animation: dot-pulse 2s infinite;
        }

        .milestone-dot::after {
            content: \'\';
            position: absolute;
            top: -8px;
            left: -8px;
            right: -8px;
            bottom: -8px;
            border: 1px solid rgba(19, 136, 8, 0.3);
            border-radius: 50%;
            z-index: -1;
        }

        @keyframes dot-pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(19, 136, 8, 0.6);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(19, 136, 8, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(19, 136, 8, 0);
            }
        }

        .milestone-line {
            position: absolute;
            top: 67px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(19, 136, 8, 0.2) 15%, rgba(19, 136, 8, 0.2) 85%, rgba(0, 0, 0, 0) 100%);
            z-index: 1;
        }

        .hero-horizontal-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0, 0, 128, 0.9) 0%, rgba(0, 0, 128, 0.5) 35%, rgba(0, 0, 128, 0.2) 50%, transparent 70%);
            z-index: 0;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-auto-rows: 1fr;
            gap: 30px;
        }

        @media (max-width: 991px) {
            .bento-grid {
                grid-template-columns: 1fr;
                grid-auto-rows: auto;
            }
        }
    </style>
';
echo $extra_css;
?>

<!-- start page title -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/new/new/page-banners/About.jpg'); background-position: center center;">
    <!-- background decor moved inside overflow-hidden section -->
    <div class="decor-blob blob-1"></div>
    <div class="decor-blob blob-2"></div>
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-light bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span
                    class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Our
                    Legacy & Vision</span>
                <h1 class="text-white alt-font fw-700 ls-minus-2px mb-25px"
                    style="font-size: 4rem; line-height: 4.2rem;">
                    A Legacy of Service.<br>A Vision for Bagalkot.
                </h1>
                <p class="fs-20 text-white opacity-8 mb-35px w-80 lg-w-100 fw-300">
                    Shri Ajay Kumar Sarnaik is a distinguished political leader and veteran administrator with a legacy of service spanning over four decades. Dedicated to the socio-economic advancement of Karnataka.
                </p>
            </div>
        </div>
    </div>
    <div class="image-caption hero-caption bottom-40px">
        <i class="fa-solid fa-quote-left"></i> A Legacy of Trust & Development
    </div>
    <div class="down-section text-center position-absolute bottom-30px start-50 translate-middle-x z-index-1">
        <a href="#about-philosophy" class="section-link text-white opacity-5 hover-opacity-100">
            <i class="bi bi-chevron-down fs-30"></i>
        </a>
    </div>
</section>
<!-- end hero section -->

<!-- start philosophy section -->
<section id="about-philosophy" class="pt-100px pb-100px bg-alabaster overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-50px"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">The Philosophy</span>
                <h2 class="alt-font text-royal-blue fw-600 mb-20px ls-minus-1px" style="font-size: 3.5rem; line-height: 1.1;">Building a Resilient,<br>Cooperative Society.</h2>
                <div class="fancy-underline border-bottom-tricolor mb-35px" style="width: 100px;"></div>
                <p class="fs-19 lh-34 text-dark-gray opacity-8 mb-45px w-90 lg-w-100">
                    Born on May 12, 1956, in Bagalkot, Shri Sarnaik’s journey is rooted in the soil of North Karnataka. An alumnus of the prestigious Sainik School, Bijapur, he brings a disciplined and visionary approach to public life, characterized by a commitment to grassroots development and sports excellence.
                </p>
                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-md-6 philosophy-feature">
                        <div class="d-flex align-items-center">
                            <div class="philosophy-icon-container me-4">
                                <i class="bi bi-check2-circle text-emerald-green fs-35"></i>
                            </div>
                            <div>
                                <h6 class="fw-800 text-dark-gray mb-1 fs-18">Integrity First</h6>
                                <p class="fs-15 mb-0 opacity-7">Unblemished record for 3+ decades.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-md-6 philosophy-feature">
                        <div class="d-flex align-items-center">
                            <div class="philosophy-icon-container me-4">
                                <i class="bi bi-people text-muted-saffron fs-30"></i>
                            </div>
                            <div>
                                <h6 class="fw-800 text-dark-gray mb-1 fs-18">People Driven</h6>
                                <p class="fs-15 mb-0 opacity-7">Grassroots connection power.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-8 lg-ps-15px"
                data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
                <div class="position-relative">
                    <div class="image-wrapper rounded-20px overflow-hidden box-shadow-extra-large position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/new/about-about.jpg" class="w-100" alt="About Ajaykumar Sarnaik">
                        <div class="image-caption bottom-20px left-20px">
                            <i class="fa-solid fa-handshake"></i> Championing People's Vision
                        </div>
                    </div>
                    <div class="position-absolute bottom-minus-40px right-minus-40px d-none d-lg-block">
                        <div class="bg-royal-blue p-40px border-radius-15px text-white text-center box-shadow-extra-large"
                            style="border: 1px solid rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                            <span class="fs-70 fw-800 d-block mb-0 lh-1">30+</span>
                            <span class="fs-13 text-uppercase fw-700 ls-2px opacity-8">Years of Service</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end philosophy section -->

<!-- start vision & mission section (Bento Grid) -->
<section class="bg-white pt-100px pb-100px position-relative overflow-hidden">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center"
                data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">The Foundation</span>
                <h2 class="alt-font text-royal-blue fw-700 ls-minus-1px mb-0" style="font-size: 3.5rem; line-height: 1.1;">Vision, Mission & Goals</h2>
                <p class="fs-18 opacity-7 mt-3">Our roadmap for a stronger Bagalkot and a prosperous Karnataka.</p>
            </div>
        </div>
        <div class="bento-grid"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

            <!-- Row 1: Vision -->
            <div class="glass-card p-5 d-flex flex-column bg-alabaster border-top-tricolor h-100">
                <i class="bi bi-eye text-muted-saffron fs-45 mb-25px"></i>
                <h4 class="alt-font fw-800 text-dark-gray mb-20px">The Vision</h4>
                <p class="fs-17 opacity-8 mb-0 lh-30">Balancing rural strengths with modern infrastructure, education, and economic resilience to ensure development reaches the last household.</p>
            </div>

            <!-- Row 1: Mission -->
            <div
                class="glass-card p-5 d-flex flex-column bg-royal-blue text-white overflow-hidden position-relative border-0 shadow-lg h-100">
                <div class="position-absolute right-minus-20px top-minus-20px opacity-1">
                    <i class="bi bi-bullseye" style="font-size: 180px;"></i>
                </div>
                <div class="position-relative z-index-1">
                    <span class="fs-13 fw-700 text-uppercase ls-2px mb-15px d-block opacity-7">The Mission</span>
                    <h4 class="alt-font fw-800 mb-20px text-white">Empowering Rural Karnataka.</h4>
                    <p class="fs-16 lh-28 opacity-8 mb-0">
                        To ensure that every farmer stands empowered, every youth finds opportunity, and every citizen's voice shapes governance.
                    </p>
                </div>
            </div>

            <!-- Row 2: Youth -->
            <div class="glass-card p-5 d-flex flex-column border-0 bg-white shadow-sm border-radius-15px h-100">
                <i class="bi bi-trophy text-emerald-green fs-45 mb-25px"></i>
                <h4 class="alt-font fw-800 text-dark-gray mb-20px">Youth Empowerment</h4>
                <p class="fs-17 opacity-8 mb-0 lh-30">Building infrastructure and systems that allow Karnataka's youth to compete nationally and globally through world-class facilities.</p>
            </div>

            <!-- Row 2: Infrastructure -->
            <div class="glass-card p-5 d-flex flex-column bg-alabaster border-0 h-100">
                <i class="bi bi-signpost-split text-royal-blue fs-45 mb-25px"></i>
                <h4 class="alt-font fw-800 text-dark-gray mb-20px">Infrastructure</h4>
                <p class="fs-17 opacity-8 mb-0 lh-30">Modernizing agriculture through irrigation justice, credit accessibility, and knowledge-driven farming for prosperity.</p>
            </div>

        </div>
    </div>
</section>
<!-- end vision & mission section -->

<!-- start biography section -->
<section id="biography" class="bg-alabaster pt-100px pb-80px overflow-hidden position-relative">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
/* ═══════════════════════════════════════════
   Milestones of Progress — v2 Scoped Styles
   Scope: #biography only
═══════════════════════════════════════════ */

/* ── Fonts ── */
#biography .mop-heading {
    font-family: 'Playfair Display', Georgia, serif;
    font-weight: 800;
    color: #1a1a5e;
    letter-spacing: -0.5px;
    line-height: 1.15;
}
#biography .mop-eyebrow {
    font-family: 'Inter', sans-serif;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: #1a1a5e;
    display: inline-block;
    padding-bottom: 6px;
    border-bottom: 2px solid;
    border-image: linear-gradient(to right,#FF9933 33%,#138808 33%,#138808 66%,#1a1a5e 66%) 1;
    margin-bottom: 14px;
}

/* ── Four Pillars ── */
#biography .mop-pillars {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    position: relative;
    margin-top: 36px;
    margin-bottom: 0;
}
#biography .mop-pillars::before {
    content: '';
    position: absolute;
    top: 11px;
    left: 12.5%;
    width: 75%;
    height: 2px;
    background: linear-gradient(to right, #e2e2e2, #c8c8c8, #e2e2e2);
    z-index: 0;
}
#biography .mop-pillar {
    position: relative;
    z-index: 1;
    text-align: center;
    padding: 0 12px;
    background: #fafafa;
}
#biography .mop-pillar-dot {
    width: 22px;
    height: 22px;
    border-radius: 50%;
    border: 3px solid #fafafa;
    box-shadow: 0 0 0 2px currentColor, 0 3px 10px rgba(0,0,0,0.12);
    margin: 0 auto 12px;
}
#biography .mop-pillar-label {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 2rem;
    font-weight: 800;
    line-height: 1;
    margin-bottom: 5px;
}
#biography .mop-pillar-sub {
    font-family: 'Inter', sans-serif;
    font-size: 0.75rem;
    color: #666;
    line-height: 1.4;
}

/* ── Tab Card Wrapper ── */
#biography .mop-card {
    background: #fff;
    border: 1px solid #e8e8ee;
    border-radius: 12px;
    box-shadow: 0 4px 24px rgba(26,26,94,0.06);
    overflow: hidden;
    margin-top: 36px;
}

/* ── Tab Nav — stretched grid ── */
#biography .mop-tabs-nav {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    border-bottom: 1.5px solid #ebebf0;
    background: #fafafa;
}
#biography .mop-tab-btn {
    font-family: 'Inter', sans-serif;
    background: none;
    border: none;
    border-bottom: 3px solid transparent;
    padding: 18px 12px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.8px;
    color: #888;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    transition: color 0.22s, border-color 0.22s, background 0.22s;
    text-align: center;
}
#biography .mop-tab-btn:hover {
    color: #1a1a5e;
    background: #f3f4f9;
}
#biography .mop-tab-btn.active {
    color: #1a1a5e;
    border-bottom-color: #f59e0b;
    background: #fff;
    font-weight: 800;
}
#biography .mop-tab-icon {
    width: 15px;
    height: 15px;
    flex-shrink: 0;
    opacity: 0.6;
    transition: opacity 0.2s;
}
#biography .mop-tab-btn.active .mop-tab-icon,
#biography .mop-tab-btn:hover .mop-tab-icon { opacity: 1; }

/* ── Tab Panels & Fade-Slide Animation ── */
@keyframes mop-fadeslide {
    from { opacity: 0; transform: translateY(15px); }
    to   { opacity: 1; transform: translateY(0); }
}
#biography .mop-tab-panel {
    display: none;
    padding: 32px 36px 28px;
}
#biography .mop-tab-panel.active {
    display: block;
    animation: mop-fadeslide 0.4s ease-out both;
}

/* ── Icon colour tokens ── */
#biography .icon-saffron { background: rgba(255,153,51,0.12); color: #d97706; }
#biography .icon-green   { background: rgba(19,136,8,0.12);   color: #138808; }
#biography .icon-blue    { background: rgba(26,26,94,0.12);   color: #1a1a5e; }
#biography .icon-gold    { background: rgba(199,145,0,0.12);  color: #b07d00; }
#biography .icon-teal    { background: rgba(0,121,107,0.12);  color: #00796b; }

/* ── Timeline Rail ── */
#biography .tl-list {
    position: relative;
    padding: 8px 0 0;
    margin: 0;
}
#biography .tl-list::before {
    content: '';
    position: absolute;
    left: 20px;
    top: 30px;
    bottom: 30px;
    width: 2px;
    background: linear-gradient(
        to bottom,
        #f59e0b 0%,
        #f59e0b 20%,
        #1a1a5e 60%,
        rgba(26,26,94,0.15) 100%
    );
    border-radius: 2px;
    z-index: 0;
}

/* ── Timeline Item ── */
#biography .tl-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding-bottom: 22px;
    position: relative;
    cursor: default;
}
#biography .tl-item:last-child { padding-bottom: 0; }

/* ── Node (icon circle on the rail) ── */
#biography .tl-node {
    flex-shrink: 0;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 1;
    box-shadow: 0 0 0 5px #fff, 0 0 0 6px rgba(0,0,0,0.08), 0 3px 10px rgba(0,0,0,0.09);
    transition: transform 0.22s, box-shadow 0.22s;
}
#biography .tl-node svg { width: 16px; height: 16px; }
#biography .tl-item:hover .tl-node {
    transform: scale(1.1);
    box-shadow: 0 0 0 5px #fff, 0 0 0 7px currentColor, 0 6px 20px rgba(0,0,0,0.14);
}

/* ── Body card ── */
#biography .tl-body {
    flex: 1;
    padding: 10px 14px 12px;
    border-radius: 10px;
    border: 1px solid transparent;
    background: transparent;
    transition: background 0.22s, border-color 0.22s, box-shadow 0.22s, transform 0.22s;
    margin-top: 0;
}
#biography .tl-item:hover .tl-body {
    background: #f7f7fd;
    border-color: rgba(245,158,11,0.22);
    box-shadow: 0 2px 18px rgba(26,26,94,0.07);
    transform: translateX(4px);
}

/* ── Year badge (pill) ── */
#biography .tl-year {
    display: inline-block;
    font-family: 'Inter', sans-serif;
    font-size: 0.68rem;
    font-weight: 800;
    letter-spacing: 1.3px;
    text-transform: uppercase;
    color: #d97706;
    background: rgba(245,158,11,0.09);
    border: 1px solid rgba(245,158,11,0.28);
    border-radius: 100px;
    padding: 3px 11px;
    margin-bottom: 7px;
    line-height: 1.5;
}

/* ── Entry text ── */
#biography .tl-title {
    font-family: 'Inter', sans-serif;
    font-size: 0.9375rem;
    font-weight: 600;
    color: #1a1a5e;
    line-height: 1.3;
    margin: 0 0 5px;
}
#biography .tl-desc {
    font-family: 'Inter', sans-serif;
    font-size: 0.875rem;
    font-weight: 400;
    color: #6b6b80;
    line-height: 1.5;
    margin: 0;
}

/* ── Column Divider ── */
#biography .mop-col-divider {
    border-left: 1px solid #ebebf0;
    padding-left: 24px;
}

/* ── Infrastructure Highlight Card ── */
#biography .mop-highlight {
    background: linear-gradient(135deg, #1a1a5e 0%, #24247a 100%);
    border-radius: 10px;
    padding: 18px 20px;
    color: #fff;
    display: flex;
    align-items: flex-start;
    gap: 14px;
    margin-top: 12px;
    box-shadow:
        0 8px 32px rgba(26,26,94,0.30),
        0 0 0 1px rgba(255,255,255,0.08),
        inset 0 1px 0 rgba(255,255,255,0.1);
}
#biography .mop-highlight-icon-wrap {
    flex-shrink: 0;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: rgba(245,158,11,0.18);
    display: flex;
    align-items: center;
    justify-content: center;
}
#biography .mop-highlight-icon-wrap svg { width: 17px; height: 17px; color: #f59e0b; }
#biography .mop-highlight-label {
    font-family: 'Inter', sans-serif;
    font-size: 0.62rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: #f59e0b;
    margin-bottom: 4px;
    display: block;
}
#biography .mop-highlight-body {
    font-family: 'Inter', sans-serif;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.55;
    color: rgba(255,255,255,0.85);
    margin: 0;
}

/* ── Mobile Responsive ── */
@media (max-width: 767px) {
    #biography .mop-pillars { grid-template-columns: repeat(2, 1fr); gap: 16px 0; }
    #biography .mop-pillars::before { display: none; }
    #biography .mop-pillar-label { font-size: 1.6rem; }
    #biography .mop-tabs-nav {
        display: flex;
        grid-template-columns: unset;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        border-bottom: none;
        background: #fff;
        padding: 12px 16px;
        gap: 8px;
    }
    #biography .mop-tabs-nav::-webkit-scrollbar { display: none; }
    #biography .mop-tab-btn {
        flex-shrink: 0;
        border: 1.5px solid #e0e0ea;
        border-bottom-width: 1.5px;
        border-radius: 20px;
        padding: 8px 16px;
        font-size: 0.7rem;
        white-space: nowrap;
        background: #f5f5fa;
    }
    #biography .mop-tab-btn.active {
        background: #1a1a5e;
        color: #fff;
        border-color: #1a1a5e;
    }
    #biography .mop-tab-btn.active .mop-tab-icon { filter: invert(1); }
    #biography .mop-tab-panel { padding: 20px 16px 16px; }
    #biography .mop-col-divider { border-left: none; padding-left: 0; border-top: 1px solid #ebebf0; padding-top: 16px; margin-top: 8px; }
    #biography .tl-list::before { left: 18px; top: 28px; bottom: 28px; }
    #biography .tl-node { width: 38px; height: 38px; }
    #biography .tl-item { gap: 12px; padding-bottom: 18px; }
    #biography .tl-item:hover .tl-body { transform: none; }
}
</style>

<!-- Watermark -->
<div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center pointer-events-none" style="z-index:0;">
    <h1 class="fw-900 text-nowrap" style="font-size:12vw;opacity:0.03;color:#1a1a5e;letter-spacing:-6px;">ZERO CRIMINAL CASES</h1>
</div>

<div class="container position-relative" style="z-index:1;">

    <!-- ── Section Header ── -->
    <div class="row justify-content-center mb-0">
        <div class="col-lg-7 text-center">
            <span class="mop-eyebrow">A Lifetime of Service</span>
            <h2 class="mop-heading" style="font-size:clamp(2rem,4vw,3rem);margin-bottom:0;">Milestones of Progress</h2>
        </div>
    </div>

    <!-- ── Four Pillars ── -->
    <div class="mop-pillars">
        <div class="mop-pillar">
            <div class="mop-pillar-dot" style="background:#138808;color:#138808;"></div>
            <div class="mop-pillar-label" style="color:#2d2d2d;">Roots</div>
            <p class="mop-pillar-sub">Agriculture<br>&amp; Education</p>
        </div>
        <div class="mop-pillar">
            <div class="mop-pillar-dot" style="background:#f59e0b;color:#f59e0b;"></div>
            <div class="mop-pillar-label" style="color:#1a1a5e;">1998</div>
            <p class="mop-pillar-sub">Member of<br>Parliament</p>
        </div>
        <div class="mop-pillar">
            <div class="mop-pillar-dot" style="background:#1a1a5e;color:#1a1a5e;"></div>
            <div class="mop-pillar-label" style="color:#2d2d2d;">Govt</div>
            <p class="mop-pillar-sub">Minister of<br>Youth &amp; Sports</p>
        </div>
        <div class="mop-pillar">
            <div class="mop-pillar-dot" style="background:#f59e0b;color:#f59e0b;"></div>
            <div class="mop-pillar-label" style="color:#1a1a5e;">Now</div>
            <p class="mop-pillar-sub">Cooperative<br>Leadership</p>
        </div>
    </div>

    <!-- ── Tabbed Component ── -->
    <div class="mop-card">

        <!-- Tab Navigation -->
        <div class="mop-tabs-nav">
            <button class="mop-tab-btn active" data-tab="service">
                <svg class="mop-tab-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                Legacy of Service
            </button>
            <button class="mop-tab-btn" data-tab="leadership">
                <svg class="mop-tab-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
                Current Leadership
            </button>
            <button class="mop-tab-btn" data-tab="honors">
                <svg class="mop-tab-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="8" r="6"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg>
                Honors &amp; Recognition
            </button>
        </div>

        <!-- ── Tab 1: Legacy of Service ── -->
        <div class="mop-tab-panel active" id="mop-tab-service">
            <div class="row g-0">
                <div class="col-lg-6 pe-lg-5">
                    <div class="tl-list">
                        <div class="tl-item">
                            <div class="tl-node icon-saffron">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">1983 &ndash; 1989</span>
                                <p class="tl-title">President, APMC Bagalkot</p>
                                <p class="tl-desc">Led agricultural produce market governance for six years.</p>
                            </div>
                        </div>
                        <div class="tl-item">
                            <div class="tl-node icon-green">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2a10 10 0 0 1 10 10"/><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="10"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">1983 &ndash; 1989</span>
                                <p class="tl-title">Member, Karnataka State Agriculture Marketing Board</p>
                                <p class="tl-desc">Served on the state board overseeing agriculture marketing policy and farmer welfare.</p>
                            </div>
                        </div>
                        <div class="tl-item">
                            <div class="tl-node icon-blue">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 20V10"/><path d="M12 20V4"/><path d="M6 20v-6"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">1989 &amp; 1994</span>
                                <p class="tl-title">Elected MLA &mdash; Bagalkot</p>
                                <p class="tl-desc">Two consecutive terms representing the people of Bagalkot constituency.</p>
                            </div>
                        </div>
                        <div class="tl-item">
                            <div class="tl-node icon-green">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2z"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">1994</span>
                                <p class="tl-title">Minister of State &mdash; Youth Affairs &amp; Sports</p>
                                <p class="tl-desc">Transformed Karnataka's sporting landscape; organized the National Games in Bangalore.</p>
                            </div>
                        </div>
                        <div class="tl-item">
                            <div class="tl-node icon-blue">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">1994 &ndash; 2002</span>
                                <p class="tl-title">President, Karnataka State Olympic Association</p>
                                <p class="tl-desc">Eight-year tenure elevating Karnataka's Olympic sports ecosystem.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4 mop-col-divider">
                    <div class="tl-list">
                        <div class="tl-item">
                            <div class="tl-node icon-teal">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">1996</span>
                                <p class="tl-title">VP, Indian Olympic Association</p>
                                <p class="tl-desc">Represented India in official capacity at the <strong style="color:#1a1a5e;">Atlanta &amp; Sydney Olympics</strong> and the <strong style="color:#1a1a5e;">Asian Games, Bangkok</strong>.</p>
                            </div>
                        </div>
                        <div class="tl-item">
                            <div class="tl-node icon-saffron">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 11l19-9-9 19-2-8-8-2z"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">1998</span>
                                <p class="tl-title">Member of Parliament &mdash; 12th Lok Sabha</p>
                                <p class="tl-desc">Elected from Bagalkot; brought rural Karnataka's voice to the national stage.</p>
                            </div>
                        </div>
                        <div class="tl-item">
                            <div class="tl-node icon-gold">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">Since 2005</span>
                                <p class="tl-title">Director, BDCC Bank Ltd., Bagalkot</p>
                                <p class="tl-desc">Long-standing board member guiding cooperative banking strategy for rural North Karnataka.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mop-highlight" style="margin-top:24px;">
                        <div class="mop-highlight-icon-wrap">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
                        </div>
                        <div>
                            <span class="mop-highlight-label">Infrastructure Milestone</span>
                            <p class="mop-highlight-body">Renovation of Kanteerava Stadium &amp; creation of world-class sports facilities in Bangalore &amp; Mysore &mdash; a lasting legacy in India's sporting infrastructure.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── Tab 2: Current Leadership ── -->
        <div class="mop-tab-panel" id="mop-tab-leadership">
            <div class="row g-0">
                <div class="col-lg-6 pe-lg-5">
                    <div class="tl-list">
                        <div class="tl-item">
                            <div class="tl-node icon-blue">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">Since 2012</span>
                                <p class="tl-title">President &mdash; The BDCC Bank Ltd., Bagalkot</p>
                                <p class="tl-desc">Steering one of North Karnataka's most impactful cooperative banks; democratising credit access for farming families.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4 mop-col-divider">
                    <div class="tl-list">
                        <div class="tl-item">
                            <div class="tl-node icon-green">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">Ongoing</span>
                                <p class="tl-title">Chairman &mdash; Fruit Growers Cooperative Society Ltd., Kaladagi</p>
                                <p class="tl-desc">Championing horticulture cooperatives and market linkages for fruit farmers across the Bagalkot district.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── Tab 3: Honors & Recognition ── -->
        <div class="mop-tab-panel" id="mop-tab-honors">
            <div class="row g-0">
                <div class="col-lg-6 pe-lg-5">
                    <div class="tl-list">
                        <div class="tl-item">
                            <div class="tl-node icon-gold">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="8" r="6"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">1995</span>
                                <p class="tl-title">Best Horticulturist Award</p>
                                <p class="tl-desc">Conferred by the Government of Karnataka for outstanding contribution to horticulture development.</p>
                            </div>
                        </div>
                        <div class="tl-item">
                            <div class="tl-node icon-blue">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">1998 &ndash; 1999</span>
                                <p class="tl-title">Member, Indian Delegation to the United Nations</p>
                                <p class="tl-desc">Represented India at the United Nations, carrying the aspirations of rural Karnataka to the global stage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4 mop-col-divider">
                    <div class="tl-list">
                        <div class="tl-item">
                            <div class="tl-node icon-green">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">1995 &ndash; 96</span>
                                <p class="tl-title">Best Taluka Panchayat Award &mdash; Bagalkot</p>
                                <p class="tl-desc">Bagalkot Taluka Panchayat honoured as the best in Karnataka during his MLA tenure.</p>
                            </div>
                        </div>
                        <div class="tl-item">
                            <div class="tl-node icon-teal">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 11l19-9-9 19-2-8-8-2z"/></svg>
                            </div>
                            <div class="tl-body">
                                <span class="tl-year">International</span>
                                <p class="tl-title">Global Sports Ambassador</p>
                                <p class="tl-desc">Visited Germany, Holland, Sweden, England, USA, Australia and more as official representative of the Karnataka State Olympic Association.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- end mop-card -->

</div><!-- end container -->

<script>
(function () {
    var btns   = document.querySelectorAll('#biography .mop-tab-btn');
    var panels = document.querySelectorAll('#biography .mop-tab-panel');

    btns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            btns.forEach(function (b) { b.classList.remove('active'); });
            panels.forEach(function (p) {
                p.classList.remove('active');
                p.style.display = 'none';
            });
            btn.classList.add('active');
            var target = document.getElementById('mop-tab-' + btn.dataset.tab);
            if (target) {
                target.style.display = 'block';
                void target.offsetWidth;
                target.classList.add('active');
            }
        });
    });
})();
</script>

</section>
<!-- end biography section -->

<!-- start north karnataka focus section -->
<section class="bg-white pt-100px pb-100px overflow-hidden">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Left: Content -->
            <div class="col-lg-6 md-mb-50px"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-muted-saffron text-uppercase ls-1px mb-10px">North Karnataka Focus</span>
                <h2 class="alt-font text-dark-gray fw-700 ls-minus-1px mb-15px" style="font-size: 3.5rem; line-height: 1.1;">
                    Heritage, Prosperity &amp; <em>People's Voice</em>
                </h2>
                <p class="fs-18 opacity-7 mb-50px lh-32">A structured approach to transforming Bagalkot into a model of sustainable development, cooperative strength, and cultural pride.</p>

                <!-- Feature 1 -->
                <div class="d-flex align-items-start mb-35px philosophy-feature">
                    <div class="philosophy-icon-container me-4 flex-shrink-0">
                        <i class="bi bi-droplet-half text-royal-blue fs-28"></i>
                    </div>
                    <div>
                        <h5 class="alt-font fw-700 text-dark-gray mb-10px">Upper Krishna Project</h5>
                        <p class="fs-16 opacity-7 mb-0 lh-28">Advocating for just compensation and full rehabilitation for every family displaced by the Upper Krishna Project Phase 3, ensuring no farmer is left behind.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="d-flex align-items-start mb-35px philosophy-feature">
                    <div class="philosophy-icon-container me-4 flex-shrink-0">
                        <i class="bi bi-bank text-muted-saffron fs-28"></i>
                    </div>
                    <div>
                        <h5 class="alt-font fw-700 text-dark-gray mb-10px">Cooperative Economy</h5>
                        <p class="fs-16 opacity-7 mb-0 lh-28">Strengthening sugarcane farmer cooperatives and modernizing the DCC Bank to deliver accessible credit and fair pricing across the region.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="d-flex align-items-start philosophy-feature">
                    <div class="philosophy-icon-container me-4 flex-shrink-0">
                        <i class="bi bi-signpost-2 text-emerald-green fs-28"></i>
                    </div>
                    <div>
                        <h5 class="alt-font fw-700 text-dark-gray mb-10px">Rural Connectivity</h5>
                        <p class="fs-16 opacity-7 mb-0 lh-28">Expanding all-weather roads, digital infrastructure, and healthcare access to every village in Bagalkot for inclusive and lasting growth.</p>
                    </div>
                </div>
            </div>

            <!-- Right: Dual Image Composition -->
            <div class="col-lg-6"
                data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
                <div class="position-relative" style="padding-bottom: 140px;">
                    <!-- Main Image -->
                    <div class="overflow-hidden border-radius-24px box-shadow-extra-large position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/new/bagalkot.jpg" class="w-100 hover-scale" alt="Bagalkot District" data-no-retina="">
                        <div class="image-caption bottom-20px left-20px">
                            <i class="fa-solid fa-location-dot"></i> Bagalkot, North Karnataka
                        </div>
                    </div>
                    <!-- Overlapping Map Card -->
                    <div class="position-absolute d-none d-lg-block"
                        style="bottom: -80px; left: 30px; width: 460px; z-index: 9;">
                        <div class="overflow-hidden border-radius-15px box-shadow-extra-large position-relative"
                            style="border: 5px solid #fff;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/new/map-bagalkot.jpg" class="w-100 d-block" alt="Bagalkot District Map" data-no-retina="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end north karnataka focus section -->

<!-- start core sectors section -->
<section class="bg-white pt-100px pb-100px overflow-hidden">
    <div class="container">
        <div class="row justify-content-center mb-5 md-mb-30px">
            <div class="col-lg-8 text-center" data-anime='{ "translateY" : [30, 0], "opacity" :
                [0,1], "duration" : 600, "easing" : "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">Core Impact</span>
                <h2 class="alt-font text-royal-blue fw-600 mb-0 ls-minus-1px" style="font-size: 3.5rem; line-height: 1.1;">Driving Growth Across Diverse Sectors.</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 g-4" data-anime=\'{ "el" : "childs" , "translateY" : [30, 0], "opacity"
            : [0,1], "duration" : 600, "delay" : 200, "staggervalue" : 200, "easing" : "easeOutQuad" }\'>
            <div class="col">
                <div class="glass-card h-100 p-0 overflow-hidden border-0">
                    <div class="position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/sugar.jpg" class="w-100 h-250px object-fit-cover" alt="Sugar Industry">
                        <div class="image-caption caption-bar">
                            <span><i class="fa-solid fa-wheat-awn"></i> Sustainable Agriculture</span>
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h5 class="alt-font fw-700 text-royal-blue mb-10px">Agriculture & Sugar Industry</h5>
                        <p class="fs-15 opacity-7 mb-0">Championing the rights of sugarcane farmers and modernizing
                            the sugar cooperative sector for better returns and stability.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="glass-card h-100 p-0 overflow-hidden border-0">
                    <div class="position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/new/Financial%20Inclusion.jpg" class="w-100 h-250px object-fit-cover"
                            alt="Cooperative Banking">
                        <div class="image-caption caption-bar">
                            <span><i class="fa-solid fa-building-columns"></i> Financial Inclusion</span>
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h5 class="alt-font fw-700 text-royal-blue mb-10px">Financial Inclusion</h5>
                        <p class="fs-15 opacity-7 mb-0">Transforming DCC Banks into modern digital financial hubs
                            that support small-scale entrepreneurs and rural families.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="glass-card h-100 p-0 overflow-hidden border-0">
                    <div class="position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/new/Youth%20%26%20Social%20Progress.jpg" class="w-100 h-250px object-fit-cover" alt="Youth Empowerment">
                        <div class="image-caption caption-bar">
                            <span><i class="fa-solid fa-bolt"></i> Youth Empowerment</span>
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h5 class="alt-font fw-700 text-royal-blue mb-10px">Youth & Social Progress</h5>
                        <p class="fs-15 opacity-7 mb-0">Implementing state-of-the-art sports facilities and
                            vocational training centers to make youth self-reliant and competitive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end core sectors section -->


<?php get_footer(); ?>
