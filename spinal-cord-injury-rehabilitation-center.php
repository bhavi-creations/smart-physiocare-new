<?php include 'header.php'; ?>

<?php
/**
 * Service Section : Spinal Cord Injury Rehabilitation
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
$clinic_title = 'Physiotherapy for Spinal Cord Injury';

$phones = [
    '+91-7730044533',
    '+91-9121675661'
];

$section_img = 'assets/images/spinal_cord_injury.webp';


// Problems associated with Spinal Cord Injury
$problems = [
    [
        'icon' => 'bi-person-arms-up',
        'text' => 'Muscle weakness / paralysis'
    ],
    [
        'icon' => 'bi-lungs',
        'text' => 'Reduced ability to breathe'
    ],
    [
        'icon' => 'bi-person-walking',
        'text' => 'Loss of general mobility and balance'
    ],
    [
        'icon' => 'bi-activity',
        'text' => 'Loss of functional movement'
    ],
    [
        'icon' => 'bi-person-standing',
        'text' => 'Poor posture'
    ],
    [
        'icon' => 'bi-bandaid',
        'text' => 'Pain'
    ],
];


// Treatment options
$treatments = [
    'Active and passive movements to increase muscle strength, maintain tissue length and range of motion, and prevent muscles and joints from becoming stiff.',

    'Exercises to encourage healthy movement patterns.',

    'Regular standing and weight-bearing activities to improve function and support internal organ health.',

    'Exercises to improve controlled movement of the head, arms, trunk, and legs.',

    'Activities designed to improve balance and coordination.',

    'Advice on positioning to improve comfort and posture while lying, sitting, and standing.',

    'Wheelchair training including operating brakes, removing footplates and armrests, pushing, turning, and other necessary wheelchair skills.',

    'Breathing control exercises and, where necessary, assisted coughing to help maintain a clear chest.',

    'Transfer rehabilitation to improve safety and encourage independence.',

    'Advice regarding orthotic devices and suitable walking aids.',

    'Hydrotherapy treatment.'
];


// Rehabilitation goals
$rehab_goals = [
    'Encourage any available voluntary movement',
    'Improve muscle strength and flexibility',
    'Maintain joint range of motion',
    'Improve balance and coordination',
    'Promote functional independence',
    'Improve posture and positioning',
    'Improve mobility and transfer ability',
    'Support breathing and respiratory function',
    'Improve overall physical function',
    'Enhance quality of life'
];
?>


<section class="service_new_common_section" id="spinal-cord-injury-service">

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
                    
                    <span>Spinal Cord Injury</span>Rehabilitation
                </h2>

                <span class="service_new_common_section__underline"></span>


                <p class="service_new_common_section__text">
                    We have specialized neurological physiotherapists at
                    <strong><?= htmlspecialchars($clinic_name) ?></strong>
                    who have experience in evaluating and treating patients
                    with spinal cord injuries (SCI).
                </p>


                <p class="service_new_common_section__text">
                    Specialized neurological physiotherapy rehabilitation can
                    be beneficial for individuals who have experienced a spinal
                    cord injury by helping improve movement, mobility,
                    independence and overall physical function.
                </p>


                <p class="service_new_common_section__text">
                    Following a detailed assessment,
                    <strong><?= htmlspecialchars($clinic_name) ?></strong>
                    provides physiotherapy services tailored to your individual
                    needs based on the degree and type of spinal cord injury
                    you have sustained.
                </p>

            </div>


            <div class="col-lg-5">

                <div class="service_new_common_section__imgbox">

                    <img
                        src="<?= htmlspecialchars($section_img) ?>"
                        alt="Spinal Cord Injury Rehabilitation at <?= htmlspecialchars($clinic_name) ?>"
                        class="img-fluid"
                        loading="lazy"
                    >


                    <div class="service_new_common_section__badge">
                        <i class="bi bi-shield-plus"></i>

                        <span>
                            Spinal Cord Injury<br>
                            Rehabilitation
                        </span>
                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 2. PROBLEMS ============ -->
        <div class="service_new_common_section__block">

            <h3 class="service_new_common_section__subtitle">
                Problems associated with a
                <span>Spinal Cord Injury</span>
            </h3>


            <div class="row g-3 g-lg-4">

                <?php foreach ($problems as $problem): ?>

                    <div class="col-6 col-md-4">

                        <div class="service_new_common_section__card service_new_common_section__card--center">

                            <div class="service_new_common_section__icon">
                                <i class="bi <?= htmlspecialchars($problem['icon']) ?>"></i>
                            </div>


                            <h4 class="service_new_common_section__card_title">
                                <?= htmlspecialchars($problem['text']) ?>
                            </h4>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>



            <p class="service_new_common_section__note">

                The goal of spinal cord injury rehabilitation treatment at
                <strong><?= htmlspecialchars($clinic_name) ?></strong>
                is to support any movement that appears possible and gradually
                build upon it using stretching, strengthening, sensory
                stimulation, rewarding feedback and visual cues.

            </p>

        </div>



        <!-- ============ 3. REHABILITATION GOALS ============ -->
        <div class="service_new_common_section__block">

            <div class="row g-4 align-items-stretch">


                <div class="col-lg-5">

                    <div class="service_new_common_section__card service_new_common_section__card--highlight h-100">


                        <div class="service_new_common_section__label">
                            <span class="service_new_common_section__line"></span>
                            Rehabilitation Goals
                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">
                            Rehabilitation is
                            <span>focused on you</span>
                        </h3>


                        <ul class="service_new_common_section__list">

                            <?php foreach ($rehab_goals as $goal): ?>

                                <li>
                                    <i class="bi bi-check2-circle"></i>
                                    <?= htmlspecialchars($goal) ?>
                                </li>

                            <?php endforeach; ?>

                        </ul>


                        <p class="service_new_common_section__text mb-0">

                            Your physiotherapist will assess how your current
                            symptoms affect your day-to-day activities and
                            design a rehabilitation program based on your
                            individual physical abilities and functional needs.

                        </p>

                    </div>

                </div>



                <!-- ============ 4. TREATMENT ============ -->
                <div class="col-lg-7">

                    <div class="service_new_common_section__card h-100">


                        <div class="service_new_common_section__label">
                            <span class="service_new_common_section__line"></span>
                            Treatment
                        </div>


                        <h3 class="service_new_common_section__subtitle text-start mb-3">
                            Physiotherapy treatment for
                            <span>Spinal Cord Injury</span>
                        </h3>


                        <div class="row g-2 g-md-3">

                            <?php foreach ($treatments as $treatment): ?>

                                <div class="col-md-6">

                                    <div class="service_new_common_section__focus">

                                        <i class="bi bi-arrow-right-circle"></i>

                                        <span>
                                            <?= htmlspecialchars($treatment) ?>
                                        </span>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- ============ 5. CTA ============ -->
        <div class="service_new_common_section__cta">

            <div class="row align-items-center g-4">


                <div class="col-lg-7">

                    <h3 class="service_new_common_section__cta_title">

                        Your rehabilitation plan,
                        <span>tailored to your needs</span>

                    </h3>


                    <p class="service_new_common_section__text mb-0">

                        Your physiotherapist at
                        <strong><?= htmlspecialchars($clinic_name) ?></strong>
                        will evaluate how your current symptoms affect your
                        daily activities and develop a personalized treatment
                        program.

                        Short-term and long-term rehabilitation goals will be
                        established to help improve your physical function,
                        independence and quality of life.

                        For further information about physiotherapy
                        rehabilitation for spinal cord injuries, or to schedule
                        an appointment, please call us.

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