<!-- SMART PHYSIOCARE PREMIUM FOOTER -->
<footer class="footer_new_section" id="footer_new_section">
  <div class="fn-glow fn-glow-left" aria-hidden="true"></div>
  <div class="fn-glow fn-glow-right" aria-hidden="true"></div>
  <img class="fn-shape fn-shape-one" src="assets/images/shape/shape-8.webp" alt="" aria-hidden="true" loading="lazy">
  <img class="fn-shape fn-shape-two" src="assets/images/shape/shape-9.webp" alt="" aria-hidden="true" loading="lazy">

  <div class="container-fluid fn-container">
    <div class="fn-top-grid">
      <!-- Logo: always visible -->
      <div class="fn-column fn-brand-column">
        <a class="fn-brand" href="index.php" aria-label="Smart Physiocare Hospital home">
          <img src="assets/images/white logo.png" alt="Smart Physiocare Hospital" loading="lazy">
        </a>
        <span class="fn-brand-accent" aria-hidden="true"></span>
      </div>

      <!-- Quick links: 992px and above -->
      <div class="fn-column fn-links-column">
        <h3 class="fn-heading">Useful Links</h3>
        <ul class="fn-links">
          <li><a href="services.php"><i class="bi bi-chevron-right" aria-hidden="true"></i>Our Services</a></li>
          <li><a href="about-us.php"><i class="bi bi-chevron-right" aria-hidden="true"></i>About Us</a></li>
          <li><a href="contact-us.php"><i class="bi bi-chevron-right" aria-hidden="true"></i>Contact Us</a></li>
        </ul>
      </div>

      <!-- Address 1: 1200px and above -->
      <div class="fn-column fn-address-one">
        <h3 class="fn-heading">Address 1</h3>
        <a class="fn-address-link" target="_blank" rel="noopener noreferrer" href="https://www.google.com/maps/search/?api=1&amp;query=Smart+Physio+Care+Hospital+Kakinada">
          <i class="bi bi-geo-alt-fill fn-address-icon" aria-hidden="true"></i>
          <span>D.No.2-365, 1st Floor, above Surya Pharmacy, OPP.3rd Battalion Commander Office, APSP-1st Gate, Kakinada-533005, Kakinada., A.P.</span>
        </a>
      </div>

      <!-- Address 2: 1400px and above -->
      <div class="fn-column fn-address-two">
        <h3 class="fn-heading">Address 2</h3>
        <a class="fn-address-link" target="_blank" rel="noopener noreferrer" href="https://www.google.com/maps/search/?api=1&amp;query=Smart+Physio+Care+Hospital+Rajahmundry+Danavaipeta">
          <i class="bi bi-geo-alt-fill fn-address-icon" aria-hidden="true"></i>
          <span>SMART Physiocare Hospital, OPP. Dr.Rajababu Garu ENT Hospital, Danavaipeta, Rajahmundry-533103, E.G.Dt., A.P.</span>
        </a>
      </div>
    </div>

    <div class="fn-bottom">
      <p class="fn-credit">Designed by <a href="https://bhavicreations.com/" target="_blank" rel="noopener noreferrer">Bhavi Creations</a></p>
      <nav class="fn-social" aria-label="Hospital social media">
        <a href="https://www.facebook.com/profile.php?id=100087910616231&amp;is_tour_dismissed=true" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
        <a href="https://twitter.com/sm_physiocare" aria-label="Twitter" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>
        <a href="https://www.linkedin.com/in/smart-physiocare-hospital-326379269/" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.youtube.com/@smphysiocarehospital3672" aria-label="YouTube" target="_blank" rel="noopener noreferrer"><i class="bi bi-youtube"></i></a>
        <a href="https://www.instagram.com/smartphysiocare_hospital/" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
      </nav>
    </div>
  </div>
</footer>

<!-- Optional floating helpers; remove if already present elsewhere in the site -->
<div class="fn-floating-tools" aria-label="Quick actions">
  <a class="fn-whatsapp" href="https://wa.me/917730044533" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp"><i class="bi bi-whatsapp"></i></a>
  <button class="fn-to-top" type="button" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>
</div>
<script>
(function(){
  const topButton = document.querySelector('.fn-to-top');
  if(topButton) topButton.addEventListener('click', function(){
    window.scrollTo({top:0,behavior:window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth'});
  });
})();
</script>
<!-- Bootstrap already included in header.php CSS; load JS once here -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



<script>
document.addEventListener('DOMContentLoaded', function () {
    const section = document.querySelector('.index_new_third_section');
    if (!section) return;

    const tabButtons = section.querySelectorAll('.ints-tab-btn');
    const tabContents = section.querySelectorAll('.ints-tab-content');

    tabButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const currentTab = this.getAttribute('data-tab');

            tabButtons.forEach(function (btn) {
                btn.classList.remove('active');
            });

            tabContents.forEach(function (content) {
                content.classList.remove('active');
            });

            this.classList.add('active');

            const activeContent = section.querySelector('.ints-tab-content[data-tab-content="' + currentTab + '"]');
            if (activeContent) {
                activeContent.classList.add('active');
            }
        });
    });
});
</script>




