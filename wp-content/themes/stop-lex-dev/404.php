<?php
/**
 * Template for 404 page
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

get_header();
?>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12 col-lg-8">
                    <h1 class="h1-headline">404</h1>
                    <h4 class="h4-headline my-5">
                        <?php _e('Podana strona nie istnieje', 'codelauralian'); ?>
                    </h4>
                    <a class="button mt-4" href="<?= esc_url( get_site_url() ); ?>">
                        <?php _e('Wróć do strony głównej', 'codelauralian'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
