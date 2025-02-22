<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mutabaah</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets-landing-page/css/style.css') }}">

    <!-- <script defer src="script.js"></script> -->
</head>
<body>
    <header>
        <h1>Mutabaah</h1>
        <nav>
        @auth
            <a href="{{ url('/dashboard') }}">
                Dashboard EUY
            </a>
        @else
            <a href="{{ route('login') }}">
                Login
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">
                   Register
                </a>
            @endif
        @endauth
        </nav>
    </header>

    <section class="hero">
        <!-- <h2>Your Daily Islamic Companion</h2>
        <p>Quran, Prayer Times, and Islamic Reminders in One Place</p>
        <a href="#download" class="btn">Download Now</a> -->
    </section>

    <section id="features">
        <h2>Key Features</h2>
        <div class="features-grid">
            <div class="feature">
                <h3>📖 Quran</h3>
                <p>Read and listen to the Holy Quran anytime.</p>
            </div>
            <div class="feature">
                <h3>🕋 Prayer Times</h3>
                <p>Accurate prayer times with reminders.</p>
            </div>
            <div class="feature">
                <h3>🕌 Qibla Direction</h3>
                <p>Find the direction of the Kaaba easily.</p>
            </div>
            <div class="feature">
                <h3>🌙 Islamic Calendar</h3>
                <p>Stay updated with Islamic events & fasting times.</p>
            </div>
        </div>
    </section>

    <!-- <section id="download">
        <h2>Download the App</h2>
        <p>Available on iOS and Android</p>
        <div class="download-buttons">
            <a href="#" class="btn">📱 Google Play</a>
            <a href="#" class="btn">🍏 App Store</a>
        </div>
    </section> -->

    <footer id="contact">
        <p>&copy; 2025 Mutabaah. All Rights Reserved.</p>
    </footer>
</body>
</html>
