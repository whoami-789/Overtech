<?php

/**
 * Category Template: Custom Blog Category Template
 */

get_header();

?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <section class="post-intro section-background">
            <div class="container">
                <div class="post-intro__wrapper section-background__wrapper">
                    <div class="post-intro__content">
                        <h1 class="post-intro__title">
                            <?php the_title(); ?>
                        </h1>
                        <span class="post-intro__date">
                                <?php echo get_the_date('F Y'); ?>
                            </span>
                    </div>
                </div>
            </div>
        </section>

        <section class="post">
            <div class="container">
                <div class="post__wrapper">
                    <h2 class="post__title">
                        <?php

                        echo get_post_meta(get_the_ID(), 'title_post', true);

                        ?>
                    </h2>
                    <div class="post__body">
                        <?php the_content('', true); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="company-info">
            <div class="container">
                <div class="company-info__wrapper">
                    <div class="company-info__left">
                        <div class="company-info__logo">
                            <img src="images/website-logo-two.png" alt="">
                        </div>
                    </div>
                    <div class="company-info__right">
                        <p class="company-info__title">
                            ISMAN & Partner
                        </p>
                        <p class="company-info__desc">
                            ISMAN & Partner ist eine Unternehmensberatung, die nationale und internationale Konzerne,
                            mittelständische Betriebe und Start-ups, Organisationen und Institutionen bei komplexen
                            Verhandlungs-
                            und Konfliktlösungsprozessen begleitet. 2015 von Calin-Mihai Isman gegründet, unterstützen
                            die Experten
                            für Negotiation & Mediation Manager und Mitarbeiter aus den Bereichen Sales, Einkauf, M&A,
                            Contracting,
                            HR oder IT.
                        </p>
                    </div>
                </div>
            </div>
        </div>

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


                    <form class="contact__form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                        <div class="contact__form-body">
                            <input type="hidden" name="action" value="submit_contact_form">
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
        <?php
    }
}

get_footer();
?>