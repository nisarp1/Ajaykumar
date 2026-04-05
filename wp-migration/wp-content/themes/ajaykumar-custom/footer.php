<!-- start subscription section -->
<section class="py-3 bg-transparent border-top border-color-extra-medium-gray">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 text-center d-lg-flex align-items-center justify-content-center">
                <h5 class="alt-font fw-600 mb-0 me-lg-4 text-royal-blue">Subscribe to Official Updates
                </h5>
                <?php echo do_shortcode('[contact-form-7 title="Subscription Form"]'); ?>
            </div>
        </div>
    </div>
</section>

<!-- start footer -->
<footer class="p-0 pt-60px pb-40px position-relative"
    style="background: linear-gradient(90deg, #0b121e 0%, #172a45 100%);">
    <div class="position-absolute top-0 start-0 w-100 h-3px"
        style="background: linear-gradient(90deg, #FF9933, #FFFFFF, #138808);"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <!-- Social & Contact -->
            <div class="col-lg-4 col-md-12 text-center text-lg-start md-mb-30px">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo d-inline-block text-decoration-none mb-3 mt-0">
                    <span class="fs-24 fw-700 text-white text-nowrap alt-font">Ajaykumar
                        Sarnaik <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/hand.png" alt=""
                            class="ms-2 position-relative bg-white rounded-circle p-5px"
                            style="height: 45px; max-height: 45px !important; top: -3px;"></span>
                </a>
                <p class="text-white opacity-6 lh-26 w-100 mb-3">Former Minister & MP.
                    Dedicated to the progress and prosperity of Bagalkot and Karnataka.</p>
                <div class="elements-social social-icon-style-09 mt-2">
                    <ul class="medium-icon light">
                        <li><a class="facebook" href="https://www.facebook.com/profile.php?id=61588185579449" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i><span></span></a></li>
                        <li><a class="twitter" href="https://x.com/_ajaykumar_s" target="_blank"><i
                                    class="fa-brands fa-x-twitter"></i><span></span></a></li>
                        <li><a class="instagram" href="https://www.instagram.com/ajaykumar_sarnaik/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i><span></span></a></li>
                    </ul>
                </div>
                <p class="text-white opacity-5 fs-13 mb-0 mt-3">&copy; <?php echo date('Y'); ?> Ajaykumar Sarnaik | Indian National Congress.</p>
            </div>

            <!-- KPCC Logo Centered -->
            <div class="col-lg-4 col-md-12 text-center md-mb-30px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 200, "easing": "easeOutQuad" }'>
                <a href="https://inckarnataka.in/" target="_blank" class="d-inline-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/kpcc-logo.png" 
                         alt="KPCC Official" 
                         style="height: 90px; filter: drop-shadow(0 0 10px rgba(255,255,255,0.1)); transition: all 0.3s ease;"
                         onmouseover="this.style.transform='scale(1.1)'; this.style.filter='brightness(1.2) drop-shadow(0 0 15px rgba(255,255,255,0.2))';" 
                         onmouseout="this.style.transform='scale(1)'; this.style.filter='drop-shadow(0 0 10px rgba(255,255,255,0.1))';">
                </a>
                <span class="d-block text-white opacity-3 fs-9 mt-2 text-uppercase ls-1px">Karnataka Pradesh Congress Committee</span>
            </div>

            <!-- Contact Office -->
            <div class="col-lg-4 col-md-6 text-center text-lg-end">
                <span class="d-block text-white fs-15 ls-1px mb-20px text-uppercase fw-600 mt-0">Contact Office</span>
                <p class="text-white opacity-8 mb-1">District Congress Office,<br>Kaulpet, Bagalkote, Karnataka 587101.</p>
                <a href="mailto:office@ajaykumarsarnaik.com"
                    class="text-white text-decoration-underline opacity-8 mb-20px d-inline-block">office@ajaykumarsarnaik.com</a>
                <p class="text-white opacity-8 mb-0 mt-2">Helpline: <a href="tel:+919845352310" class="text-white text-white-hover">+91 98453 52310</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->

