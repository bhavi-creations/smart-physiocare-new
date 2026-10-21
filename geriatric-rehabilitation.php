<?php include 'header.php'; ?>

<?php
/**
 * Service Section : Geriatric Rehabilitation
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
$clinic_title = 'Geriatric Rehabilitation Center Kakinada';

$phones = [
    '+91-7730044533',
    '+91-9121675661'
];

$section_img = 'assets/images/Geriatric_Physiotherapy.webp';


// Common Age-Related Concerns
$concerns = [
    [
        'icon' => 'bi-person-walking',
        'text' => 'Balance and mobility problems'
    ],
    [
        'icon' => 'bi-exclamation-triangle',
        'text' => 'Increased risk of falls'
    ],
    [
        'icon' => 'bi-activity',
        'text' => 'Reduced strength and physical function'
    ],
    [
        'icon' => 'bi-person-dash',
        'text' => 'Fear of falling and reduced activity'
    ],
    [
        'icon' => 'bi-house',
        'text' => 'Difficulty maintaining independence'
    ],
    [
        'icon' => 'bi-heart-pulse',
        'text' => 'Age-related health conditions affecting mobility'
    ],
];


// Geriatric Rehabilitation Focus Areas
$focus_areas = [
    'Balance training',
    'Gait re-education',
    'Strengthening exercises',
    'Stretching exercises',
    'Functional exercise programs',
    'Mobility improvement',
    'Fall prevention',
    'Improving physical independence',
    'Caregiver and family education',
    'Use of mobility and rehabilitation equipment',
    'Improving overall strength and function',
    'Supporting quality of life and well-being'
];


// Physiotherapy Program Components
$treatments = [
    [
        'title' => 'Balance Training',
        'text'  => 'Specific balance exercises are used to improve stability and help reduce the risk of falls.'
    ],
    [
        'title' => 'Gait Re-education',
        'text'  => 'Physiotherapy can help improve walking patterns, confidence and mobility through supervised gait training.'
    ],
    [
        'title' => 'Strength & Flexibility',
        'text'  => 'Evidence-based strengthening and stretching exercises are prescribed according to the patient’s physical ability and individual needs.'
    ],
    [
        'title' => 'Functional Rehabilitation',
        'text'  => 'Functional exercise programs focus on improving day-to-day activities, mobility and independence.'
    ],
    [
        'title' => 'Caregiver Education',
        'text'  => 'When a patient requires assistance, relatives or caregivers can be educated on safe mobility techniques and the appropriate use of rehabilitation equipment.'
    ],
    [
        'title' => 'Fall Prevention',
        'text'  => 'Rehabilitation focuses on improving strength, balance, mobility and confidence to help reduce the risk of falls.'
    ],
];
?>


<section class="service_new_common_section" id="geriatric-rehabilitation-service">

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
                    Geriatric
                    <span>Physiotherapy</span>
                </h2>

                <span class="service_new_common_section__underline"></span>


                <p class="service_new_common_section__text">
                    Aging is often associated with balance and mobility
                    difficulties, which can increase the risk of falls in older
                    adults.
                </p>


                <p class="service_new_common_section__text">
                    Some people may become less active because of a fear of
                    falling. Reduced activity can gradually lead to a decline in
                    strength, mobility and overall physical function.
                </p>


                <p class="service_new_common_section__text">
                    Aging may also be associated with health conditions that
                    affect a person's ability to function independently.
                    Geriatric physiotherapy can help improve mobility, strength,
                    balance and confidence while supporting independence and
                    quality of life.
                </p>

            </div>


            <div class="col-lg-5">

                <div class="service_new_common_section__imgbox">

                    <img
                        src="<?= htmlspecialchars($section_img) ?>"
                        alt="Geriatric Physiotherapy at <?= htmlspecialchars($clinic_name) ?>"
                        class="img-fluid"
                        loading="lazy"
                    >


                    <div class="service_new_common_section__badge">

                        <i class="bi bi-person-heart"></i>

                        <span>
                            Geriatric<br>
                            Rehabilitation
                        </span>

                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 2. COMMON CONCERNS ============ -->
        <div class="service_new_common_section__block">

            <h3 class="service_new_common_section__subtitle">
                Common age-related
                <span>mobility concerns</span>
            </h3>


            <div class="row g-3 g-lg-4">

                <?php foreach ($concerns as $concern): ?>

                    <div class="col-6 col-md-4">

                        <div class="service_new_common_section__card service_new_common_section__card--center">

                            <div class="service_new_common_section__icon">

                                <i class="bi <?= htmlspecialchars($concern['icon']) ?>"></i>

                            </div>


                            <h4 class="service_new_common_section__card_title">

                                <?= htmlspecialchars($concern['text']) ?>

                            </h4>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>


            <p class="service_new_common_section__note">

                Because every person is different, each patient is carefully
                assessed so that their physical abilities, needs and expectations
                can be understood before creating a personalized geriatric
                rehabilitation program.

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

                            Geriatric physiotherapy
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

                            At
                            <strong><?= htmlspecialchars($clinic_name) ?></strong>,
                            our physiotherapy team carefully evaluates each
                            patient's mobility, strength, balance and functional
                            needs before developing a rehabilitation program
                            suited to them.

                        </p>

                    </div>

                </div>



                <!-- ============ 4. PHYSIOTHERAPY PROGRAM ============ -->
                <div class="col-lg-7">

                    <div class="service_new_common_section__card h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Treatment

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Geriatric rehabilitation
                            <span>may include</span>

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

                            Geriatric physiotherapy aims to prevent falls and
                            improve independence and well-being by improving
                            physical function, mobility and strength.

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

                        Stay active, confident and
                        <span>independent</span>

                    </h3>


                    <p class="service_new_common_section__text mb-0">

                        If you or a family member needs geriatric rehabilitation,
                        our physiotherapy team at
                        <strong><?= htmlspecialchars($clinic_name) ?></strong>
                        can provide an individualized assessment and rehabilitation
                        program based on mobility, strength, balance and daily
                        functional needs.

                        To schedule a consultation with our physiotherapist,
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