<?php

get_header();

?>

<?php

/**
 * Category Template: Custom Bootcamp Category Template
 */

?>



<?php

 if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>

        <style>
            .job {
                background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat 50% 50%;
                background-size: cover;
            }
        </style>
    <section class="job section-background">
        <div class="container">
            <div class="job__wrapper section-background__wrapper">
                <div class="job__content">
                    <div class="job__company">
                        <div class="job__company-logo">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/website-logo.png" alt="">
                        </div>
                        <span class="job__company-title">
            ISMAN & Partner
          </span>
                    </div>
                    <h1 class="job__title">
                        <?php the_title(); ?>
                    </h1>
                    <div class="job__location">
                        <div class="job__location-icon">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/mark-icon.svg" alt="">
                        </div>
                        <div class="job__location-desc">
                            <?php

                            echo get_post_meta(get_the_ID(), 'city', true);

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="job-info">
        <div class="container">
            <? the_content(); ?>
        </div>
    </section>

    <div class="company-info">
        <div class="container">
            <div class="company-info__wrapper">
                <div class="company-info__left">
                    <div class="company-info__logo">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/website-logo-two.png" alt="">
                    </div>
                </div>
                <div class="company-info__right">
                    <p class="company-info__title">
                        ISMAN & Partner
                    </p>
                    <p class="company-info__desc">
                        ISMAN & Partner is a management consultancy specialized in negotiation and conflict resolution.
                        Our customers are companies active in diverse industries, such as transportation, automotive,
                        real
                        estate, energy and many more. The consulting services are valued by the heads of sales,
                        purchasing,
                        M&A and contracting, among others. We offer consulting for negotiations between companies
                        (i.e. price negotiations, mergers, acquisitions, joint ventures), between management and
                        trade unions/works councils, as well as between companies and public representatives
                        (ministries, offices, associations) - mainly in
                        projects with major public impact. ISMAN & Partner operates primarily in Europe and the United
                        States.
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php }

wp_reset_postdata(); // сброс

?>

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
get_footer();

?>