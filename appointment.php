
<?php include 'header.php'; ?>

<!-- ==========================================
     CONTACT NEW FIRST SECTION
     SMART PHYSIOCARE PREMIUM CONTACT PAGE
========================================== -->

<section class="contect_new_first_section"
         id="contect_new_first_section">

    <!-- BACKGROUND DECORATIONS -->
    <div class="cnfs-background-grid" aria-hidden="true"></div>
    <div class="cnfs-glow cnfs-glow-one" aria-hidden="true"></div>
    <div class="cnfs-glow cnfs-glow-two" aria-hidden="true"></div>

    <span class="cnfs-cross cnfs-cross-one" aria-hidden="true">+</span>
    <span class="cnfs-cross cnfs-cross-two" aria-hidden="true">+</span>
    <span class="cnfs-cross cnfs-cross-three" aria-hidden="true">+</span>

    <div class="cnfs-dots cnfs-dots-one" aria-hidden="true"></div>
    <div class="cnfs-dots cnfs-dots-two" aria-hidden="true"></div>
    <div class="cnfs-dots cnfs-dots-three" aria-hidden="true"></div>

    <!-- GLOWING TOOTH - TOP RIGHT -->
    <div class="cnfs-tooth cnfs-tooth-right" aria-hidden="true">
        <svg viewBox="0 0 180 210" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M91 26 C57 6 19 24 19 69 C19 103 39 120 47 156 C53 182 64 199 76 178 C84 164 82 136 90 129 C98 136 96 164 104 178 C116 199 127 182 133 156 C141 120 161 103 161 69 C161 24 125 6 91 26Z"
                  stroke="currentColor"
                  stroke-width="4"/>
            <path d="M91 26 C82 34 72 38 61 38"
                  stroke="currentColor" stroke-width="2"/>
            <path d="M91 26 C105 37 116 39 125 38"
                  stroke="currentColor" stroke-width="2"/>
            <circle cx="90" cy="96" r="53"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-dasharray="3 7"/>
        </svg>
    </div>

    <!-- GLOWING TOOTH - BOTTOM LEFT -->
    <div class="cnfs-tooth cnfs-tooth-left" aria-hidden="true">
        <svg viewBox="0 0 180 210" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M91 26 C57 6 19 24 19 69 C19 103 39 120 47 156 C53 182 64 199 76 178 C84 164 82 136 90 129 C98 136 96 164 104 178 C116 199 127 182 133 156 C141 120 161 103 161 69 C161 24 125 6 91 26Z"
                  stroke="currentColor" stroke-width="4"/>
            <path d="M91 26 C82 34 72 38 61 38"
                  stroke="currentColor" stroke-width="2"/>
        </svg>
    </div>

    <!-- BACKGROUND WAVE LINES -->
    <svg class="cnfs-wave-decoration"
         viewBox="0 0 1440 180"
         preserveAspectRatio="none"
         aria-hidden="true">
        <path d="M0 65 C220 195 390 15 610 105 S1040 195 1440 35"
              fill="none" stroke="#34ecff"
              stroke-width="2"/>
        <path d="M0 90 C270 210 390 40 650 125 S1110 175 1440 60"
              fill="none" stroke="#34ecff"
              stroke-opacity=".33"
              stroke-width="1.5"/>
        <path d="M0 115 C220 215 470 50 740 145 S1170 190 1440 85"
              fill="none" stroke="#b9f5ff"
              stroke-opacity=".18"
              stroke-width="1"/>
    </svg>

    <div class="container cnfs-container">

        <div class="row g-4 g-xl-5 align-items-start">

            <!-- =====================================
                 LEFT - CONTACT FORM
            ====================================== -->
            <div class="col-12 col-lg-6">

                <div class="cnfs-form-card">

                    <span class="cnfs-border-shine"
                          aria-hidden="true"></span>

                    <!-- Card upper decorative light -->
                    <div class="cnfs-card-corner-glow"
                         aria-hidden="true"></div>

                    <!-- Small upper hospital label -->
                    <!-- <div class="cnfs-welcome">
                        <span class="cnfs-small-line"></span>
                        <span>Welcome To SMART Physiocare</span>
                    </div> -->

                    <!-- Floating Tooth Graphic -->
                    <div class="cnfs-form-tooth" aria-hidden="true">
                        <span class="cnfs-tooth-orbit"></span>
                        <span class="cnfs-tooth-orbit cnfs-orbit-two"></span>

                        <svg viewBox="0 0 100 120" fill="none">
                            <path d="M50 12C34 2 14 10 10 30C6 49 15 62 22 80C29 100 35 109 42 106C48 103 46 82 50 77C54 82 52 103 58 106C65 109 71 100 78 80C85 62 94 49 90 30C86 10 66 2 50 12Z"
                                  stroke="currentColor"
                                  stroke-width="3"/>
                        </svg>

                        <span class="cnfs-orbit-dot"></span>
                    </div>

                    <!-- Heading -->
                    <div class="cnfs-form-heading">

                        <div class="cnfs-eyebrow">
                            <span class="cnfs-small-line"></span>
                            <span>Book appointment</span>
                        </div>

                        <h1 class="cnfs-title">
                            Get In <span>Touch</span>
                        </h1>

                        <span class="cnfs-title-underline"></span>

                    </div>

                    <!-- CONTACT FORM -->
                    <!-- Connect this form to your existing PHP mail handler -->
                    <form class="cnfs-contact-form"
                          action="appointmentform.php"
                          method="POST">

                        <div class="cnfs-form-group">

                            <label for="cnfs_full_name"
                                   class="visually-hidden">
                                Full Name
                            </label>

                            <div class="cnfs-input-wrapper">

                                <input
                                    type="text"
                                    id="cnfs_full_name"
                                    name="name"
                                    class="cnfs-form-control"
                                    placeholder="Enter Full Name"
                                    autocomplete="name"
                                    maxlength="120"
                                    required>

                                <span class="cnfs-field-icon"
                                      aria-hidden="true">
                                    <i class="bi bi-person"></i>
                                </span>

                            </div>

                        </div>

                        <div class="cnfs-form-group">

                            <label for="cnfs_email"
                                   class="visually-hidden">
                                Email Address
                            </label>

                            <div class="cnfs-input-wrapper">

                                <input
                                    type="email"
                                    id="cnfs_email"
                                    name="email"
                                    class="cnfs-form-control"
                                    placeholder="Enter Email Address"
                                    autocomplete="email"
                                    maxlength="254"
                                    required>

                                <span class="cnfs-field-icon"
                                      aria-hidden="true">
                                    <i class="bi bi-envelope"></i>
                                </span>

                            </div>

                        </div>

                        <div class="cnfs-form-group">

                            <label for="cnfs_message"
                                   class="visually-hidden">
                                Your Message
                            </label>

                            <div class="cnfs-input-wrapper cnfs-textarea-wrapper">

                                <textarea
                                    id="cnfs_message"
                                    name="message"
                                    class="cnfs-form-control cnfs-textarea"
                                    placeholder="Your Message"
                                    rows="6"
                                    maxlength="5000"
                                    required></textarea>

                                <span class="cnfs-field-icon"
                                      aria-hidden="true">
                                    <i class="bi bi-chat-left-dots"></i>
                                </span>

                            </div>

                        </div>

                        <!-- SUBMIT BUTTON -->
                        <div class="cnfs-submit-area">

                            <button type="submit"
                                    class="cnfs-submit-btn">

                                <span>Send Message</span>

                                <span class="cnfs-submit-arrow"
                                      aria-hidden="true">
                                    <i class="bi bi-arrow-right"></i>
                                </span>

                            </button>

                        </div>

                    </form>

                    <div class="cnfs-form-bottom-wave"
                         aria-hidden="true"></div>

                </div>

            </div>

            <!-- =====================================
                 RIGHT - CONTACT DETAILS
            ====================================== -->
            <div class="col-12 col-lg-6">

                <div class="cnfs-contact-details">

                    <!-- Heading -->
                    <div class="cnfs-right-heading">

                        <div class="cnfs-eyebrow">
                            <span class="cnfs-small-line"></span>
                            <span>Book appointment</span>
                        </div>

                        <h2 class="cnfs-title">
                            Get In <span>Touch</span>
                        </h2>

                        <span class="cnfs-title-underline"></span>

                    </div>

                    <div class="cnfs-info-list">

                        <!-- ADDRESS 1 -->
                        <div class="cnfs-info-card">

                            <span class="cnfs-info-shine"
                                  aria-hidden="true"></span>

                            <div class="cnfs-info-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>

                            <div class="cnfs-info-content">

                                <h3>Our Address</h3>

                                <a href="https://www.google.com/maps/search/?api=1&amp;query=Smart+Physio+Care+Hospital+Kakinada"
                                   target="_blank"
                                   rel="noopener noreferrer">

                                    D.No.2-365, 1st Floor,
                                    above Surya Pharmacy,
                                    OPP.3rd Battalion Commander Office,
                                    APSP-1st Gate,
                                    Kakinada-533005,
                                    Kakinada., A.P.

                                </a>

                            </div>

                        </div>

                        <!-- ADDRESS 2 -->
                        <div class="cnfs-info-card">

                            <span class="cnfs-info-shine"
                                  aria-hidden="true"></span>

                            <div class="cnfs-info-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>

                            <div class="cnfs-info-content">

                                <h3>Our Address</h3>

                                <a href="https://www.google.com/maps/search/?api=1&amp;query=Smart+Physio+Care+Hospital+Rajahmundry+Danavaipeta"
                                   target="_blank"
                                   rel="noopener noreferrer">

                                    SMART Physiocare Hospital,
                                    OPP. Dr.Rajababu Garu ENT Hospital,
                                    Danavaipeta,
                                    Rajahmundry-533103,
                                    E.G.Dt., A.P.

                                </a>

                            </div>

                        </div>

                        <!-- PHONE -->
                        <div class="cnfs-info-card">

                            <span class="cnfs-info-shine"
                                  aria-hidden="true"></span>

                            <div class="cnfs-info-icon">
                                <i class="bi bi-telephone"></i>
                            </div>

                            <div class="cnfs-info-content">

                                <h3>Our Phone</h3>

                                <a href="tel:+917730044533">
                                    Mobile : +91-7730044533
                                </a>

                                <a href="tel:+919121675661">
                                    Mobile : +91-9121675661
                                </a>

                            </div>

                        </div>

                        <!-- EMAIL -->
                        <div class="cnfs-info-card">

                            <span class="cnfs-info-shine"
                                  aria-hidden="true"></span>

                            <div class="cnfs-info-icon">
                                <i class="bi bi-envelope-open"></i>
                            </div>

                            <div class="cnfs-info-content">

                                <h3>Our Email</h3>

                                <a href="mailto:smartphysiocarehospital@gmail.com">
                                    Email : smartphysiocarehospital@gmail.com
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- END CONTACT NEW FIRST SECTION -->

<?php include 'footer.php'; ?>
