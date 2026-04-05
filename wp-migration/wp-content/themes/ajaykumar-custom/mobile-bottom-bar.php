<!-- Mobile Bottom Navigation (Self-Healing & Feedback Refined) -->
<div class="mobile-bottom-bar d-lg-none">
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center justify-content-between text-center g-0">
            
            <div class="col bottom-nav-item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link-bottom">
                    <div class="nav-icon"><i class="bi bi-house-door-fill"></i></div>
                </a>
            </div>

            <div class="col bottom-nav-item">
                <a href="javascript:void(0);" onclick="history.back();" class="nav-link-bottom">
                    <div class="nav-icon"><i class="bi bi-arrow-left-circle-fill"></i></div>
                </a>
            </div>

            <div class="col bottom-nav-item">
                <a href="javascript:void(0);" onclick="openWhatsApp();" class="nav-link-bottom whatsapp-nav">
                    <div class="nav-icon-center"><i class="bi bi-whatsapp"></i></div>
                </a>
            </div>

            <div class="col bottom-nav-item">
                <a href="javascript:void(0);" onclick="toggleChatbot();" class="nav-link-bottom">
                    <div class="nav-icon"><i class="bi bi-chat-right-dots-fill"></i></div>
                </a>
            </div>

            <div class="col bottom-nav-item">
                <a href="javascript:void(0);" onclick="toggleMobileMenu(event);" class="nav-link-bottom">
                    <div class="nav-icon toggler-icon"><i class="bi bi-grid-fill"></i></div>
                </a>
            </div>

        </div>
    </div>
</div>

<script>
    function toggleMobileMenu(event) {
        if (event) {
            event.preventDefault();
            event.stopPropagation();
        }
        
        // Target only the original menu (unified across all pages)
        var menu = document.getElementById('navbarNav');
                   
        if (menu) {
            var isOpen = menu.classList.contains('show');
            
            // Toggle the 'show' class
            if (isOpen) {
                menu.classList.remove('show');
                document.body.classList.remove('mobile-menu-open');
            } else {
                menu.classList.add('show');
                document.body.classList.add('mobile-menu-open');
            }
            
            // Update icon
            var icon = document.querySelector('.toggler-icon i');
            if (menu.classList.contains('show')) {
                if(icon) icon.className = 'bi bi-x-circle-fill';
            } else {
                if(icon) icon.className = 'bi bi-grid-fill';
            }
        }
    }

    function toggleChatbot() {
        if (typeof toggleChat === 'function') {
            toggleChat('ai');
        }
    }

    function openWhatsApp() {
        if (typeof toggleChat === 'function') {
            toggleChat('wa');
        } else {
            window.open("https://wa.me/919999999999", "_blank");
        }
    }
</script>
