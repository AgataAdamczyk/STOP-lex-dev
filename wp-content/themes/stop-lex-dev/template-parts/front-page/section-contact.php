<?php
/**
 * Contact section for Front-page
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

codelauralian_security_check();

$contact_header = get_field('contact_header');
$contact_text = get_field('contact_text');
$contact_form_shortcode = get_field('contact_form_shortcode');

$contact_phone = get_field('contact_phone', 'options');
$contact_email = get_field('contact_email', 'options');
$contact_address = get_field('contact_address', 'options');
?>

<section class="section section--contact" id="contact">
    <div class="container">
        <div class="row contact flex-lg-row flex-column px-3">
            <div class="col-12 col-lg-5 contact__info primary-100-bg text-white">
                <?php
                if ( $contact_header ) : ?>
                    <h3 class="h3-headline text-uppercase mb-3">
                        <?= $contact_header; ?>
                    </h3>
                <?php
                endif;
                if ( $contact_text ) : ?>
                    <p class="body-text mb-3">
                        <?= $contact_text; ?>
                    </p>
                <?php
                endif;

                if ( $contact_phone ) : ?>
                    <div class="contact__info--phone py-3 opacity-80">
                        <a class="body-text-small-500 text-white" href="tel:<?= esc_url( $contact_phone ); ?>">
                            <?= $contact_phone; ?>
                        </a>
                    </div>
                <?php
                endif;
                if ( $contact_email ) : ?>
                    <div class="contact__info--email py-3 opacity-80">
                        <a class="body-text-small-500 text-white" href="mailto:<?= esc_url( $contact_email ); ?>">
                            <?= $contact_email; ?>
                        </a>
                    </div>
                <?php
                endif;
                if ( $contact_address ) : ?>
                    <div class="contact__info--address py-3 opacity-80">
                        <a class="body-text-small-500 text-white" href="<?= esc_url( $contact_address['url'] ); ?>" target="<?= esc_attr( $contact_address['target'] ); ?>">
                            <?= $contact_address['title']; ?>
                        </a>
                    </div>
                <?php
                endif; ?>
            </div>

            <?php
            if ( $contact_form_shortcode ) : ?>
                <div class="col-12 col-lg-7 contact__form white-bg">
                    <?= do_shortcode( $contact_form_shortcode ); ?>
                </div>
            <?php
            endif; ?>
        </div>
    </div>
</section>
