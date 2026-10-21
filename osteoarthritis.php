<?php include 'header.php'; ?>

<?php
/**
 * Service Section : Osteoarthritis
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
$clinic_title = 'Osteoarthritis Physiotherapy Center Kakinada';

$phones = [
    '+91-7730044533',
    '+91-9121675661'
];

$section_img = 'assets/images/Osteoarthritis.webp';


// Risk Factors / What Makes Osteoarthritis Painful
$risk_factors = [
    [
        'icon' => 'bi-person-walking',
        'text' => 'Prolonged positions or activities that repeatedly place stress on the joints'
    ],
    [
        'icon' => 'bi-people',
        'text' => 'Individual factors including sex and age-related influences'
    ],
    [
        'icon' => 'bi-heart-pulse',
        'text' => 'Smoking, obesity, lack of overall fitness and previous joint injuries'
    ],
    [
        'icon' => 'bi-emoji-frown',
        'text' => 'Psychological factors such as stress, depression and anxiety'
    ],
];


// Osteoarthritis Problems / Symptoms
$focus_areas = [
    'Joint pain',
    'Loss of joint function',
    'Reduced muscle strength around the affected joint',
    'Reduced flexibility',
    'Restricted mobility',
    'Difficulty performing daily activities',
    'Weight gain related to reduced activity',
    'Reduced aerobic capacity',
    'Difficulty using joints efficiently',
    'Reduced overall physical function'
];


// Physiotherapy Management
$treatments = [
    [
        'title' => 'Exercise Therapy',
        'text'  => 'A structured exercise program may include strengthening, mobility and flexibility exercises to improve joint function and physical ability.'
    ],
    [
        'title' => 'Aerobic & Resistance Training',
        'text'  => 'Programs combining aerobic activity and resistance training can help reduce pain and improve physical function.'
    ],
    [
        'title' => 'Assistive Device Training',
        'text'  => 'Physiotherapy can help patients use assistive devices such as canes correctly and safely when required.'
    ],
    [
        'title' => 'Joint Protection & Education',
        'text'  => 'Patients can be taught how to use their joints appropriately and how to manage everyday activities more efficiently.'
    ],
    [
        'title' => 'Hydrotherapy & Swimming',
        'text'  => 'Water-based exercise and swimming may help improve cardiovascular fitness, mobility and flexibility with reduced joint loading.'
    ],
    [
        'title' => 'Pain Management Modalities',
        'text'  => 'Heat therapy, cold therapy and TENS may be used as part of an individualized pain management program.'
    ],
];
?>


<section class="service_new_common_section" id="osteoarthritis-service">

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
                    <span>Osteoarthritis?</span>
                </h2>

                <span class="service_new_common_section__underline"></span>


                <p class="service_new_common_section__text">
                    Osteoarthritis (OA), also known as degenerative joint
                    disease, is the most common form of arthritis and is
                    often described as the wear and tear of joint surfaces.
                </p>


                <p class="service_new_common_section__text">
                    Joint pain and loss of function are common symptoms of
                    osteoarthritis. However, the condition can vary greatly
                    from one person to another and may range from having no
                    noticeable symptoms to becoming a chronic and disabling
                    condition.
                </p>


                <p class="service_new_common_section__text">
                    Osteoarthritis has a wide range of clinical presentations.
                    The severity of symptoms can depend on several physical,
                    lifestyle and psychological factors.
                </p>

            </div>


            <div class="col-lg-5">

                <div class="service_new_common_section__imgbox">

                    <img
                        src="<?= htmlspecialchars($section_img) ?>"
                        alt="Osteoarthritis Physiotherapy at <?= htmlspecialchars($clinic_name) ?>"
                        class="img-fluid"
                        loading="lazy"
                    >


                    <div class="service_new_common_section__badge">

                        <i class="bi bi-activity"></i>

                        <span>
                            Osteoarthritis<br>
                            Physiotherapy
                        </span>

                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 2. RISK FACTORS ============ -->
        <div class="service_new_common_section__block">

            <h3 class="service_new_common_section__subtitle">
                What Makes Osteoarthritis
                <span>Painful?</span>
            </h3>


            <div class="row g-3 g-lg-4">

                <?php foreach ($risk_factors as $factor): ?>

                    <div class="col-6 col-md-4">

                        <div class="service_new_common_section__card service_new_common_section__card--center">

                            <div class="service_new_common_section__icon">

                                <i class="bi <?= htmlspecialchars($factor['icon']) ?>"></i>

                            </div>


                            <h4 class="service_new_common_section__card_title">

                                <?= htmlspecialchars($factor['text']) ?>

                            </h4>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>


            <p class="service_new_common_section__note">

                Osteoarthritis may become painful after physical trauma such as
                a road traffic accident or workplace injury, but the likelihood
                and severity of symptoms can also be influenced by physical,
                lifestyle and psychological risk factors.

            </p>

        </div>



        <!-- ============ 3. PHYSIOTHERAPY GOALS ============ -->
        <div class="service_new_common_section__block">

            <div class="row g-4 align-items-stretch">


                <div class="col-lg-5">

                    <div class="service_new_common_section__card service_new_common_section__card--highlight h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Rehabilitation Goals

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Osteoarthritis physiotherapy
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

                            The main goals of an integrated exercise program are
                            to improve physical, psychological and emotional
                            function while promoting greater overall well-being.

                            Immediate goals may include improving joint movement,
                            muscle strength, aerobic capacity and maintaining an
                            appropriate body weight.

                        </p>

                    </div>

                </div>



                <!-- ============ 4. PHYSIOTHERAPY MANAGEMENT ============ -->
                <div class="col-lg-7">

                    <div class="service_new_common_section__card h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Treatment

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Physiotherapy Management of
                            <span>Osteoarthritis</span>

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

                            Formal physiotherapy can help patients learn suitable
                            exercises, improve mobility and flexibility, strengthen
                            the muscles surrounding affected joints and use
                            assistive equipment correctly where necessary.

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

                        Improve joint movement and
                        <span>manage osteoarthritis</span>

                    </h3>


                    <p class="service_new_common_section__text mb-0">

                        Physiotherapy can play an important role in managing
                        osteoarthritis by improving joint movement, flexibility,
                        muscle strength and cardiovascular fitness while helping
                        patients use their joints more effectively.

                        To begin your osteoarthritis physiotherapy treatment plan
                        at
                        <strong><?= htmlspecialchars($clinic_name) ?></strong>,
                        please call us for an appointment or further information.

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