<!-- Swiper JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const section = document.querySelector(
        '.index_new_fourth_section'
    );

    if (!section || typeof Swiper === 'undefined') return;

    const sliderElement = section.querySelector('.infour-swiper');

    if (!sliderElement) return;

    const reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    const equipmentSwiper = new Swiper(sliderElement, {

        loop: true,

        speed: reducedMotion ? 0 : 750,

        slidesPerView: 1,

        slidesPerGroup: 1,

        spaceBetween: 16,

        centeredSlides: false,

        grabCursor: true,

        watchOverflow: true,

        observer: true,

        observeParents: true,

        autoplay: reducedMotion ? false : {
            delay: 2800,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },

        navigation: {
            nextEl: section.querySelector('.infour-next'),
            prevEl: section.querySelector('.infour-prev')
        },

        pagination: {
            el: section.querySelector('.infour-pagination'),
            clickable: true
        },

        keyboard: {
            enabled: true,
            onlyInViewport: true
        },

        breakpoints: {

            0: {
                slidesPerView: 1,
                spaceBetween: 14
            },

            576: {
                slidesPerView: 1,
                spaceBetween: 18
            },

            768: {
                slidesPerView: 2,
                spaceBetween: 20
            }

        }

    });

    /* Stop unnecessary autoplay on desktop */
    const desktopQuery = window.matchMedia(
        '(min-width: 992px)'
    );

    function updateEquipmentSlider() {

        if (desktopQuery.matches) {
            if (equipmentSwiper.autoplay.running) {
                equipmentSwiper.autoplay.stop();
            }
        } else if (!reducedMotion) {
            equipmentSwiper.update();

            if (!equipmentSwiper.autoplay.running) {
                equipmentSwiper.autoplay.start();
            }
        }
    }

    updateEquipmentSlider();

    window.addEventListener('resize', updateEquipmentSlider);

});
</script>





<!-- FIFTH SECTION TESTIMONIAL SWIPER -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const section = document.querySelector(
        '.index_new_fifth_section'
    );

    if (!section) return;

    const slider = section.querySelector(
        '.infive-testimonial-swiper'
    );

    if (!slider || typeof Swiper === 'undefined') return;

    const slides = slider.querySelectorAll(
        '.swiper-slide'
    );

    const prevButton = section.querySelector('.infive-prev');
    const nextButton = section.querySelector('.infive-next');

    const hasMultiple = slides.length > 1;

    if (!hasMultiple) {
        prevButton.disabled = true;
        nextButton.disabled = true;
        return;
    }

    const reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    new Swiper(slider, {

        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 20,

        loop: true,
        speed: reducedMotion ? 0 : 700,

        autoHeight: true,
        grabCursor: true,

        autoplay: reducedMotion ? false : {
            delay: 4200,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },

        navigation: {
            nextEl: nextButton,
            prevEl: prevButton
        },

        observer: true,
        observeParents: true,

        keyboard: {
            enabled: true,
            onlyInViewport: true
        }
    });

});
</script>





<!-- ==========================================
     SIXTH SECTION DOCTORS SWIPER
========================================== -->

<script>
document.addEventListener('DOMContentLoaded', function () {

    const section = document.querySelector(
        '.index_new_sixth_section'
    );

    if (!section || typeof Swiper === 'undefined') return;

    const sliderElement = section.querySelector(
        '.insix-doctors-swiper'
    );

    if (!sliderElement) return;

    const mobileTabletQuery = window.matchMedia(
        '(max-width: 991.98px)'
    );

    const reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    let doctorsSwiper = null;

    function updateDoctorsSwiper() {

        /* Desktop uses normal equipment-style grid */
        if (!mobileTabletQuery.matches) {

            if (doctorsSwiper && !doctorsSwiper.destroyed) {
                doctorsSwiper.destroy(true, true);
            }

            doctorsSwiper = null;
            return;
        }

        /* Already initialized */
        if (doctorsSwiper && !doctorsSwiper.destroyed) {
            doctorsSwiper.update();
            return;
        }

        doctorsSwiper = new Swiper(sliderElement, {

            loop: true,

            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 16,

            speed: reducedMotion ? 0 : 750,

            centeredSlides: false,
            grabCursor: true,
            watchOverflow: true,

            observer: true,
            observeParents: true,
            resizeObserver: true,

            autoplay: reducedMotion ? false : {
                delay: 3200,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },

            navigation: {
                nextEl: section.querySelector('.insix-next'),
                prevEl: section.querySelector('.insix-prev')
            },

            pagination: {
                el: section.querySelector('.insix-pagination'),
                clickable: true
            },

            keyboard: {
                enabled: true,
                onlyInViewport: true
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 14
                },

                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }
            }

        });

    }

    updateDoctorsSwiper();

    if (mobileTabletQuery.addEventListener) {
        mobileTabletQuery.addEventListener(
            'change',
            updateDoctorsSwiper
        );
    } else {
        mobileTabletQuery.addListener(updateDoctorsSwiper);
    }

    window.addEventListener('resize', function () {
        if (doctorsSwiper && !doctorsSwiper.destroyed) {
            doctorsSwiper.update();
        }
    });

});
</script>


</body>
</html>
