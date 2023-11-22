<?php
$contact_email = get_field('contact_email', 'options');
$contact_phone = get_field('contact_phone', 'options');
$contact_address = get_field('contact_address', 'options');

$socials = get_field('socials', 'options');
?>
    </main>
    <!-- Footer -->
    <footer class="footer">
        <section class="footer__main pb-0">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-4 mb-4 mb-lg-0 ps-3">
                        <div class="footer__logo mb-5">
                            <?php
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                            ?>
                        </div>
                        <address class="mt-2">
                            <div class="footer__main--contact">
                                <h4 class="h4-headline mb-2">
                                    <?php _e('Skontaktuj się z nami', 'codelauralian'); ?>
                                </h4>
                                <?php
                                if ( $contact_email ) : ?>
                                    <a class="d-block body-text-medium mb-2" href="mailto:<?= esc_url($contact_email); ?>">
                                        <?= $contact_email; ?>
                                    </a>
                                <?php
                                endif;
                                if ( $contact_phone ) : ?>
                                    <a class="d-block body-text-medium mb-2" href="tel:<?= esc_url($contact_phone); ?>">
                                        <?= $contact_phone; ?>
                                    </a>
                                <?php
                                endif; ?>
                            </div>
                            <div class="footer__main--address mt-4">
                                <h4 class="h4-headline mb-2">
                                    <?php _e('Adres', 'codelauralian'); ?>
                                </h4>
                                <?php
                                if ( $contact_address) : ?>
                                    <p class="body-text-medium">
                                        <?= $contact_address; ?>
                                    </p>
                                <?php
                                endif; ?>
                            </div>
                        </address>
                    </div>

                    <div class="col-6 col-lg-3 d-flex flex-column">
                        <h3 class="h3-headline txt-primary mb-4">
                            <?php _e('', 'codelauralian'); ?>
                        </h3>
                        <?php
                        foreach ( $socials as $social ) : ?>
                            <a class="d-inline-flex align-items-center body-text-500 mb-4" href="<?= esc_url( $social['link']['url'] ); ?>">
                                <span class="footer__links--icon-wrapper d-flex justify-content-center align-items-center me-2">
                                    <?= wp_get_attachment_image( $social['icon'],  ['32', '32'], '', '' ); ?>
                                </span>
                                <?= $social['link']['title']; ?>
                            </a>
                        <?php
                        endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="copyright mt-5">
                <div class="container">
                    <p class="body-text-small-500 text-white text-center">
                        <a href="<?= esc_url(get_site_url()); ?>" >@STOP Lex Deweloper we Wrocławiu - <?= date( "Y" ); ?></a>
                    </p>
                </div>
            </div>
        </section>
    </footer>
<?php wp_footer(); ?>
</body>
</html>
