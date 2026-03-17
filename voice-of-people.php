<?php
$page_title = "Voice of the People - Ajaykumar Sarnaik";
$page_description = "Speak up! Share your concerns, ideas, and feedback through our \'Voice of the People\' platform. Participate in polls and join the discussion for a better Bagalkot.";
$extra_css = '
    <style>
        :root {
            --royal-blue: #000080;
            --muted-saffron: #FF9933;
            --emerald-green: #138808;
            --alabaster: #FAFAFA;
        }

        .poll-card {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .poll-option {
            background: var(--alabaster);
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .poll-option:hover {
            background: rgba(0, 0, 128, 0.05);
        }

        .poll-progress {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            background: rgba(0, 0, 128, 0.1);
            z-index: -1;
            transition: width 1s ease;
        }

        .forum-item {
            border-left: 4px solid var(--royal-blue);
            padding: 20px;
            background: #fff;
            border-radius: 0 10px 10px 0;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .forum-item:hover {
            transform: translateX(10px);
        }
    </style>
';

include 'parts/html-header.php';
include 'parts/header.php';
?>

<!-- Hero -->
<section class="p-0 cover-background h-800px pt-80px position-relative overflow-hidden" style="background-image: url('images/new/anna-bg.jpg');">
    <div class="hero-horizontal-gradient"></div>
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xl-7 col-lg-8 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="d-inline-block text-white fw-700 text-uppercase ls-2px fs-15 border-bottom-tricolor pb-5px mb-25px">Participatory Democracy</span>
                <h1 class="alt-font fw-700 text-white ls-minus-2px mb-25px" style="font-size: 4rem; line-height: 4.2rem;">Your Voice. Our Mission.</h1>
                <p class="fs-20 text-white opacity-8 mb-0 w-80 lg-w-100 fw-300">The 'Voice of the People' platform is a direct bridge between your concerns and our policy initiatives.</p>
            </div>
        </div>
    </div>
</section>

<!-- Submission Form -->
<section class="pt-100px pb-100px bg-alabaster">
    <div class="container">
        <div class="row justify-content-center mb-60px">
            <div class="col-lg-8 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-15 fw-700 text-royal-blue text-uppercase ls-1px mb-10px border-bottom-tricolor pb-5px">Direct Feedback</span>
                <h2 class="alt-font fw-700 text-royal-blue mb-4 ls-minus-1px" style="font-size: 3.5rem; line-height: 1.1;">Share Your Concerns</h2>
                <p class="fs-18 opacity-7 mb-0">Have an issue in your locality? Or an idea for Bagalkot's development? Tell us directly. Every submission is reviewed by our core committee.</p>
            </div>
        </div>

        <!-- Three Points Row -->
        <div class="row g-4 mb-50px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <div class="col-lg-4 text-center">
                <div class="bg-white p-4 border-radius-15px shadow-sm h-100 border-top-royal-blue border-top-4">
                    <i class="bi bi-shield-check text-emerald-green fs-40 mb-3 d-block"></i>
                    <h6 class="fw-700 text-dark-gray mb-2">Confidential & Secure</h6>
                    <p class="fs-14 mb-0 opacity-7">Your identity and information are protected at all times through encrypted submission.</p>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="bg-white p-4 border-radius-15px shadow-sm h-100 border-top-muted-saffron border-top-4">
                    <i class="bi bi-clock-history text-muted-saffron fs-40 mb-3 d-block"></i>
                    <h6 class="fw-700 text-dark-gray mb-2">Weekly Reviews</h6>
                    <p class="fs-14 mb-0 opacity-7">Our team reviews and prioritizes all incoming feedback on a weekly cycle to ensure response.</p>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="bg-white p-4 border-radius-15px shadow-sm h-100 border-top-emerald-green border-top-4">
                    <i class="bi bi-lightning-charge text-royal-blue fs-40 mb-3 d-block"></i>
                    <h6 class="fw-700 text-dark-gray mb-2">Direct Action</h6>
                    <p class="fs-14 mb-0 opacity-7">Urgent matters are escalated directly to relevant department heads for immediate verification.</p>
                </div>
            </div>
        </div>

        <div class="row"
            data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 400, "easing": "easeOutQuad" }'>
            <div class="col-lg-12">
                <div class="bg-white p-5 border-radius-20px shadow-lg">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-600">Your Full Name</label>
                                <input type="text" placeholder="Enter your name" class="form-control border-radius-8px p-3">
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-600">Mobile Number</label>
                                <input type="tel" placeholder="+91 XXXXX XXXXX" class="form-control border-radius-8px p-3">
                            </div>
                            <div class="col-md-12 mb-4">
                                <label class="form-label fw-600">Concern Category</label>
                                <select class="form-control border-radius-8px p-3">
                                    <option value="">Select Category...</option>
                                    <option value="infrastructure">Infrastructure & Roads</option>
                                    <option value="agriculture">Agriculture & Irrigation</option>
                                    <option value="employment">Employment & Training</option>
                                    <option value="healthcare">Healthcare & Sanitation</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label class="form-label fw-600">Describe Your Issue or Suggestion</label>
                                <textarea placeholder="How can we help? Describe your locality and the issue in detail..."
                                    class="form-control border-radius-8px p-3" rows="5"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit"
                                    class="btn btn-large bg-royal-blue text-white btn-rounded w-100 py-3">Submit Your
                                    Voice <i class="bi bi-megaphone ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Polls & Forums -->
<section class="pt-100px pb-100px bg-white overflow-hidden">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Active Poll -->
            <div class="col-lg-6"
                data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 800, "easing": "easeOutQuad" }'>
                <div class="bg-royal-blue p-5 border-radius-20px shadow-xl position-relative">
                    <div class="absolute-top-right p-4 opacity-1"><i class="bi bi-bar-chart-fill fs-100 text-white"></i></div>
                    <h3 class="alt-font fw-700 text-white mb-4">Community Poll</h3>
                    <div class="poll-card p-0 shadow-none bg-transparent">
                        <h5 class="fw-700 text-white opacity-9 mb-4">What should be the top priority for Bagalkot 2030?</h5>
                        <div class="poll-option bg-white-transparent-1 border-0 text-white py-3">
                            <span class="fw-500">Irrigation Justice (UKP Phase 3)</span>
                            <strong class="text-muted-saffron">42%</strong>
                            <div class="poll-progress bg-white-transparent-2" style="width: 42%;"></div>
                        </div>
                        <div class="poll-option bg-white-transparent-1 border-0 text-white py-3">
                            <span class="fw-500">Cooperative Banking Modernization</span>
                            <strong class="text-muted-saffron">35%</strong>
                            <div class="poll-progress bg-white-transparent-2" style="width: 35%;"></div>
                        </div>
                        <div class="poll-option bg-white-transparent-1 border-0 text-white py-3">
                            <span class="fw-500">Youth & Sports Infrastructure</span>
                            <strong class="text-muted-saffron">23%</strong>
                            <div class="poll-progress bg-white-transparent-2" style="width: 23%;"></div>
                        </div>
                        <p class="fs-13 text-white-transparent-6 mt-4 mb-0">Total Votes: 12,450 • Live results as of today</p>
                    </div>
                </div>
            </div>
            <!-- Forum Mockup -->
            <div class="col-lg-6"
                data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
                <span class="d-inline-block fs-14 fw-700 text-royal-blue text-uppercase ls-1px mb-15px">Dialogue Platform</span>
                <h2 class="alt-font fw-700 text-dark-gray mb-4 ls-minus-1px">Discussion Forum</h2>
                <div class="forum-item shadow-sm p-4 bg-alabaster border-radius-10px border-left-emerald-green border-left-5 mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fs-12 fw-700 badge bg-emerald-green text-white px-2">IN PROGRESS</span>
                        <span class="fs-12 opacity-5">2 hours ago</span>
                    </div>
                    <h5 class="fw-700 text-dark-gray mb-1">UKP Land Compensation Status Update.</h5>
                    <p class="fs-15 opacity-7 mb-0">Moderator: Sarnaik Legal Cell | 45 Active participants</p>
                </div>
                <div class="forum-item shadow-sm p-4 bg-alabaster border-radius-10px border-left-royal-blue border-left-5">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fs-12 fw-700 badge bg-royal-blue text-white px-2">PLANNED</span>
                        <span class="fs-12 opacity-5">5 hours ago</span>
                    </div>
                    <h5 class="fw-700 text-dark-gray mb-1">New digital banking training for rural farmers.</h5>
                    <p class="fs-15 opacity-7 mb-0">Join the discussion on potential digital inclusion workshops.</p>
                </div>
                <div class="mt-4 text-center text-lg-start">
                    <a href="#" class="btn btn-medium btn-royal-blue btn-rounded">Visit Discussion Forum <i class="bi bi-chat-dots-fill ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'parts/footer.php';
include 'parts/html-footer.php';
?>