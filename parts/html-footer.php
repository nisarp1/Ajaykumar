<!-- javascript libraries -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/vendors.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<?php include 'parts/mobile-bottom-bar.php'; ?>
<script type="text/javascript" src="js/chat-widgets.js"></script>
<script>
    // Manual initialization to ensure Swiper works correctly
    $(document).ready(function () {
        setTimeout(function () {
            var swiperEl = document.querySelector('[data-slider-options]');
            if (swiperEl && typeof Swiper === 'function') {
                if (!swiperEl.swiper) {
                    var options = JSON.parse(swiperEl.getAttribute('data-slider-options'));
                    new Swiper(swiperEl, options);
                    console.log('Slider manually initialized');
                }
            }
        }, 500);
    });
</script>
</body>
</html>