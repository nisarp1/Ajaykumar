<?php
$page_title = "Campaigns - Ajaykumar Sarnaik";
$page_description = "Join Ajaykumar Sarnaik\'s campaigns for a better Bagalkot. Explore upcoming events, rallies, and initiatives for social and economic progress.";
$extra_css = '
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .glass-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 80, 0.12);
            background: rgba(255, 255, 255, 0.85);
        }

        .event-badge {
            display: inline-block;
            background: var(--royal-blue);
            color: #fff;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .floating-date {
            background: #fff;
            padding: 15px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            min-width: 80px;
        }

        .floating-date .day {
            font-size: 28px;
            font-weight: 900;
            color: var(--royal-blue);
            line-height: 1;
            display: block;
        }

        .floating-date .month {
            font-size: 13px;
            font-weight: 700;
            color: var(--muted-saffron);
            text-transform: uppercase;
            margin-top: 5px;
            display: block;
        }
        .btn-register-now {
            border: 1px solid rgba(0, 0, 128, 0.2) !important;
            color: var(--royal-blue) !important;
            transition: all 0.3s ease;
            font-weight: 700;
        }

        .btn-register-now:hover {
            background-color: var(--royal-blue) !important;
            color: #fff !important;
            border-color: var(--royal-blue) !important;
            box-shadow: 0 10px 20px rgba(0, 0, 80, 0.15);
        }
    </style>
';

include 'parts/html-header.php';
include 'parts/header.php';
?>

<!-- Hero -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden" style="background-image: url('images/new/about-title-bg.jpg');">
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Community Action</span>
                <h1 class="alt-font fw-700 text-white ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">The Pulse of the People.</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">Join our movement for a prosperous and self-reliant Bagalkot.</p>
            </div>
        </div>
    </div>
</section>

<!-- Ongoing Campaigns -->
<section class="pt-100px pb-100px bg-alabaster">
    <div class="container">
        <div class="row justify-content-center mb-60px">
            <div class="col-lg-8 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">Active Outreach</span>
                <h2 class="alt-font text-royal-blue fw-700 ls-minus-1px mb-0" style="font-size: 3.5rem; line-height: 1.1;">Our Current Focus</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- Campaign 1 -->
            <div class="col">
                <div class="glass-card p-5 h-100 text-center border-top border-4 border-color-royal-blue">
                    <i class="bi bi-bank text-royal-blue fs-50 mb-25px d-block"></i>
                    <h5 class="fw-800 text-dark-gray mb-15px">The Cooperative Revolution</h5>
                    <p class="fs-16 opacity-7 mb-0">Spearheading massive credit-accessibility drives, ensuring over 1.5 lakh farming families have access to low-interest loans.</p>
                </div>
            </div>
            <!-- Campaign 2 -->
            <div class="col">
                <div class="glass-card p-5 h-100 text-center border-top border-4 border-color-muted-saffron">
                    <i class="bi bi-water text-muted-saffron fs-50 mb-25px d-block"></i>
                    <h5 class="fw-800 text-dark-gray mb-15px">Agricultural Advocacy</h5>
                    <p class="fs-16 opacity-7 mb-0">Fighting for fair compensation (₹35L–₹40L per acre) for families affected by the Upper Krishna Project Phase 3.</p>
                </div>
            </div>
            <!-- Campaign 3 -->
            <div class="col">
                <div class="glass-card p-5 h-100 text-center border-top border-4 border-color-emerald-green">
                    <i class="bi bi-trophy text-emerald-green fs-50 mb-25px d-block"></i>
                    <h5 class="fw-800 text-dark-gray mb-15px">Youth & Sports</h5>
                    <p class="fs-16 opacity-7 mb-0">Identifying and nurturing young rural athletes through modern synthetic tracks and indoor stadia infrastructure.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events -->
<section class="pt-100px pb-100px bg-white">
    <div class="container">
        <div class="row justify-content-center mb-60px">
            <div class="col-lg-8 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">Join the Movement</span>
                <h2 class="alt-font text-royal-blue fw-700 ls-minus-1px mb-4" style="font-size: 3.5rem; line-height: 1.1;">Upcoming Events & Rallies</h2>
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#requestVisitModal" class="btn btn-medium btn-rounded bg-royal-blue text-white shadow-lg mt-15px d-inline-flex align-items-center justify-content-center text-nowrap">Request a Visit <i class="bi bi-calendar3 ms-2"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-lg-5">
                <!-- Event 1 -->
                <div class="glass-card p-4 mb-4 position-relative overflow-hidden"
                    data-anime='{ "translateY": [20, 0], "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                    <div class="row align-items-center">
                        <div class="col-lg-2 text-center md-mb-20px">
                            <div class="floating-date mx-auto">
                                <span class="day">15</span>
                                <span class="month">MAR</span>
                            </div>
                        </div>
                        <div class="col-lg-7 sm-text-center">
                            <span class="event-badge">Public Rally</span>
                            <h4 class="alt-font fw-700 text-royal-blue mb-2">Janata Samvad 2026</h4>
                            <p class="mb-0 fs-17 opacity-8"><i class="bi bi-geo-alt-fill text-muted-saffron me-2"></i>Bagalkot Main Market Square | 10:00 AM Onwards</p>
                        </div>
                        <div class="col-lg-3 text-lg-end sm-mt-20px">
                            <a href="join-movement.php" class="btn btn-small btn-rounded btn-register-now">Register Now</a>
                        </div>
                    </div>
                </div>
                <!-- Event 2 -->
                <div class="glass-card p-4 mb-4 position-relative overflow-hidden"
                    data-anime='{ "translateY": [20, 0], "opacity": [0,1], "duration": 600, "delay": 200, "easing": "easeOutQuad" }'>
                    <div class="row align-items-center">
                        <div class="col-lg-2 text-center md-mb-20px">
                            <div class="floating-date mx-auto">
                                <span class="day">22</span>
                                <span class="month">MAR</span>
                            </div>
                        </div>
                        <div class="col-lg-7 sm-text-center">
                            <span class="event-badge bg-emerald-green">Farmers Meet</span>
                            <h4 class="alt-font fw-700 text-royal-blue mb-2">Agricultural Innovation Summit</h4>
                            <p class="mb-0 fs-17 opacity-8"><i class="bi bi-geo-alt-fill text-muted-saffron me-2"></i>Badami Convention Hall | 02:00 PM</p>
                        </div>
                        <div class="col-lg-3 text-lg-end sm-mt-20px">
                            <a href="join-movement.php" class="btn btn-small btn-rounded btn-register-now">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end upcoming events -->

