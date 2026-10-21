<?php include 'header.php'; ?>

<?php
/**
 * Service Section : Frozen Shoulder
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
$clinic_title = 'Frozen Shoulder Treatment Center Kakinada';

$phones = [
    '+91-7730044533',
    '+91-9121675661'
];

$section_img = 'assets/images/Frozen Shoulders.webp';


// Frozen Shoulder Occurs
$frozen_shoulder_occurs = [
    [
        'icon' => 'bi-bandaid',
        'text' => 'After surgery or injury'
    ],
    [
        'icon' => 'bi-person',
        'text' => 'Most often in people 40 to 70 years old'
    ],
    [
        'icon' => 'bi-gender-female',
        'text' => 'More often in women, especially postmenopausal women'
    ],
    [
        'icon' => 'bi-heart-pulse',
        'text' => 'Most often in people with chronic diseases'
    ],
];


// Common Problems
$focus_areas = [
    'Shoulder stiffness',
    'Pain during shoulder movement',
    'Restricted range of motion',
    'Difficulty lifting the arm',
    'Difficulty reaching overhead',
    'Difficulty performing daily activities',
    'Progressive loss of shoulder mobility',
    'Pain caused by hardened shoulder capsule and surrounding tissues'
];


// Physiotherapy Goals
$treatments = [
    [
        'title' => 'Restore Shoulder Mobility',
        'text'  => 'Physiotherapy focuses on gradually improving the range of motion of the shoulder joint.'
    ],
    [
        'title' => 'Reduce Pain',
        'text'  => 'Treatment aims to reduce shoulder discomfort and make movement more comfortable.'
    ],
    [
        'title' => 'Improve Flexibility',
        'text'  => 'Exercises and guided movement help improve flexibility of the shoulder capsule and surrounding tissues.'
    ],
    [
        'title' => 'Improve Daily Function',
        'text'  => 'Rehabilitation helps improve shoulder movement required for normal day-to-day activities.'
    ],
];
?>


<section class="service_new_common_section" id="frozen-shoulder-service">

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
                    What is
                    <span>Frozen Shoulder?</span>
                </h2>

                <span class="service_new_common_section__underline"></span>


                <p class="service_new_common_section__text">
                    Adhesive capsulitis, commonly known as
                    <strong>frozen shoulder</strong>, is a condition that causes
                    stiffness, discomfort and a limited range of movement in
                    the shoulder.
                </p>


                <p class="service_new_common_section__text">
                    The condition may develop after an injury or when the
                    shoulder is not moved normally for a period of time.
                    Movement can become increasingly difficult and painful as
                    the shoulder capsule and tissues surrounding the joint
                    become stiff and tight.
                </p>


                <p class="service_new_common_section__text">
                    A frozen shoulder may also develop when you stop using your
                    shoulder because of pain, an accident or a chronic medical
                    condition such as diabetes or arthritis. Maintaining the
                    shoulder's normal range of movement is therefore important.
                </p>

            </div>


            <div class="col-lg-5">

                <div class="service_new_common_section__imgbox">

                    <img
                        src="<?= htmlspecialchars($section_img) ?>"
                        alt="Frozen Shoulder Treatment at <?= htmlspecialchars($clinic_name) ?>"
                        class="img-fluid"
                        loading="lazy"
                    >


                    <div class="service_new_common_section__badge">

                        <i class="bi bi-person-arms-up"></i>

                        <span>
                            Frozen Shoulder<br>
                            Physiotherapy
                        </span>

                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 2. FROZEN SHOULDER OCCURS ============ -->
        <div class="service_new_common_section__block">

            <h3 class="service_new_common_section__subtitle">
                Frozen Shoulder
                <span>commonly occurs</span>
            </h3>


            <div class="row g-3 g-lg-4">

                <?php foreach ($frozen_shoulder_occurs as $item): ?>

                    <div class="col-6 col-md-4">

                        <div class="service_new_common_section__card service_new_common_section__card--center">

                            <div class="service_new_common_section__icon">

                                <i class="bi <?= htmlspecialchars($item['icon']) ?>"></i>

                            </div>


                            <h4 class="service_new_common_section__card_title">

                                <?= htmlspecialchars($item['text']) ?>

                            </h4>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>


            <p class="service_new_common_section__note">

                Frozen shoulder can develop when normal shoulder movement is
                reduced for a prolonged period. Stiffness and pain can gradually
                make everyday movements such as lifting, reaching and dressing
                more difficult.

            </p>

        </div>



        <!-- ============ 3. PROBLEMS / GOALS ============ -->
        <div class="service_new_common_section__block">

            <div class="row g-4 align-items-stretch">


                <div class="col-lg-5">

                    <div class="service_new_common_section__card service_new_common_section__card--highlight h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Shoulder Mobility

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Common problems with
                            <span>Frozen Shoulder</span>

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

                            At
                            <strong><?= htmlspecialchars($clinic_name) ?></strong>,
                            your physiotherapist can assess your shoulder pain,
                            stiffness and range of motion before planning a
                            suitable rehabilitation program.

                        </p>

                    </div>

                </div>



                <!-- ============ 4. PHYSIOTHERAPY TREATMENT ============ -->
                <div class="col-lg-7">

                    <div class="service_new_common_section__card h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Treatment

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Physiotherapy for
                            <span>Frozen Shoulder</span>

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

                            The aim of physiotherapy is to gradually improve
                            shoulder mobility, reduce stiffness and discomfort,
                            and help you return to normal daily activities with
                            greater ease.

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

                        Start improving your
                        <span>shoulder movement</span>

                    </h3>


                    <p class="service_new_common_section__text mb-0">

                        If you are experiencing shoulder stiffness, pain or a
                        restricted range of motion,
                        <strong><?= htmlspecialchars($clinic_name) ?></strong>
                        can help you begin an appropriate physiotherapy
                        treatment program for frozen shoulder.

                        To schedule an appointment, please call us.

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