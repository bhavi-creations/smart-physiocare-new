<?php include 'header.php'; ?>

<?php
/**
 * Service Section : Pain Management Physiotherapy
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
$clinic_title = 'Pain Management Physiotherapy Kakinada';

$phones = [
    '+91-7730044533',
    '+91-9121675661'
];

$section_img = 'assets/images/Pain Management.webp';


// Common Pain Conditions
$conditions = [
    [
        'icon' => 'bi-person-standing',
        'text' => 'Back Pain'
    ],
    [
        'icon' => 'bi-person',
        'text' => 'Neck Pain'
    ],
    [
        'icon' => 'bi-head',
        'text' => 'Headaches'
    ],
    [
        'icon' => 'bi-person-arms-up',
        'text' => 'Shoulder Pain'
    ],
    [
        'icon' => 'bi-lightning',
        'text' => 'Nerve Pain'
    ],
    [
        'icon' => 'bi-activity',
        'text' => 'Pelvic Pain & Pelvic Girdle Pain'
    ],
    [
        'icon' => 'bi-bandaid',
        'text' => 'Hip & Knee Pain'
    ],
    [
        'icon' => 'bi-heart-pulse',
        'text' => 'Chest & Rib Pain'
    ],
    [
        'icon' => 'bi-arrow-repeat',
        'text' => 'Repetitive Stress Injuries (RSI)'
    ],
    [
        'icon' => 'bi-person-walking',
        'text' => 'Muscle & Joint Pain'
    ],
];


// Pain Management Focus Areas
$focus_areas = [
    'Prescription of exercise and movement therapy',
    'Posture development and correction',
    'Breathing and relaxation education',
    'Stress management',
    'Sleep advice',
    'Heat and cold therapy',
    'TENS and electrotherapy',
    'Soft tissue massage and stretching',
    'Joint mobilization'
];


// Physiotherapy Treatments
$treatments = [
    [
        'title' => 'Electrotherapy',
        'text'  => 'Electrotherapy techniques may be used to help reduce pain, stimulate tissues and support recovery.'
    ],
    [
        'title' => 'Corrective Exercise',
        'text'  => 'Exercise programs are prescribed according to your condition to improve movement, strength and overall physical function.'
    ],
    [
        'title' => 'Posture Awareness',
        'text'  => 'Postural education and correction can help reduce unnecessary strain and improve the way you move during everyday activities.'
    ],
    [
        'title' => 'Soft Tissue Therapy',
        'text'  => 'Soft tissue massage and stretching may be used to reduce muscular tension, tightness and spasm.'
    ],
    [
        'title' => 'Joint Mobilization',
        'text'  => 'Manual joint mobilization techniques can help improve movement and reduce stiffness and discomfort.'
    ],
    [
        'title' => 'Pain Education',
        'text'  => 'Guidance helps you understand your pain, identify aggravating factors and manage symptoms more confidently in daily life.'
    ],
];
?>


<section class="service_new_common_section" id="pain-management-service">

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
                    Pain Management
                    <span>Physiotherapy</span>
                </h2>

                <span class="service_new_common_section__underline"></span>


                <p class="service_new_common_section__text">
                    Physiotherapists play an important role in the management
                    of both acute and chronic pain. Following a comprehensive
                    assessment, we work with you to develop an individualized
                    treatment plan.
                </p>


                <p class="service_new_common_section__text">
                    The aim is not only to manage your pain but also to identify
                    and address the underlying causes of your symptoms wherever
                    possible, helping reduce the risk of recurrence.
                </p>


                <p class="service_new_common_section__text">
                    Treatment may include electrotherapy, corrective exercises,
                    posture awareness, soft tissue massage, stretching, joint
                    mobilization and practical guidance on how to reduce pain
                    during everyday activities.
                </p>

            </div>


            <div class="col-lg-5">

                <div class="service_new_common_section__imgbox">

                    <img
                        src="<?= htmlspecialchars($section_img) ?>"
                        alt="Pain Management Physiotherapy at <?= htmlspecialchars($clinic_name) ?>"
                        class="img-fluid"
                        loading="lazy"
                    >


                    <div class="service_new_common_section__badge">

                        <i class="bi bi-heart-pulse"></i>

                        <span>
                            Pain Management<br>
                            Physiotherapy
                        </span>

                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 2. COMMON CONDITIONS ============ -->
        <div class="service_new_common_section__block">

            <h3 class="service_new_common_section__subtitle">
                Common conditions
                <span>we treat</span>
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

                At
                <strong><?= htmlspecialchars($clinic_name) ?></strong>,
                we commonly manage conditions including back pain, neck pain,
                headaches, shoulder pain, nerve pain, pelvic pain, hip pain,
                knee pain, chest and rib pain, repetitive stress injuries,
                muscle pain and joint pain.

            </p>

        </div>



        <!-- ============ 3. RECOGNIZING PAIN ============ -->
        <div class="service_new_common_section__block">

            <div class="row g-4 align-items-stretch">


                <div class="col-lg-5">

                    <div class="service_new_common_section__card service_new_common_section__card--highlight h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Recognizing Pain

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Understanding
                            <span>your pain</span>

                        </h3>


                        <ul class="service_new_common_section__list">

                            <li>
                                <i class="bi bi-check2-circle"></i>
                                <strong>Acute Pain:</strong>&nbsp;
                                Temporary pain that may act as a warning sign
                                that something is wrong.
                            </li>

                            <li>
                                <i class="bi bi-check2-circle"></i>
                                <strong>Chronic Pain:</strong>&nbsp;
                                Pain that continues beyond the usual healing
                                period of an injury, commonly lasting more than
                                three to six months.
                            </li>

                            <?php foreach ($focus_areas as $focus): ?>

                                <li>

                                    <i class="bi bi-check2-circle"></i>

                                    <?= htmlspecialchars($focus) ?>

                                </li>

                            <?php endforeach; ?>

                        </ul>


                        <p class="service_new_common_section__text mb-0">

                            Understanding the causes of soft tissue, muscular
                            and joint pain can help you manage symptoms more
                            effectively. Our physiotherapist can also recommend
                            safe movement and exercise based on your condition.

                        </p>

                    </div>

                </div>



                <!-- ============ 4. PAIN MANAGEMENT TREATMENT ============ -->
                <div class="col-lg-7">

                    <div class="service_new_common_section__card h-100">


                        <div class="service_new_common_section__label">

                            <span class="service_new_common_section__line"></span>
                            Treatment

                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">

                            Pain Management
                            <span>Physiotherapy</span>

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

                            At
                            <strong><?= htmlspecialchars($clinic_name) ?></strong>,
                            we take a holistic approach to pain management by
                            addressing both symptoms and contributing factors.

                            A combination of manual therapy, movement and muscle
                            re-education may be used according to your individual
                            assessment and treatment goals.

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

                        Manage your pain and
                        <span>keep moving</span>

                    </h3>


                    <p class="service_new_common_section__text mb-0">

                        Movement and appropriate exercise can play an important
                        role in the management of persistent pain. Our
                        physiotherapist can assess your symptoms, help identify
                        possible causes and create a safe treatment program
                        based on your individual condition.

                        If you would like to know how
                        <strong><?= htmlspecialchars($clinic_name) ?></strong>
                        can help manage your pain, please call us for an
                        appointment or further information.

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