<!-- Modal for Request a Visit -->
<div class="modal fade" id="requestVisitModal" tabindex="-1" aria-labelledby="requestVisitModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-radius-20px overflow-hidden border-0 shadow-lg">
            <div class="modal-header bg-royal-blue text-white border-0 p-4">
                <h5 class="modal-title alt-font fw-700 mb-0" id="requestVisitModalLabel">Request a Visit</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 bg-alabaster">
                <form action="#" method="post">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label fw-800 text-royal-blue fs-12 text-uppercase mb-1">Full Name</label>
                            <input type="text" name="name" class="form-control border-radius-8px border-color-extra-medium-gray p-3" placeholder="Enter your name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-800 text-royal-blue fs-12 text-uppercase mb-1">Email ID</label>
                            <input type="email" name="email" class="form-control border-radius-8px border-color-extra-medium-gray p-3" placeholder="Enter your email">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-800 text-royal-blue fs-12 text-uppercase mb-1">Phone Number</label>
                            <input type="tel" name="phone" class="form-control border-radius-8px border-color-extra-medium-gray p-3" placeholder="Enter phone" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-800 text-royal-blue fs-12 text-uppercase mb-1">Alternative Number</label>
                            <input type="tel" name="alt_phone" class="form-control border-radius-8px border-color-extra-medium-gray p-3" placeholder="Enter alternative phone">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-800 text-royal-blue fs-12 text-uppercase mb-1">Your Personal Address</label>
                            <input type="text" name="personal_address" class="form-control border-radius-8px border-color-extra-medium-gray p-3" placeholder="Your full home address" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-800 text-royal-blue fs-12 text-uppercase mb-1">Visit Site / Location Address</label>
                            <input type="text" name="visit_address" class="form-control border-radius-8px border-color-extra-medium-gray p-3" placeholder="Enter the full address where visit is required" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-800 text-royal-blue fs-12 text-uppercase mb-1 d-block">GPS Location (WhatsApp Style)</label>
                            <div class="p-4 bg-white border border-color-extra-medium-gray border-radius-8px">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="w-40px h-40px bg-royal-blue text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                                            <i class="bi bi-geo-alt-fill fs-20"></i>
                                        </div>
                                        <div>
                                            <span class="d-block fw-700 text-dark-gray fs-15">Share Current Location</span>
                                            <span id="location-status-text" class="fs-13 text-muted">Click the button to attach your coordinates</span>
                                        </div>
                                    </div>
                                    <button type="button" onclick="getLocation()" class="btn btn-small btn-royal-blue btn-rounded">Share Location</button>
                                </div>
                                <div id="location-preview-wrap" style="display:none;">
                                    <div class="border-radius-8px overflow-hidden border border-color-extra-medium-gray mb-2">
                                        <iframe id="location-iframe" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen></iframe>
                                    </div>
                                    <div class="d-flex align-items-center text-emerald-green fw-600 fs-13">
                                        <i class="bi bi-check-circle-fill me-1"></i> Precise location attached
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="latitude" name="latitude">
                            <input type="hidden" id="longitude" name="longitude">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-800 text-royal-blue fs-12 text-uppercase mb-1">Specify The Need</label>
                            <textarea name="need" class="form-control border-radius-8px border-color-extra-medium-gray p-3" rows="3" placeholder="Describe the purpose of your visit request" required></textarea>
                        </div>
                        <div class="col-12 pt-2">
                            <button type="submit" class="btn btn-extra-large bg-royal-blue text-white w-100 btn-rounded shadow-sm">Submit Request <i class="bi bi-send ms-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function getLocation() {
    const statusText = document.getElementById('location-status-text');
    const previewWrap = document.getElementById('location-preview-wrap');
    const iframe = document.getElementById('location-iframe');
    
    if (navigator.geolocation) {
        statusText.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-1"></i> Fetching your coordinates...';
        
        navigator.geolocation.getCurrentPosition(
            (position) => {
                const lat = position.coords.latitude;
                const lon = position.coords.longitude;
                document.getElementById('latitude').value = lat;
                document.getElementById('longitude').value = lon;
                
                // Set the iframe source to Embed Google Maps
                iframe.src = `https://maps.google.com/maps?q=${lat},${lon}&t=&z=15&ie=UTF8&iwloc=&output=embed`;
                
                statusText.innerHTML = 'Location successfully pinned';
                previewWrap.style.display = 'block';
            },
            (error) => {
                statusText.innerHTML = '<span class="text-danger"><i class="bi bi-exclamation-triangle-fill"></i> Error accessing location.</span>';
                console.error(error);
            }
        );
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}
</script>


<?php
include 'parts/footer.php';
include 'parts/html-footer.php';
?>