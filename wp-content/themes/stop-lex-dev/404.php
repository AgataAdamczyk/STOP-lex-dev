<?php

/**
 * Template for 404 page
 *
 * @package CodeLauralian Theme
 */

get_header();
?>
    <section class="section text-center">
        <div class="container">
            <h1>404</h1>
            <div class="mb-3">
                <?php _e('Podana strona nie istnieje', 'codelauralian'); ?>
            </div>
            <a href="<?= esc_url( get_site_url() ); ?>">
                <?php _e('Wróć do strony głównej', 'codelauralian'); ?>
            </a>
        </div>
    </section>
<?php
get_footer();
