<?php get_header(); ?>

<section class="intro">
    <div class="container">
        <div class="intro__wrapper">
            <div class="intro__top">
                <h1 class="intro__title">
                    ISMAN & Partner
                </h1>
                <p class="intro__desc">
                    Negotiations. Conflict. <br> Be prepared.
                </p>
                <div class="intro__decorate">
                    <img class="intro__decorate-icon"
                         src="<?php bloginfo('template_url'); ?>/assets/images/arrow-down-icon.svg" alt="">
                </div>
            </div>
            <div class="intro__bottom">
                <a href="page-blog.php" class="intro__bottom-title">
                    <span>Recent Articles & News</span>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/next-icon.svg" alt="">
                </a>
                <div class="intro__bottom-table">
                    <a href="page-blog.php" class="intro__bottom-item">
                              <span class="intro__bottom-date">
                                  03/2020
                              </span>
                        <p class="intro__bottom-desc">
                            Negotiation Chimeras
                        </p>
                    </a>
                    <a href="page-blog.php" class="intro__bottom-item">
                              <span class="intro__bottom-date">
                                  03/2020
                              </span>
                        <p class="intro__bottom-desc">
                            Negotiation Chimeras
                        </p>
                    </a>
                    <a href="page-blog.php" class="intro__bottom-item">
                              <span class="intro__bottom-date">
                                  03/2020
                              </span>
                        <p class="intro__bottom-desc">
                            Negotiation Chimeras
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vision">
    <div class="container">
        <div class="vision__top section-top section-top--lined">
                <span class="section-num facts__num">
                    01
                </span>
            <div class="section-top__content">
                <h2 class="section-title">
                    Mission & Vision
                </h2>
            </div>
        </div>
        <div class="vision__content">
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
                'post_type' => 'mission_vision',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
                setup_postdata($post);

                ?>

                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>

            <?php }

            wp_reset_postdata(); // сброс

            ?>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="services__top section-top section-top--lined section-top--multiple">
                <span class="section-num">
                    02
                </span>
            <div class="section-top__content">
                <h2 class="services__title section-title">
                    Our Services
                </h2>
                <span class="services__desc section-desc">
                        What we can do for you.
                    </span>
            </div>
        </div>
        <div class="services__table">
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
                'post_type' => 'our_services',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
                setup_postdata($post);

                ?>

                <div class="services__table-item service-item">
                    <div class="service-item__content">
                        <h3 class="service-item__title">
                            <?php the_title(); ?>
                        </h3>
                        <div class="service-item__text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <img class="service-item__picture" src="<?php echo get_the_post_thumbnail_url(); ?>">
                </div>

            <?php }

            wp_reset_postdata(); // сброс

            ?>
            <style>
                .service-item__picture {
                    flex-shrink: 0;
                    width: 380px;
                    height: 260px;
                    background-size: cover;
                }
            </style>
        </div>
    </div>
</section>

<section class="fields">
    <div class="container">
        <div class="services__top section-top section-top--lined section-top--multiple">
                <span class="section-num">
                    03
                </span>
            <div class="section-top__content">
                <h2 class="services__title section-title">
                    Our Fields
                </h2>
                <span class="services__desc section-desc">
                        Industries & Countries where we operate successfully
                    </span>
            </div>
        </div>
        <div class="fields__content">
            <div class="fields__content-body">
                <div class="fields__result">
                    <h3 class="fields__result-title">
                        Client Industries:
                    </h3>
                    <div class="fields-list">
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
                            'post_type' => 'our_fields',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ));

                        foreach ($posts as $post) {
                            setup_postdata($post);

                            ?>

                            <div class="fields-list__item">
                                <div class="fields-list__item-icon">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <span class="fields-list__item-desc">
                                    <?php the_title(); ?>
                                </span>
                            </div>
                        <?php }

                        wp_reset_postdata(); // сброс

                        ?>

                    </div>
                </div>
                <style>
                    .fields__picture {
                        background: url(<?php bloginfo('template_url'); ?>/assets/images/central_asia.png) no-repeat center;
                        background-size: contain;
                    }
                </style>
                <div class="fields__picture"></div>
            </div>
            <div class="fields-bottom">
                <div class="fields-bottom__clients">
                    <h4 class="fields-bottom__client-title">
                        Clients from the following departments:
                    </h4>
                    <p class="fields-bottom__client-desc">
                        M&A, Sales, Purchasing, Procurement, Contracting, Human Ressources,
                        IT, Change, Strategy Development
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="facts section-background">
    <div class="container">
        <div class="facts__wrapper section-background__wrapper">
            <div class="section-top section-top--lined section-top--white facts__top">
                    <span class="section-num facts__num">
                        04
                    </span>
                <div class="section-top__content">
                    <h2 class="section-title">
                        Facts
                    </h2>
                </div>
            </div>

            <div class="facts__table">
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
                    'post_type' => 'facts',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));

                foreach ($posts as $post) {
                    setup_postdata($post);

                    ?>

                    <div class="facts__table-item">
                        <span class="facts__table-value">
                            <? the_title(); ?>
                        </span>
                        <p class="facts__table-desc">
                            <?php

                            echo get_post_meta(get_the_ID(), 'text', true);

                            ?>
                        </p>
                    </div>

                <?php }

                wp_reset_postdata(); // сброс

                ?>

            </div>
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

