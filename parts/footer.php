<!-- start subscription section -->
<section class="py-3 bg-transparent border-top border-color-extra-medium-gray">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 text-center d-lg-flex align-items-center justify-content-center">
                <h5 class="alt-font fw-600 mb-0 me-lg-4 text-royal-blue">Subscribe to Official Updates
                </h5>
                <form class="d-flex position-relative w-400px mx-auto mx-lg-0 sm-w-100 bg-transparent">
                    <input class="form-control bg-transparent border-color-extra-medium-gray text-royal-blue"
                        type="email" placeholder="Enter your email address" style="background: transparent !important;">
                    <button
                        class="btn btn-medium bg-transparent text-royal-blue border border-1 border-color-extra-medium-gray fw-600 border-radius-right-4px w-60px"
                        type="submit"><i class="bi bi-arrow-right"></i></button>
                </form>
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
        <div class="row justify-content-between">
            <!-- Col 1 -->
            <div class="col-lg-4 col-md-12 text-center text-lg-start md-mb-30px">
                <a href="index.php" class="footer-logo d-inline-block text-decoration-none mb-3">
                    <span class="fs-24 fw-700 text-white text-nowrap alt-font">Ajaykumar
                        Sarnaik <img src="images/new/hand.png" alt=""
                            class="ms-2 position-relative bg-white rounded-circle p-5px"
                            style="height: 45px; max-height: 45px !important; top: -3px;"></span>
                </a>
                <p class="text-white opacity-6 lh-26 w-80 lg-w-100">Former Minister & MP.
                    Dedicated to the progress and prosperity of Bagalkot and Karnataka.</p>
                <div class="elements-social social-icon-style-09 mt-3">
                    <ul class="medium-icon light">
                        <li><a class="facebook" href="javascript:void(0);" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i><span></span></a></li>
                        <li><a class="twitter" href="javascript:void(0);" target="_blank"><i
                                    class="fa-brands fa-twitter"></i><span></span></a></li>
                        <li><a class="instagram" href="javascript:void(0);" target="_blank"><i
                                    class="fa-brands fa-instagram"></i><span></span></a></li>
                    </ul>
                </div>
            </div>

            <!-- Col 2 -->
            <div class="col-lg-2 col-md-6 text-center text-lg-start sm-mb-30px">
                <span class="d-block text-white fs-15 ls-1px mb-20px text-uppercase fw-600">Explore</span>
                <ul class="footer-navbar fs-16 lh-30 text-white p-0 list-style-none">
                    <li><a href="index.php#biography" class="text-white opacity-8 text-white-hover">Biography</a>
                    </li>
                    <li><a href="index.php#focus" class="text-white opacity-8 text-white-hover">Focus
                            Areas</a></li>
                    <li><a href="index.php#legislative" class="text-white opacity-8 text-white-hover">Legislative</a>
                    </li>
                    <li><a href="index.php#contact" class="text-white opacity-8 text-white-hover">Contact</a></li>
                </ul>
            </div>

            <!-- Col 3 -->
            <div class="col-lg-3 col-md-6 text-center text-lg-start">
                <span class="d-block text-white fs-15 ls-1px mb-20px text-uppercase fw-600">Contact</span>
                <p class="text-white opacity-8 mb-1">Bagalkot Constituency, Karnataka</p>
                <a href="mailto:contact@ajaykumarsarnaik.com"
                    class="text-white text-decoration-underline opacity-8 mb-20px d-inline-block">contact@ajaykumarsarnaik.com</a>
                <p class="text-white opacity-5 fs-14 mb-0 mt-3">&copy; 2026 Ajaykumar Sarnaik |
                    Indian National Congress.</p>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->

<!-- ========================================================
     WHATSAPP CHATBOT (Bottom Left)
======================================================== -->
<div class="chat-widget wa-widget" id="waWidget">
    <!-- Trigger Button -->
    <button class="chat-fab wa-fab" id="waToggle" onclick="toggleChat('wa')" title="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
        <span class="chat-pulse"></span>
    </button>
    <!-- Chat Window -->
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
            <a href="https://wa.me/919999999999?text=Namaste!%20I%20would%20like%20to%20know%20more%20about%20Shri%20Ajaykumar%20Sarnaik's%20vision." target="_blank" class="wa-open-btn">
                <i class="fa-brands fa-whatsapp me-2"></i> Open in WhatsApp
            </a>
        </div>
    </div>
</div>

<!-- ========================================================
     JANMITRA AI CHATBOT (Bottom Right)
======================================================== -->
<div class="chat-widget ai-widget" id="aiWidget">
    <!-- Trigger Button -->
    <button class="chat-fab ai-fab" id="aiToggle" onclick="toggleChat('ai')" title="Chat with Janmitra AI">
        <i class="fa-solid fa-robot"></i>
        <span class="chat-pulse ai-pulse"></span>
    </button>
    <!-- Chat Window -->
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