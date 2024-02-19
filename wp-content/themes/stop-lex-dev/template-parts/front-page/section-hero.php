<?php
/**
 * Hero section for Front-page
 *
 * @package CodeLauralian Theme
 */

codelauralian_security_check();

$hero_text = get_field('hero_text');
$hero_img = get_field('hero_img');
$socials = get_field('socials', 'options');
?>
<section class="section section--hero neutral-200-bg">
    <div class="container">
        <div class="row">
            <?php
            if ( $hero_img ) : ?>
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
                    <img class="hero-img"
                         src="<?= esc_url( $hero_img['url'] ); ?>"
                         alt="<?= esc_attr( $hero_img['alt'] ); ?>"
                    />
                </div>
            <?php
            endif; ?>
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start ps-auto ps-lg-5 mt-4">
                <?php
                if ( $hero_text ) : ?>
                    <span class="body-text-500">
                        <?= $hero_text; ?>
                    </span>
                <?php
                endif;
                if ( $socials ) : ?>
                    <div class="mt-3">
                        <?php
                        foreach ( $socials as $social ) : ?>
                            <a class="d-inline-flex align-items-center" href="<?= esc_url( $social['link']['url'] ); ?>">
                                <span class="footer__links--icon-wrapper d-flex justify-content-center align-items-center me-2">
                                    <?= wp_get_attachment_image( $social['icon'],  ['32', '32'], '', '' ); ?>
                                </span>
                            </a>
                        <?php
                        endforeach; ?>
                    </div>
                <?php
                endif; ?>
            </div>
        </div>
    </div>
</section>
