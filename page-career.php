<?php

get_header();

?>

<?php

/* Template Name: career */

?>

    <section class="career-intro section-background">
        <div class="container">
            <div class="career-intro__wrapper section-background__wrapper">
                <div class="career-intro__content">
                    <h1 class="career-intro__title">
                        Workshops
                    </h1>
                    <p class="career-intro__desc">
                        This is the International Negotiation Bootcamp
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="offer">
        <div class="container">
            <div class="offer__wrapper">
                <div class="offer__note">
                    <h3 class="offer__note-text">
                        Practicing a good negotiation style and solving conflicts is no rocket science.
                        If you want to learn it, you can! We at ISMAN & Partners offer an unique program,
                        as well as talks, which are tailored to your needs and current knowledge.
                        <br>
                        <br>
                        Our certified international negotiation bootcamp covers different levels of experience, and it
                        is challenging even for experienced negotiators.
                    </h3>
                </div>
                <div class="offer__intro">
                    <h2 class="offer__intro-title">
                        You can count on us.
                    </h2>
                    <p class="offer__intro-desc">
                        You and your success are at the core! Newest didactical methods and state of the art best
                        practices guarantee you an interactive and playful learning environment.
                        <br>
                        <br>
                        We use online tools as well as video-based body analysis, but especially
                        Harvard oriented simulations.
                        <br>
                        <br>
                        Your coach through your learning experience will be Calin-Mihai Isman -
                        internationally experienced negotiator and conflict resolution expert, trainer, and speaker.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="workshop">
        <div class="container">
            <h2 class="workshop__title">
                Next Workshops near you
            </h2>
            <div class="workshop__table workshop-table">

                <?php

                // параметры по умолчанию
                $posts = get_posts(array(
                    'numberposts' => -1,
                    'category' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));


                foreach ($posts as $post) {
                    setup_postdata($post);

                    ?>
                    <a href="<?php the_permalink(); ?>" class="workshop-table__item">
                        <style>
                            .workshop-table__item{
                                background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center;
                                background-size: cover;
                            }
                        </style>
                        <div class="workshop-table__item-wrapper">
                            <h4 class="workshop-table__item-title">
                                <?php the_title(); ?>
                            </h4>
                            <div class="workshop-table__item-location">
                            <span class="icon">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/mark-icon.svg" alt="">
                            </span>
                                <span class="text">
                                    <?php

                                    echo get_post_meta(get_the_ID(), 'city', true);

                                    ?>
                                </span>
                            </div>
                            <button class="workshop-table__item-btn">
                                Menu Infos
                            </button>
                        </div>
                    </a>
                <?php }

                wp_reset_postdata(); // сброс

                ?>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="testimonials__top section-top section-top--lined section-top--multiple">
                <span class="section-num">
                    05
                </span>
                <div class="section-top__content">
                    <h2 class="services__title section-title">
                        Testimonials
                    </h2>
                    <span class="services__desc section-desc">
                        What satisfied clients say about us
                    </span>
                </div>
            </div>
            <div class="testimonials__table">
                <?php

                // параметры по умолчанию
                $posts = get_posts(array(
                    'numberposts' => -1,
                    'category' => 0,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'testimonials',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));

                foreach ($posts as $post) {
                    setup_postdata($post);

                    ?>

                    <div class="testimonials__table-item testimonials-item">
                        <p class="testimonials-item__desc">
                            <?php

                            echo get_post_meta(get_the_ID(), 'text', true);

                            ?>
                        </p>
                        <p class="testimonials-item__author">
                            <?php

                            echo get_post_meta(get_the_ID(), 'pname', true);

                            ?>
                        </p>
                    </div>

                <?php }

                wp_reset_postdata(); // сброс

                ?>

            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <div class="contact__top">
                <div class="contact__top-left">
                    <h2 class="contact__title">
                        Contact
                    </h2>
                    <span class="contact__desc">
                      Keep in Touch.
                  </span>
                </div>
                <div class="contact__top-right">
                    <div class="contact__top-icon">
                        <img src="https://assets.website-files.com/5abcc0ea5755e1d57ea22970/5ac501f4485eed84e37892f5_Isman-und-Partner-Logo-small.png"
                             alt="" class="contact__top-icon">
                    </div>
                </div>
            </div>
            <div class="contact__content">
                <h3 class="contact__content-title">
                    By sending this form you confirm, that you accept our Privacy Policy
                    and that you agree to the storing of the information inserted!
                </h3>
                <form class="contact__form">
                    <div class="contact__form-body">
                        <div class="contact__form-row">
                            <input placeholder="Name*" type="text"
                                   class="contact__form-field contact__form-input name-field">
                            <input placeholder="E-Mail*" type="email"
                                   class="contact__form-field contact__form-input email-field">
                        </div>
                        <textarea placeholder="Message*"
                                  class="contact__form-field contact__form-message message-field"></textarea>
                    </div>
                    <div class="contact__form-secure secure">
                        <div class="secure__decorate">
                            <div class="secure__decorate-icon">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/shield-icon.svg" alt="">
                            </div>
                            <span class="secure__decorate-text">
                                For your security:
                            </span>
                        </div>
                        <div class="secure__exam">
                            3 + 0 =
                        </div>
                        <input class="secure__input" type="number">
                    </div>
                    <label class="agreement contact__form-label">
                        <input class="agreement__input" type="checkbox">
                        <span class="agreement__decorate"></span>
                        <p class="agreement__desc">
                            I hereby consent to the transfer and processing of my personal data (information entered)
                        </p>
                    </label>
                    <button class="contact__form-submit">Send</button>
                    <p class="contact__form-notice">
                        If you send us requests via our contact form, the information you insert including
                        the contact data you insert will be stored for the purpose of the processing of
                        your inquiry and for the case of follow-up questions.
                        <br>
                        <br>
                        We do not pass on data on to third parties without your explicit approval.
                        The processing of the inserted information takes place therefore on the behalf
                        of your consent (Art. 6 Abs. 1 lit. A DSGVO). You can revoke your approval at any time.
                        To do this you can send us an informal E-Mail. The lawfulness of the data processing
                        until revoked remains unaffected by the revoke.
                        <br>
                        <br>
                        The Information you inserted in the contact form, will be stored by us until you
                        request deletion, revoke your approval for storing the data or the purpose of
                        storing the data is no longer required (e.g. after closing the process of handling
                        your inquiry). Mandatory legal provisions –
                        especially storage periods – remain unaffected.
                        <br>
                        <br>
                        For more Information please read our a <a href="wp/privacy">Privacy Policy.</a>
                    </p>
                </form>
            </div>
        </div>
    </section>

<?php

get_footer();

?>