<!-- WhatsApp Widget -->
<div class="chat-widget wa-widget" id="waWidget">
    <button class="chat-fab wa-fab" id="waToggle" onclick="toggleChat('wa')" title="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
        <span class="chat-pulse"></span>
    </button>
    <div class="chat-window wa-window" id="waWindow">
        <div class="chat-header wa-header">
            <div class="chat-header-avatar wa-avatar">
                <i class="fa-brands fa-whatsapp"></i>
            </div>
            <div class="chat-header-info">
                <div class="chat-header-name">Ajaykumar Helpline</div>
                <div class="chat-header-status"><span class="online-dot"></span> Typically replies in minutes</div>
            </div>
            <button class="chat-close-btn" onclick="toggleChat('wa')"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="chat-body" id="waBody">
            <div class="chat-date-divider">Today</div>
            <div class="chat-bubble incoming">
                <p>🙏 Namaste!</p>
                <p>Welcome to the official helpline of Shri Ajaykumar Sarnaik. How may we assist you today?</p>
                <span class="chat-time">Just now</span>
            </div>
            <div class="quick-btns-wrap">
                <button class="quick-btn wa-quick-btn" onclick="waQuickReply('Biography')">📜 Biography</button>
                <button class="quick-btn wa-quick-btn" onclick="waQuickReply('Focus Areas')">🚀 Focus Areas</button>
                <button class="quick-btn wa-quick-btn" onclick="waQuickReply('Constituency Office')">🏛️ Office</button>
                <button class="quick-btn wa-quick-btn" onclick="waQuickReply('Join Movement')">🤝 Join Us</button>
            </div>
        </div>
        <div class="chat-footer wa-footer">
            <a href="https://wa.me/919845352310?text=Namaste!%20I%20would%20like%20to%20know%20more%20about%20Shri%20Ajaykumar%20Sarnaik vision." target="_blank" class="wa-open-btn">
                <i class="fa-brands fa-whatsapp me-2"></i> Open in WhatsApp
            </a>
        </div>
    </div>
</div>

<!-- Janmitra AI Widget -->
<div class="chat-widget ai-widget" id="aiWidget">
    <button class="chat-fab ai-fab" id="aiToggle" onclick="toggleChat('ai')" title="Chat with Janmitra AI">
        <i class="fa-solid fa-robot"></i>
        <span class="chat-pulse ai-pulse"></span>
    </button>
    <div class="chat-window ai-window" id="aiWindow">
        <div class="chat-header ai-header">
            <div class="chat-header-avatar ai-avatar">
                <i class="fa-solid fa-robot"></i>
            </div>
            <div class="chat-header-info">
                <div class="chat-header-name">Janmitra AI <span class="beta-badge">Beta</span></div>
                <div class="chat-header-status"><span class="online-dot"></span> Your Digital Aide</div>
            </div>
            <button class="chat-close-btn" onclick="toggleChat('ai')"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="chat-body" id="aiBody">
            <div class="chat-date-divider">Powered by Janmitra AI</div>
            <div class="chat-bubble incoming ai-bubble">
                <p>🙏 Jai Hind! I am <strong>Janmitra</strong>, your AI assistant for any information regarding Shri Ajaykumar Sarnaik.</p>
                <p>How can I help you today?</p>
                <span class="chat-time">Just now</span>
            </div>
            <div class="quick-btns-wrap">
                <button class="quick-btn" onclick="aiQuickReply('Who is Ajaykumar Sarnaik?')">👤 Who is he?</button>
                <button class="quick-btn" onclick="aiQuickReply('Tell me about BDCC Bank')">🏦 BDCC Bank</button>
                <button class="quick-btn" onclick="aiQuickReply('Political journey')">⚖️ Journey</button>
            </div>
        </div>
        <div class="chat-footer ai-footer">
            <input type="text" class="ai-input" id="aiInput" placeholder="Ask Janmitra anything..." onkeydown="if(event.key==='Enter') sendAiMessage()">
            <button class="ai-send-btn" onclick="sendAiMessage()"><i class="fa-solid fa-paper-plane"></i></button>
        </div>
    </div>
</div>

<?php 
// Include the mobile bottom bar
include get_template_directory() . '/mobile-bottom-bar.php'; 
?>

<?php wp_footer(); ?>

<script>
    // Manual initialization to ensure Swiper works correctly
    if(typeof jQuery !== 'undefined') {
        jQuery(document).ready(function ($) {
            setTimeout(function () {
                var swiperEl = document.querySelector('[data-slider-options]');
                if (swiperEl && typeof Swiper === 'function') {
                    if (!swiperEl.swiper) {
                        try {
                            var options = JSON.parse(swiperEl.getAttribute('data-slider-options'));
                            new Swiper(swiperEl, options);
                            console.log('Slider manually initialized');
                        } catch(e) {
                            console.error('Error initializing Swiper:', e);
                        }
                    }
                } else {
                    console.log('Swiper element not found or Swiper function not defined');
                }
            }, 500);
        });
    }
</script>
</body>
</html>
