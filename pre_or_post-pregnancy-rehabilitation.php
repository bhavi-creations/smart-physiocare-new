<?php include 'header.php'; ?>

<?php
/**
 * Service Section : Pre/Post-Pregnancy Rehabilitation
 * Wrapper class  : service_new_common_section
 *
 * Requires:
 * - Bootstrap 5 CSS/JS
 * - Bootstrap Icons
 * - Poppins font
 * - service_new_common_section.css
 */

// ---------- Editable data ----------
$clinic_name  = 'SMART PHYSIO CARE';
$clinic_title = 'Pre/Post-Pregnancy Rehabilitation Center Kakinada';

$phones = [
    '+91-7730044533',
    '+91-9121675661'
];

$section_img = 'assets/images/pre or post ptegnancy.webp';


// Common Pregnancy-Related Conditions
$conditions = [
    [
        'icon' => 'bi-person-standing',
        'text' => 'Hip Pain'
    ],
    [
        'icon' => 'bi-bandaid',
        'text' => 'Back Pain'
    ],
    [
        'icon' => 'bi-hand-index',
        'text' => 'Carpal Tunnel'
    ],
    [
        'icon' => 'bi-lightning',
        'text' => 'Sciatica'
    ],
    [
        'icon' => 'bi-person-arms-up',
        'text' => 'Symphysis Pubis Dysfunction'
    ],
    [
        'icon' => 'bi-droplet',
        'text' => 'Stress Incontinence'
    ],
    [
        'icon' => 'bi-heart-pulse',
        'text' => 'Physical and emotional stresses of pregnancy and labour'
    ],
    [
        'icon' => 'bi-activity',
        'text' => 'Weakness in pelvic floor muscles'
    ],
];


// Physiotherapy Focus Areas
$focus_areas = [
    'Assessment of pregnancy-related musculoskeletal changes',
    'Pain and discomfort management',
    'Improving mobility and movement',
    'Pelvic floor strengthening',
    'Postural correction and support',
    'Gentle pregnancy-safe exercise',
    'Postpartum rehabilitation',
    'Improving strength after childbirth',
    'Supporting return to normal daily activities',
    'Education and guidance before and after pregnancy',
    'Improving physical confidence',
    'Supporting overall physical and emotional well-being'
];


// How SMART Physio Care Can Help
$treatments = [
    [
        'title' => 'Musculoskeletal Assessment',
        'text'  => 'Our physiotherapists assess the physical and musculoskeletal changes that occur during pregnancy and identify issues affecting movement, comfort and function.'
    ],
    [
        'title' => 'Pain & Mobility Management',
        'text'  => 'Different physiotherapy techniques can be used to improve movement, restore function and address discomfort that may arise during pregnancy or after childbirth.'
    ],
    [
        'title' => 'Pregnancy Exercise Programs',
        'text'  => 'Gentle exercise programs are designed specifically for pregnancy to support mobility, strength and both physical and emotional well-being.'
    ],
    [
        'title' => 'Postpartum Rehabilitation',
        'text'  => 'After childbirth, rehabilitation can help improve strength, mobility, pelvic floor function and confidence as the body adapts to new physical demands.'
    ],
    [
        'title' => 'Women’s Health Support',
        'text'  => 'Our team understands the physical changes and sensitivities that can occur before, during and after pregnancy and provides appropriate guidance and support.'
    ],
    [
        'title' => 'Education & Guidance',
        'text'  => 'Personalized guidance helps expecting and new mothers understand safe movement, exercise and rehabilitation strategies during this important stage of life.'
    ],
];
?>


