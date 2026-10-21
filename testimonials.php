<?php include 'header.php'; ?>

<?php
/* ==========================================
   INDEX NEW FIFTH SECTION
   ALL 4 CLIENT TESTIMONIALS
========================================== */

$infiveTestimonials = [
    [
        'quote' => "One of the Best Physiotherapy hospital in Kakinada, They have relieved my back pain, they are really magician for relief any kind of joint pain I don't have enough words for thanking to team in smart Physiotherapy hospital.",
        'name' => 'Satya Devi',
        'role' => 'Teacher'
    ],
    [
        'quote' => "It was very wonderfull physio center for all sports man's and all people prasanna sir tq really my student now running because of your physio center tq tq to all smart physio care kakinada",
        'name' => 'Santhosh Athlet',
        'role' => 'Real Estate'
    ],
    [
        'quote' => "Excellent physiotherapy centre, Treatment here is one of the best...and doctor here is really friendly.",
        'name' => 'Raj',
        'role' => 'Bank Employee'
    ],
    [
        'quote' => "Wonderful sports & rehab center in Kakinada! Thanks to Smart Physio Care's professional doctors and detailed recovery plan, my student recovered super fast and is running again.",
        'name' => 'Sravish Nalam',
        'role' => 'Athletic Trainer'
    ]
];
?>

<!-- ==========================================
     INDEX NEW FIFTH SECTION
     PREMIUM CLIENT TESTIMONIALS
========================================== -->

<section class="index_new_fifth_section" id="index_new_fifth_section">

    <div class="infive-ambient infive-ambient-one" aria-hidden="true"></div>
    <div class="infive-ambient infive-ambient-two" aria-hidden="true"></div>
    <div class="infive-pattern" aria-hidden="true"></div>

    <div class="container infive-container">

        <div class="infive-main-card">

            <div class="row align-items-center g-4 g-xl-5">

                <!-- LEFT VISUAL COLUMN -->
                <div class="col-12 col-lg-5">

                    <div class="infive-visual">

                        <div class="infive-image-orbit" aria-hidden="true"></div>

                        <div class="infive-image-frame">

                            <div class="infive-image-inner">

                                <!-- Replace with actual testimonial illustration -->
                                <img
                                    src="assets/images/tinified/im5.webp"
                                    alt="Client sharing a testimonial"
                                    class="infive-illustration"
                                    loading="lazy"
                                    onerror="this.hidden=true">

                                <!-- Fallback when image is unavailable -->
                                <div class="infive-illustration-fallback"
                                     aria-hidden="true">
                                    <i class="bi bi-chat-heart-fill"></i>
                                </div>

                            </div>

                        </div>

                        <div class="infive-floating-quote" aria-hidden="true">
                            <i class="bi bi-quote"></i>
                        </div>

                        <span class="infive-particle infive-particle-one"></span>
                        <span class="infive-particle infive-particle-two"></span>

                    </div>

                </div>

                <!-- RIGHT CONTENT COLUMN -->
                <div class="col-12 col-lg-7">

                    <div class="infive-content">

                        <div class="infive-eyebrow">
                            <span class="infive-eyebrow-dot"></span>
                            <span>CLIENTS TESTIMONIALS</span>
                            <span class="infive-eyebrow-line"></span>
                        </div>

                        <h2 class="infive-heading">
                            What Our
                            <span>Clients Say</span>
                        </h2>

                        <p class="infive-intro">
                            Experiences shared by the people we care for.
                        </p>

                        <!-- TESTIMONIAL SLIDER -->
                        <div class="infive-review-panel">

                            <div class="infive-review-glow" aria-hidden="true"></div>

                            <div class="swiper infive-testimonial-swiper">

                                <div class="swiper-wrapper">

                                    <?php foreach ($infiveTestimonials as $review): ?>

                                    <div class="swiper-slide">

                                        <article class="infive-review">

                                            <div class="infive-review-symbol" aria-hidden="true">
                                                <i class="bi bi-quote"></i>
                                            </div>

                                            <blockquote class="infive-review-text">
                                                <?php echo htmlspecialchars($review['quote'], ENT_QUOTES, 'UTF-8'); ?>
                                            </blockquote>

                                            <div class="infive-review-bottom">

                                                <div class="infive-author">

                                                    <div class="infive-author-avatar"
                                                         aria-hidden="true">
                                                        <i class="bi bi-person-fill"></i>
                                                    </div>

                                                    <div class="infive-author-info">

                                                        <h3>
                                                            <?php echo htmlspecialchars($review['name'], ENT_QUOTES, 'UTF-8'); ?>
                                                        </h3>

                                                        <span>
                                                            <?php echo htmlspecialchars($review['role'], ENT_QUOTES, 'UTF-8'); ?>
                                                        </span>

                                                    </div>

                                                </div>

                                            </div>

                                        </article>

                                    </div>

                                    <?php endforeach; ?>

                                </div>

                            </div>

                            <!-- SLIDER CONTROLS -->
                            <div class="infive-controls">

                                <button type="button"
                                        class="infive-prev"
                                        aria-label="Previous testimonial">
                                    <i class="bi bi-arrow-left"></i>
                                </button>

                                <button type="button"
                                        class="infive-next"
                                        aria-label="Next testimonial">
                                    <i class="bi bi-arrow-right"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- END INDEX NEW FIFTH SECTION -->

<?php include 'footer.php'; ?>