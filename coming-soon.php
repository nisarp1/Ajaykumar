<?php
$page_title = "Coming Soon — Ajaykumar Sarnaik";
$page_description = "The official website of Ajaykumar Sarnaik is coming soon. Former Minister of Youth & Sports, President of Bagalkot DCC Bank, and Former MP.";
$extra_css = '
    <!-- Kannada font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Kannada:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* -----------------------------------------------
           Design System — matches home page CSS variables
        ----------------------------------------------- */
        :root {
            --royal-blue: #000080;
            --muted-saffron: #FF9933;
            --emerald-green: #138808;
            --alabaster: #FAFAFA;
            --dark-gray: #232323;
            --medium-gray: #717580;
            --white: #ffffff;
        }

        /* -----------------------------------------------
           PAGE LAYOUT — full-screen split
        ----------------------------------------------- */
        .page-wrapper {
            height: 100vh;
            overflow: hidden;
            display: grid;
            grid-template-columns: 2fr 3fr;
        }

        /* -----------------------------------------------
           LEFT COLUMN — image + bottom strip
        ----------------------------------------------- */
        .panel-left {
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
        }

        .panel-image {
            position: relative;
            overflow: hidden;
            flex: 1 1 0;
            min-height: 0;
        }

        .panel-image__bg {
            position: absolute;
            inset: 0;
            background-image: url(\'images/new/coming-soon.jpg\');
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;
            background-color: #080e1c;
            filter: brightness(1.0);
            animation: slowZoom 18s ease-in-out infinite alternate;
        }

        @keyframes slowZoom {
            from { transform: scale(1); }
            to { transform: scale(1.06); }
        }

        .panel-image__tricolor {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #FF9933 0%, #FF9933 33.33%, #ffffff 33.33%, #ffffff 66.66%, #138808 66.66%, #138808 100%);
            z-index: 3;
        }

        .panel-image__overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, rgba(11, 18, 37, 0.0) 0%, rgba(11, 18, 37, 0.0) 40%, rgba(11, 18, 37, 0.6) 78%, rgba(11, 18, 37, 1.0) 100%);
            z-index: 2;
        }

        .panel-image__badge {
            position: absolute;
            bottom: 12px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 5;
            text-align: center;
            pointer-events: none;
        }

        .image-heading {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 70px 28px 14px;
            background: linear-gradient(to top, rgba(5, 10, 22, 0.97) 0%, rgba(5, 10, 22, 0.65) 50%, transparent 100%);
            z-index: 6;
        }

        .panel-bottom {
            flex: 0 0 auto;
            background: linear-gradient(160deg, #0b1225 0%, #0e1830 100%);
            border-top: 1px solid rgba(255, 255, 255, 0.06);
            padding: 16px 24px 18px;
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .panel-image__badge-text {
            display: inline-block;
            background: rgba(0, 0, 0, 0.55);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            padding: 8px 24px;
            color: #ffffff;
            font-family: var(--primary-font);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            white-space: nowrap;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .panel-content {
            background: linear-gradient(160deg, #0b1225 0%, #111d38 55%, #0b1225 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding: 40px 60px 40px 56px;
            position: relative;
            height: 100vh;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .panel-content::before {
            content: \'\';
            position: absolute;
            top: -120px;
            right: -80px;
            width: 380px;
            height: 380px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 0, 128, 0.3) 0%, transparent 70%);
            pointer-events: none;
        }

        .panel-content::after {
            content: \'\';
            position: absolute;
            bottom: -100px;
            left: -60px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 153, 51, 0.12) 0%, transparent 70%);
            pointer-events: none;
        }

        .lang-toggle {
            display: flex;
            align-items: center;
            gap: 0;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 50px;
            padding: 3px;
            margin-bottom: 14px;
            width: fit-content;
            position: relative;
            z-index: 1;
        }

        .panel-top-bar .lang-toggle {
            margin-bottom: 0;
            align-self: flex-start;
            padding-top: 4px;
        }

        .lang-btn {
            background: none;
            border: none;
            padding: 5px 16px;
            border-radius: 50px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            cursor: pointer;
            color: rgba(255, 255, 255, 0.45);
            transition: all 0.25s ease;
            font-family: var(--primary-font);
        }

        .lang-btn.active {
            background: linear-gradient(135deg, #FF9933 0%, #e8861a 100%);
            color: #fff;
            box-shadow: 0 2px 8px rgba(255, 153, 51, 0.4);
        }

        .message-block.kn p,
        .message-block.kn li {
            font-family: \'Noto Sans Kannada\', sans-serif;
            font-size: 14px;
            line-height: 1.85;
        }

        .panel-top-bar {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 40px;
            position: relative;
            z-index: 1;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 0;
            position: relative;
            z-index: 1;
        }

        .brand__hand {
            height: 56px;
            width: auto;
            background: #ffffff;
            border-radius: 50%;
            padding: 7px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
        }

        .brand__name {
            font-size: 24px;
            font-weight: 700;
            color: #fff;
            line-height: 1.2;
            letter-spacing: -0.3px;
        }

        .brand__name span {
            display: block;
            font-family: var(--primary-font);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--muted-saffron);
            opacity: 0.85;
            margin-top: 3px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 3.5px;
            text-transform: uppercase;
            margin-bottom: 14px;
            background: linear-gradient(135deg, rgba(255, 153, 51, 0.22) 0%, rgba(255, 153, 51, 0.08) 100%);
            border: 1px solid rgba(255, 153, 51, 0.55);
            border-radius: 50px;
            padding: 7px 18px 7px 14px;
            box-shadow: 0 0 18px rgba(255, 153, 51, 0.25);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
        }

        .eyebrow__dot {
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: var(--muted-saffron);
            box-shadow: 0 0 8px rgba(255, 153, 51, 0.9);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.4; transform: scale(0.7); }
        }

        .panel-bottom .countdown-wrapper { width: 100%; }
        .panel-bottom .countdown-label { font-size: 10px; letter-spacing: 2.5px; margin-bottom: 10px; }
        .panel-bottom .countdown { gap: 16px; }
        .panel-bottom .countdown__number { font-size: clamp(2rem, 3.5vw, 3rem); min-width: 72px; }

        .message-block p { font-size: 13px; color: rgba(255, 255, 255, 0.68); line-height: 1.7; margin-bottom: 8px; }
        .message-block .salutation { font-family: var(--alt-font); font-size: 15px; font-weight: 700; color: var(--muted-saffron); }
        .message-block ul li { font-size: 13px; color: rgba(255, 255, 255, 0.68); line-height: 1.7; }
        .message-block .email-link { color: var(--muted-saffron); text-decoration: underline; }

        .main-heading {
            font-family: var(--alt-font);
            font-size: clamp(2rem, 2.8vw, 3.2rem);
            font-weight: 700;
            color: var(--muted-saffron);
            line-height: 1.1;
            margin-bottom: 10px;
        }

        .main-heading .accent { color: #ffffff; }
        .main-heading .green-accent { color: #4dca6a; }

        .countdown-label {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #fff;
            margin-bottom: 16px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 6px 20px;
            background: linear-gradient(90deg, rgba(255, 153, 51, 0.18) 0%, rgba(19, 136, 8, 0.12) 100%);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 50px;
        }

        .countdown { display: flex; gap: 10px; }
        .countdown__number { font-family: var(--alt-font); font-size: clamp(1.6rem, 2.2vw, 2.2rem); font-weight: 700; color: #ffffff; background: rgba(255, 255, 255, 0.06); border-radius: 8px; padding: 10px 8px; min-width: 60px; text-align: center; }
        .countdown__unit { font-size: 10px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; color: rgba(255, 255, 255, 0.35); margin-top: 8px; display: block; text-align: center; }
        .countdown__sep { font-family: var(--alt-font); font-size: 2rem; color: rgba(255, 255, 255, 0.2); margin-top: 14px; }

        .attribution { position: absolute; bottom: 22px; right: 64px; font-size: 11px; color: rgba(255, 255, 255, 0.2); }

        .hidden { display: none; }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .anim { opacity: 0; }
        .anim-1 { animation: fadeUp 0.7s 0.1s forwards ease-out; }
        .anim-2 { animation: fadeUp 0.7s 0.25s forwards ease-out; }
        .anim-4 { animation: fadeUp 0.7s 0.55s forwards ease-out; }
        .anim-5 { animation: fadeUp 0.7s 0.7s forwards ease-out; }

        @media (max-width: 860px) {
            .page-wrapper { grid-template-columns: 1fr; grid-template-rows: auto auto; height: auto; overflow: visible; }
            .panel-left { height: auto; }
            .panel-image { aspect-ratio: 1000 / 1080; flex: none; }
            .panel-content { height: auto; padding: 32px 28px 72px; }
            .attribution { position: static; margin-top: 28px; text-align: center; }
        }
    </style>
';

include 'parts/html-header.php';
?>

<div class="page-wrapper">
    <div class="panel-left">
        <div class="panel-image" role="img" aria-label="Photo of Ajaykumar Sarnaik">
            <div class="panel-image__bg"></div>
            <div class="panel-image__tricolor"></div>
            <div class="panel-image__overlay"></div>

            <div class="image-heading anim anim-2">
                <div class="eyebrow">
                    <span class="eyebrow__dot"></span>
                    Launching Soon
                </div>
                <h1 class="main-heading">
                    A New Chapter<br>
                    <span class="accent">for Bagalkot.</span><br>
                    <span class="green-accent">A Voice for Karnataka.</span>
                </h1>
            </div>

            <div class="panel-image__badge">
                <span class="panel-image__badge-text">Bagalkot &bull; Karnataka &bull; India</span>
            </div>
        </div>

        <div class="panel-bottom">
            <div class="countdown-wrapper anim anim-5">
                <div class="countdown-label">Site launches in</div>
                <div class="countdown" id="countdown">
                    <div class="countdown__block">
                        <span class="countdown__number" id="cd-days">00</span>
                        <span class="countdown__unit">Days</span>
                    </div>
                    <span class="countdown__sep">:</span>
                    <div class="countdown__block">
                        <span class="countdown__number" id="cd-hours">00</span>
                        <span class="countdown__unit">Hours</span>
                    </div>
                    <span class="countdown__sep">:</span>
                    <div class="countdown__block">
                        <span class="countdown__number" id="cd-minutes">00</span>
                        <span class="countdown__unit">Minutes</span>
                    </div>
                    <span class="countdown__sep">:</span>
                    <div class="countdown__block">
                        <span class="countdown__number" id="cd-seconds">00</span>
                        <span class="countdown__unit">Seconds</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel-content">
        <div class="panel-top-bar anim anim-1">
            <div class="brand">
                <img src="images/new/hand.png" alt="Ajaykumar Sarnaik logo" class="brand__hand">
                <div class="brand__name">
                    Ajaykumar Sarnaik
                    <span>Indian National Congress</span>
                </div>
            </div>

            <div class="lang-toggle" role="group" aria-label="Language selector">
                <button class="lang-btn active" id="btn-en" onclick="switchLang(\'en\')">English</button>
                <button class="lang-btn" id="btn-kn" onclick="switchLang(\'kn\')">ಕನ್ನಡ</button>
            </div>
        </div>

        <div class="message-block en anim anim-4" id="msg-en">
            <p class="salutation">Namaskara,</p>
            <p>I am delighted to announce my entry into the Digital World. This platform is being created with a sole
                purpose &mdash; to <strong>connect with every citizen</strong> of my constituency &amp; Karnataka State,
                share my Vision, and engage in meaningful dialogue on the issues that matter most.</p>
            <p>As a proud member of the <strong>Indian National Congress</strong>, I have always believed in the power
                of <strong>Democracy, Transparency, and Public Service</strong>. This website is more than just a
                digital presence &mdash; it is a space to <strong>Inform, Inspire, and Involve</strong> you in our
                journey toward Progress, Social Justice, Women Empowerment, and Inclusive Development.</p>
            <p>Once the platform is ready, through this portal, you can:</p>
            <ul>
                <li>Stay updated with my initiatives, policies, and activities</li>
                <li>Share your ideas, concerns, and suggestions directly</li>
                <li>Learn about our mission to strengthen democracy, empower communities, and serve the people</li>
            </ul>
            <p>I intend to engage actively, and join hands in shaping a better future for <strong>Bagalkot District
                    &amp; Karnataka</strong>. Together, let us uphold the values of <strong>Justice, Equality, and
                    Development</strong> that have guided our party for decades.</p>
            <p>Thank you for visiting, and I look forward to connecting with you.<br>Until then, you can reach me
                at:<br><a href="mailto:ajaysarnaikinc@gmail.com" class="email-link">ajaysarnaikinc@gmail.com</a>
                &nbsp;/&nbsp; <a href="mailto:voice@ajaykumarsarnaik.com"
                    class="email-link">voice@ajaykumarsarnaik.com</a></p>
            <p class="sign-off">I promise to try my best to look into your suggestions, complaints &amp; feedback
                &mdash; to constructively discuss and respond.</p>
        </div>

        <div class="message-block kn hidden anim anim-4" id="msg-kn">
            <p class="salutation">ನನ್ನ ನಾಗರಿಕರಿಗೆ ನಮಸ್ಕಾರ,</p>
            <p>ನಾನು (ಅಜಯ್ ಕುಮಾರ್ ಸರ್ನಾಯಕ್) ಡಿಜಿಟಲ್ ಮಾಧ್ಯಮ ಪ್ರವೇಶವನ್ನು ಘೋಷಿಸಲು ಸಂತೋಷಪಡುತ್ತೇನೆ. ಈ ವೇದಿಕೆ ನನ್ನ ಕ್ಷೇತ್ರ
                ಮತ್ತು ಕರ್ನಾಟಕ ರಾಜ್ಯದ ಪ್ರತಿ ನಾಗರಿಕರೊಂದಿಗೆ ಸಂಪರ್ಕ ಸಾಧಿಸಲು ಮತ್ತು ನನ್ನ ದೃಷ್ಟಿಕೋನ ಹಂಚಿಕೊಳ್ಳಲು ಹಾಗೂ ಅತ್ಯಂತ
                ಮುಖ್ಯವಾದ ವಿಷಯಗಳ ಬಗ್ಗೆ ಅರ್ಥಪೂರ್ಣ ಸಂವಾದ ನಡೆಸಲು ಒಂದೇ ಕಾರಣಕ್ಕಾಗಿ ರಚಿಸಲ್ಪಡುತ್ತಿದೆ.</p>
            <p>ಭಾರತೀಯ ರಾಷ್ಟ್ರೀಯ ಕಾಂಗ್ರೆಸ್ನ ಹೆಮ್ಮೆಯ ಸದಸ್ಯನಾಗಿ, ನಾನು ಯಾವಾಗಲೂ <strong>ಪ್ರಜಾಪ್ರಭುತ್ವ, ಪಾರದರ್ಶಕತೆ ಮತ್ತು
                    ಸಾರ್ವಜನಿಕ ಸೇವೆ</strong>ಯ ಶಕ್ತಿಯನ್ನು ನಂಬಿದ್ದೇನೆ. ಈ ವೆಬ್ಸೈಟ್ ಕೇವಲ ಡಿಜಿಟಲ್ ಉಪಸ್ಥಿತಿಗಿಂತ ಹೆಚ್ಚಿನದು
                &mdash; ಇದು ಪ್ರಗತಿ, ಸಾಮಾಜಿಕ ನ್ಯಾಯ, ಮಹಿಳಾ ಸಬಲೀಕರಣ ಮತ್ತು ಸಮಗ್ರ ಅಭಿವೃದ್ಧಿಯತ್ತ ನಮ್ಮ ಪಯಣದಲ್ಲಿ ನಿಮಗೆ
                <strong>ಮಾಹಿತಿ ನೀಡುವ, ಪ್ರೇರೇಪಿಸುವ ಮತ್ತು ತೊಡಗಿಸಿಕೊಳ್ಳುವ</strong> ಸ್ಥಳವಾಗಿದೆ.
            </p>
            <p>ನಾನು <strong>ಬಾಗಲಕೋಟೆ ಜಿಲ್ಲೆ ಮತ್ತು ಕರ್ನಾಟಕ ರಾಜ್ಯ</strong>ಕ್ಕಾಗಿ ಉತ್ತಮ ಭವಿಷ್ಯವನ್ನು ರೂಪಿಸುವಲ್ಲಿ ಸಕ್ರಿಯವಾಗಿ
                ತೊಡಗಿಸಿಕೊಳ್ಳಲು ಉದ್ದೇಶಿಸಿದ್ದೇನೆ. ಒಟ್ಟಿಗೆ, <strong>ನ್ಯಾಯ, ಸಮಾನತೆ ಮತ್ತು ಅಭಿವೃದ್ಧಿ</strong>ಯ ಮೌಲ್ಯಗಳನ್ನು
                ಉಳಿಸಿಕೊಳ್ಳೋಣ. ಭೇಟಿ ನೀಡಿದ್ದಕ್ಕೆ ಧನ್ಯವಾದಗಳು, ಮತ್ತು ನಿಮ್ಮ ಜೊತೆ ಸಂಪರ್ಕ ಹೊಂದಲು ನಾನು ಎದುರು ನೋಡುತ್ತಿದ್ದೇನೆ.</p>
            <p>ಆವರೆಗೂ, ನೀವು ನನಗೆ e-mail ಮಾಡಬಹುದು:<br><a href="mailto:ajaysarnaikinc@gmail.com"
                    class="email-link">ajaysarnaikinc@gmail.com</a> &nbsp;/&nbsp; <a
                    href="mailto:voice@ajaykumarsarnaik.com" class="email-link">voice@ajaykumarsarnaik.com</a></p>
            <p class="sign-off">ನಿಮ್ಮ ಸಲಹೆಗಳು, ದೂರುಗಳು ಮತ್ತು ಪ್ರತಿಕ್ರಿಯೆಯನ್ನು ನೋಡಿ ರಚನಾತ್ಮಕವಾಗಿ ಚರ್ಚಿಸಿ ಮತ್ತು
                ಪ್ರತಿಕ್ರಿಯಿಸಲು ನನ್ನಿಂದ ಆಗುವ ಎಲ್ಲ ಪ್ರಯತ್ನವನ್ನು ಮಾಡುವೆನು ಎಂದು ನಾನು ಭರವಸೆ ಮಾಡುತ್ತೇನೆ.</p>
        </div>

        <div class="attribution">&copy; 2026 Ajaykumar Sarnaik</div>
    </div>
</div>

<script>
    function switchLang(lang) {
        var enMsg = document.getElementById(\'msg-en\');
            var knMsg = document.getElementById(\'msg-kn\');
            var btnEn = document.getElementById(\'btn-en\');
            var btnKn = document.getElementById(\'btn-kn\');
            if (lang === \'kn\') {
        enMsg.classList.add(\'hidden\');
                knMsg.classList.remove(\'hidden\');
                btnEn.classList.remove(\'active\');
                btnKn.classList.add(\'active\');
            } else {
        knMsg.classList.add(\'hidden\');
                enMsg.classList.remove(\'hidden\');
                btnKn.classList.remove(\'active\');
                btnEn.classList.add(\'active\');
            }
        }

    (function () {
        var launchDate = new Date();
        launchDate.setDate(launchDate.getDate() + 5);
        function pad(n) {
            return String(n).padStart(2, \'0\'); }
            function updateCountdown() {
                    var now = new Date().getTime();
                    var diff = launchDate.getTime() - now;
                    if (diff <= 0) {
                        document.getElementById(\'cd-days\').textContent = \'00\';
                    document.getElementById(\'cd-hours\').textContent = \'00\';
                    document.getElementById(\'cd-minutes\').textContent = \'00\';
                    document.getElementById(\'cd-seconds\').textContent = \'00\';
                    return;
                    }
                    var days = Math.floor(diff / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((diff % (1000 * 60)) / 1000);
                    document.getElementById(\'cd-days\').textContent = pad(days);
                document.getElementById(\'cd-hours\').textContent = pad(hours);
                document.getElementById(\'cd-minutes\').textContent = pad(minutes);
                document.getElementById(\'cd-seconds\').textContent = pad(seconds);
            }
            updateCountdown();
            setInterval(updateCountdown, 1000);
        }) ();
</script>

<?php
include 'parts/html-footer.php';
?>