<section class="newsletter section-background">
    <div class="container">
        <div class="newsletter__wrapper section-background__wrapper">
            <div class="newsletter__top section-top section-top--white section-top--lined">
                    <span class="section-num">
                        06
                    </span>
                <div class="section-top__content">
                    <h2 class="services__title section-title">
                        Newsletter
                    </h2>
                </div>
            </div>
            <div class="newsletter__intro">
                <h2 class="newsletter__title">
                    Negotiation Insights
                </h2>
                <h4 class="newsletter__subtitle">
                    Bulletin.
                </h4>
            </div>
            <form class="newsletter__form newsletter-form">
                <div class="newsletter-form__row">
                    <input type="text" class="newsletter-form__input" placeholder="Title">
                    <input type="text" class="newsletter-form__input" placeholder="First Name">
                    <input type="text" class="newsletter-form__input" placeholder="Last Name">
                    <input type="email" class="newsletter-form__input" placeholder="Email Address">
                </div>
                <label class="agreement newsletter__label">
                    <input class="agreement__input" type="checkbox">
                    <span class="agreement__decorate"></span>
                    <p class="agreement__desc">
                        I hereby consent to the transfer and processing of my personal data
                        for the use of the newsletter (information entered)
                    </p>
                </label>
                <label class="agreement newsletter__label">
                    <input class="agreement__input" type="checkbox">
                    <span class="agreement__decorate"></span>
                    <p class="agreement__desc">
                        I hereby consent to the processing of my data for advertising purposes
                        (only for the use of the newsletter of ISMAN & Partner)
                        and the collection of statistical information via Mailchimp
                    </p>
                </label>
                <div class="newsletter-form__note">
                    <p class="newsletter-form__note-text">
                        Note: We use these data solely for the purpose of our newsletter.
                        <strong>Your details will not be transferred to third parties.</strong>
                        <br>
                        <br>
                        Our newsletter informs you about negotiation topics, in particular in the area of conflict
                        resolution & negotiation management as well as about our company. Information about
                        the protocol of your subscription, the sending via MailChimp, statistic evaluation as
                        well as your ability to unsubscribe from this newsletter, see <a href="page-privacy.php">privacy
                            policy</a>.
                        <br>
                        <strong>You can always unsubscribe.</strong>
                    </p>
                </div>
                <button class="newsletter-form__submit">
                    Subscribe
                </button>
            </form>
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
            <form class="contact__form" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                <div class="contact__form-body">
                    <div class="contact__form-row">
                        <input placeholder="Name*" type="text" name="name"
                               class="contact__form-field contact__form-input name-field">
                        <input placeholder="E-Mail*" type="email" name="email"
                               class="contact__form-field contact__form-input email-field">
                    </div>
                    <textarea placeholder="Message*" name="message"
                              class="contact__form-field contact__form-message message-field"></textarea>
                </div>
                <div class="contact__form-secure secure">
                    <div class="secure__decorate">
                        <div class="secure__decorate-icon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/shield-icon.svg" alt="">
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


<?php get_footer(); ?>

