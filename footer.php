
<style>
    .more {
        background: url(<?php bloginfo( 'template_url' ); ?>/assets/images/more-background.jpg) no-repeat center;
        background-size: cover;
    }
</style>

<section class="more section-background section-background--grey">
    <div class="container">
        <div class="more__wrapper section-background__wrapper">
            <h2 class="more__title">
                Interested in learning more?
            </h2>
            <div class="more__list">
                <a href="/downloads" class="more__item">
                    <span class="more__item-text">Download Negotiation Checklist</span>
                    <span class="more__item-icon">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets//images/download-icon.svg" alt="Icon">
                        </span>
                </a>
                <a href="mailto:overturemy@mail.ru" class="more__item">
                    <span class="more__item-text">Mail</span>
                    <span class="more__item-icon">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets//images/mail-icon.svg" alt="">
                        </span>
                </a>
                <a href="tel:+32322322323" class="more__item">
                    <span class="more__item-text">Call</span>
                    <span class="more__item-icon">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets//images/phone-icon.svg" alt="">
                        </span>
                </a>
            </div>
        </div>
    </div>
</section>
</main>
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__logo">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/website-logo.png" alt="Logo" class="footer__logo-img">
            </div>
            <h2 class="footer__title">
                ISMAN & Partner
            </h2>
            <div class="footer__social social">
                <a href="#!" class="social__item">
                    <img src="https://assets.website-files.com/5abcc0ea5755e1d57ea22970/5ac501f7c3ce7d4f28d18651_xing-white.svg"
                         alt="">
                </a>
                <a href="#!" class="social__item">
                    <img src="https://assets.website-files.com/5abcc0ea5755e1d57ea22970/5acb224c2c10d1591044c1ac_LinkedIn-white.svg"
                         alt="">
                </a>
            </div>
            <p class="footer__address">
                Amsterdamer Str. 191 B | 50735 Köln, Germany
            </p>
            <ul class="footer__info">
                <li class="footer__info-item">
                    <a href="tel:+491735235276">+49 173 52 35 276</a>
                </li>
                <li class="footer__info-item">
                    <a href="mailto:info@ismanundpartner.com">
                        info@ismanundpartner.com
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer__bottom">
              <span class="footer__copyright">
                  © ISMAN & PARTNER. ALL RIGHTS RESERVED.
              </span>
            <a href="wp/privacy" class="footer__privacy">
                LEGAL NOTICE & PRIVACY POLICY
            </a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>