<section class="service_new_common_section" id="pre-post-pregnancy-rehabilitation-service">

    <!-- decorative background -->
    <span class="service_new_common_section__glow service_new_common_section__glow--one"></span>
    <span class="service_new_common_section__glow service_new_common_section__glow--two"></span>
    <span class="service_new_common_section__dots"></span>


    <div class="container position-relative">


        <!-- ============ 1. INTRO ============ -->
        <div class="row align-items-center g-4 g-lg-5">

            <div class="col-lg-7">

                <div class="service_new_common_section__label">
                    <span class="service_new_common_section__line"></span>
                    <?= htmlspecialchars($clinic_title) ?>
                </div>


                <h2 class="service_new_common_section__title">
                    Pre/Post-Pregnancy
                    <span>Rehabilitation</span>
                </h2>

                <span class="service_new_common_section__underline"></span>


                <p class="service_new_common_section__text">
                    Pregnancy is a very special time, but the physical changes
                    that occur during pregnancy can sometimes lead to discomfort,
                    mobility problems and other musculoskeletal issues.
                </p>


                <p class="service_new_common_section__text">
                    Our physiotherapy team at
                    <strong><?= htmlspecialchars($clinic_name) ?></strong>
                    is experienced in assessing and treating pregnancy-related
                    discomfort and mobility difficulties.
                </p>


                <p class="service_new_common_section__text">
                    The birth of a child is a joyful experience, but it can also
                    place significant physical demands on the body as it adjusts
                    after pregnancy and adapts to the needs of a newborn.
                    Understanding these challenges,
                    <strong><?= htmlspecialchars($clinic_name) ?></strong>
                    offers specialized pre- and post-pregnancy rehabilitation
                    programs.
                </p>

            </div>


            <div class="col-lg-5">

                <div class="service_new_common_section__imgbox">

                    <img
                        src="<?= htmlspecialchars($section_img) ?>"
                        alt="Pre and Post Pregnancy Rehabilitation at <?= htmlspecialchars($clinic_name) ?>"
                        class="img-fluid"
                        loading="lazy"
                    >


                    <div class="service_new_common_section__badge">

                        <i class="bi bi-heart-pulse"></i>

                        <span>
                            Pre/Post-Pregnancy<br>
                            Rehabilitation
                        </span>

                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 2. COMMON CONDITIONS ============ -->
        <div class="service_new_common_section__block">

            <h3 class="service_new_common_section__subtitle">
                Common pregnancy-related
                <span>conditions we treat</span>
            </h3>


            <div class="row g-3 g-lg-4">

                <?php foreach ($conditions as $condition): ?>

                    <div class="col-6 col-md-4">

                        <div class="service_new_common_section__card service_new_common_section__card--center">

                            <div class="service_new_common_section__icon">

                                <i class="bi <?= htmlspecialchars($condition['icon']) ?>"></i>

                            </div>


                            <h4 class="service_new_common_section__card_title">

                                <?= htmlspecialchars($condition['text']) ?>

                            </h4>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>


            <p class="service_new_common_section__note">

                Pregnancy and childbirth can affect posture, mobility, strength
                and pelvic floor function in different ways. A personalized
                physiotherapy assessment can help identify the areas that require
                support and rehabilitation.

            </p>

        </div>



        <!-- ============ 3. REHABILITATION FOCUS ============ -->
        <div class="service_new_common_section__block">

            <div class="row g-4 align-items-stretch">


                <div class="col-lg-5">

                    <div class="service_new_common_section__card service_new_common_section__card--highlight h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Rehabilitation Goals

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Pre/Post-Pregnancy physiotherapy
                            <span>focuses on</span>

                        </h3>


                        <ul class="service_new_common_section__list">

                            <?php foreach ($focus_areas as $focus): ?>

                                <li>

                                    <i class="bi bi-check2-circle"></i>

                                    <?= htmlspecialchars($focus) ?>

                                </li>

                            <?php endforeach; ?>

                        </ul>


                        <p class="service_new_common_section__text mb-0">

                            Because every pregnancy and recovery experience is
                            different, our physiotherapists assess each patient
                            individually and develop a rehabilitation program
                            based on their symptoms, movement and physical needs.

                        </p>

                    </div>

                </div>



                <!-- ============ 4. HOW WE CAN HELP ============ -->
                <div class="col-lg-7">

                    <div class="service_new_common_section__card h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Treatment

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            How
                            <span>SMART Physio Care</span>
                            can assist

                        </h3>


                        <div class="row g-2 g-md-3">

                            <?php foreach ($treatments as $treatment): ?>

                                <div class="col-md-6">

                                    <div class="service_new_common_section__focus">

                                        <i class="bi bi-arrow-right-circle"></i>

                                        <span>

                                            <strong>
                                                <?= htmlspecialchars($treatment['title']) ?>:
                                            </strong>

                                            <?= htmlspecialchars($treatment['text']) ?>

                                        </span>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>


                        <p class="service_new_common_section__text mt-4 mb-0">

                            Gentle exercise can provide important physical and
                            emotional benefits during pregnancy and after
                            childbirth. Our rehabilitation programs are designed
                            to provide appropriate support, guidance and
                            education throughout this stage.

                        </p>

                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 5. CTA ============ -->
        <div class="service_new_common_section__cta">

            <div class="row align-items-center g-4">


                <div class="col-lg-7">

                    <h3 class="service_new_common_section__cta_title">

                        Feel supported before and after
                        <span>pregnancy</span>

                    </h3>


                    <p class="service_new_common_section__text mb-0">

                        If you or someone you know could benefit from
                        physiotherapy before or after pregnancy,
                        <strong><?= htmlspecialchars($clinic_name) ?></strong>
                        can provide an individualized assessment and
                        rehabilitation program based on your physical needs.

                        To schedule an appointment with our physiotherapist,
                        please call us.

                    </p>

                </div>



                <div class="col-lg-5">

                    <div class="service_new_common_section__phones">

                        <?php foreach ($phones as $phone): ?>

                            <a
                                href="tel:<?= preg_replace('/[^+\d]/', '', $phone) ?>"
                                class="service_new_common_section__btn"
                            >

                                <span class="service_new_common_section__btn_text">

                                    <i class="bi bi-telephone"></i>

                                    <?= htmlspecialchars($phone) ?>

                                </span>


                                <span class="service_new_common_section__btn_arrow">

                                    <i class="bi bi-arrow-right"></i>

                                </span>

                            </a>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        </div>


    </div>

</section>


<?php include 'footer.php'; ?>