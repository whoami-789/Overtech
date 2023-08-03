<?php

get_header();

?>

    <section class="news-intro section-background">
        <div class="container">
            <div class="news-intro__wrapper section-background__wrapper">
                <div class="news-intro__content">
                    <h1 class="news-intro__title">
                        Recent News & Articles
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="blog__wrapper">

                <?php

                // параметры по умолчанию
                $posts = get_posts(array(
                    'numberposts' => -1,
                    'category' => 4,
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

                    <a href="<?php the_permalink(); ?>" class="blog-item">
                        <div class="blog-item__content">
                            <span class="blog-item__date"><?php echo date('F Y'); ?></span>
                            <span class="blog-item__title">
                                        <? the_title(); ?>
                                    </span>
                            <p class="blog-item__desc">
                                <?php

                                echo get_post_meta(get_the_ID(), 'title_post', true);

                                ?>
                            </p>
                            <style>
                                .blog-item__read::before {
                                    background: url(<?php bloginfo( 'template_url' ); ?>/assets/images/small-arrow-icon.svg) no-repeat center;
                                }
                            </style>
                            <div class="blog-item__read">
                                READ ARTICLE
                            </div>
                        </div>
                        <div class="blog-item__picture">
                            <img class="blog-item__picture-img"
                                 src="<?php echo get_the_post_thumbnail_url(); ?>"
                                 alt="">
                        </div>
                    </a>

                    <?php
                }

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