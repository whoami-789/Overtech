<form class="newsletter__form newsletter-form" method="post">
    <div class="newsletter-form__row">
        <input type="text" class="newsletter-form__input" placeholder="Title">
        <input type="text" class="newsletter-form__input" placeholder="First Name">
        <input type="text" class="newsletter-form__input" placeholder="Last Name">
        <input type="email" class="newsletter-form__input" placeholder="Email Address" required>
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
    <button class="newsletter-form__submit" type="submit" name="subscribe">
        Subscribe
    </button>
</form>
