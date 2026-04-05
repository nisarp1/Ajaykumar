<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon — Ajaykumar Sarnaik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,800;1,700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --saffron: #FF9933;
            --white:   #ffffff;
            --green:   #138808;
            --navy:    #000080;
        }

        html, body {
            height: 100%;
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #04040f;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px 60px;
            overflow: hidden;
            position: relative;
        }

        /* ── Background blobs ── */
        body::before,
        body::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            filter: blur(120px);
            pointer-events: none;
            z-index: 0;
        }
        body::before {
            width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(0,0,128,0.45) 0%, transparent 70%);
            top: -150px; left: -150px;
        }
        body::after {
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(19,136,8,0.2) 0%, transparent 70%);
            bottom: -100px; right: -100px;
        }

        .saffron-blob {
            position: absolute;
            width: 400px; height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,153,51,0.12) 0%, transparent 70%);
            filter: blur(100px);
            bottom: 10%; left: 10%;
            pointer-events: none;
            z-index: 0;
        }

        /* ── Layout wrapper ── */
        .wrapper {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0;
            width: 100%;
            max-width: 780px;
        }

        /* ── Logo ── */
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 56px;
            text-decoration: none;
        }
        .logo-text {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: #fff;
            line-height: 1.25;
            text-align: left;
            letter-spacing: 0.3px;
        }
        .logo-text span {
            display: block;
        }
        .logo img {
            height: 46px;
            filter: brightness(0) invert(1);
            opacity: 0.9;
        }

        /* ── Eyebrow ── */
        .eyebrow {
            font-family: 'Inter', sans-serif;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 4px;
            color: var(--saffron);
            margin-bottom: 20px;
            opacity: 0.85;
        }

        /* ── Heading ── */
        .heading {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(3rem, 8vw, 5.5rem);
            font-weight: 800;
            line-height: 1.05;
            letter-spacing: -1px;
            margin-bottom: 24px;
            background: linear-gradient(
                135deg,
                var(--saffron)  0%,
                #ffcc80         28%,
                var(--white)    50%,
                #a5d6a7         72%,
                var(--green)    100%
            );
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* ── Paragraph ── */
        .tagline {
            font-family: 'Inter', sans-serif;
            font-size: 1.05rem;
            font-weight: 400;
            color: rgba(255,255,255,0.55);
            line-height: 1.75;
            max-width: 520px;
            margin-bottom: 64px;
        }

        /* ── Tricolor divider ── */
        .tricolor-bar {
            width: 80px;
            height: 3px;
            background: linear-gradient(to right, var(--saffron) 33%, var(--white) 33%, var(--white) 66%, var(--green) 66%);
            border-radius: 2px;
            margin: 0 auto 64px;
        }

        /* ── Timer ── */
        .timer {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: clamp(16px, 4vw, 48px);
            margin-bottom: 72px;
            width: 100%;
        }

        .timer-block {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .timer-num {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(3.5rem, 10vw, 7rem);
            font-weight: 800;
            line-height: 1;
            letter-spacing: -2px;
            position: relative;
            /* Tricolor gradient on digits */
            background: linear-gradient(
                180deg,
                var(--saffron)  0%,
                var(--white)    50%,
                var(--green)    100%
            );
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            min-width: clamp(80px, 14vw, 140px);
            text-align: center;
        }

        .timer-label {
            font-family: 'Inter', sans-serif;
            font-size: 0.62rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: rgba(255,255,255,0.35);
            margin-top: 10px;
        }

        .timer-sep {
            font-family: 'Playfair Display', serif;
            font-size: clamp(3rem, 8vw, 5.5rem);
            font-weight: 700;
            color: rgba(255,255,255,0.15);
            line-height: 1;
            padding-top: 4px;
            align-self: flex-start;
        }

        /* ── Home button ── */
        .home-btn {
            font-family: 'Inter', sans-serif;
            font-size: 0.8rem;
            font-weight: 500;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.2);
            text-decoration: none;
            border: none;
            background: none;
            cursor: pointer;
            transition: color 0.3s ease, opacity 0.3s ease;
            padding: 8px 0;
        }
        .home-btn:hover {
            color: rgba(255,255,255,0.5);
        }
        .home-btn::before {
            content: '← ';
            font-size: 0.75rem;
        }

        /* ── Responsive ── */
        @media (max-width: 540px) {
            .timer { gap: 10px; }
            .timer-sep { display: none; }
            .tagline { font-size: 0.95rem; }
        }
    </style>
</head>
<body>

<div class="saffron-blob"></div>

<div class="wrapper">

    <!-- Logo -->
    <a class="logo" href="/">
        <div class="logo-text">
            <span>Ajaykumar</span>
            <span>Sarnaik</span>
        </div>
        <img src="/wp-content/themes/ajaykumar-custom/assets/images/new/hand.png" alt="Ajaykumar Sarnaik">
    </a>

    <!-- Eyebrow -->
    <p class="eyebrow">Something Big Is Coming</p>

    <!-- Heading -->
    <h1 class="heading">Coming Soon</h1>

    <!-- Tagline -->
    <p class="tagline">
        A new chapter in service to the people of Bagalkot and North Karnataka is about to begin.
        Stay with us — great things are worth the wait.
    </p>

    <!-- Tricolor divider -->
    <div class="tricolor-bar"></div>

    <!-- Countdown Timer -->
    <div class="timer">
        <div class="timer-block">
            <div class="timer-num" id="days">00</div>
            <div class="timer-label">Days</div>
        </div>
        <div class="timer-sep">:</div>
        <div class="timer-block">
            <div class="timer-num" id="hours">00</div>
            <div class="timer-label">Hours</div>
        </div>
        <div class="timer-sep">:</div>
        <div class="timer-block">
            <div class="timer-num" id="minutes">00</div>
            <div class="timer-label">Minutes</div>
        </div>
        <div class="timer-sep">:</div>
        <div class="timer-block">
            <div class="timer-num" id="seconds">00</div>
            <div class="timer-label">Seconds</div>
        </div>
    </div>

    <!-- Home button -->
    <a class="home-btn" href="/">Return Home</a>

</div>

<script>
    // Target: April 6, 2026 at 22:00:00 IST (UTC+5:30)
    var target = new Date('2026-04-06T22:00:00+05:30').getTime();

    function pad(n) {
        return String(n).padStart(2, '0');
    }

    function tick() {
        var now  = Date.now();
        var diff = target - now;

        if (diff <= 0) {
            document.getElementById('days').textContent    = '00';
            document.getElementById('hours').textContent   = '00';
            document.getElementById('minutes').textContent = '00';
            document.getElementById('seconds').textContent = '00';
            return;
        }

        var days    = Math.floor(diff / (1000 * 60 * 60 * 24));
        var hours   = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((diff % (1000 * 60)) / 1000);

        document.getElementById('days').textContent    = pad(days);
        document.getElementById('hours').textContent   = pad(hours);
        document.getElementById('minutes').textContent = pad(minutes);
        document.getElementById('seconds').textContent = pad(seconds);
    }

    tick();
    setInterval(tick, 1000);
</script>

</body>
</html>
