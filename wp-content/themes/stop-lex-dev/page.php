<?php
/**
 * The template for displaying all single page and attachments
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

get_header(); ?>

<div class="page-main">
    <main>
        <div class="container">
            <?php
            the_content();
            ?>
        </div>
    </main>
</div>

<?php
get_footer(); ?>
