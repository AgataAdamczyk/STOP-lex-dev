<?php
/**
 * About us section for Front-page
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

codelauralian_security_check();

$about_us_header = get_field('about_us_header');
$about_us_text = get_field('about_us_text');
$about_us_img = get_field('about_us_img');
?>
<section class="section section--about-us neutral-200-bg" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 d-flex flex-column justify-content-center align-items-start pe-5">
                <?php
                if ( $about_us_header ) : ?>
                    <h2 class="h2-headline text-black-900 text-uppercase mb-3">
                        <?= $about_us_header; ?>
                    </h2>
                <?php
                endif;
                if ( $about_us_text ) : ?>
                    <span class="body-text">
                        <?= $about_us_text; ?>
                    </span>
                <?php
                endif; ?>
            </div>
            <?php
            if ( $about_us_img ) : ?>
                <div class="col-12 col-lg-5 d-flex align-items-center justify-content-end">
                    <img class="about-us-img"
                         src="<?= esc_url( $about_us_img['url'] ); ?>"
                         alt="<?= esc_attr( $about_us_img['alt'] ); ?>"
                    />
                </div>
            <?php
            endif; ?>
        </div>
    </div>
</section>
