<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

get_header();
?>

<section class="section section--single-post">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
                        <h2 class="h2-headline text-black-900 my-4">
                            <?= the_title(); ?>
                        </h2>
                        <div class="single-post__tags d-flex mb-3">
                            <?php
                            $category = get_the_category();

                            if ( ! empty( $category ) ) : ?>
                                <a class="single-tag body-text-small text-white" href="<?= esc_url( get_category_link( $category[0]->term_id ) ); ?>">
                                    <?= $category[0]->cat_name; ?>
                                </a>
                            <?php
                            endif; ?>
                            <span class="single-tag body-text-small text-white ms-3">
                                <?= get_the_date('d.m.Y'); ?>
                            </span>
                        </div>

                        <?php
                        $thumbnail = get_the_post_thumbnail($post, 'blog_post_lg');
                        if ( $thumbnail ) : ?>
                            <div class="single-post__thumbnail">
                                <?= $thumbnail; ?>
                            </div>
                        <?php endif; ?>

                        <div class="single-post__content body-text text-black-900">
                            <?= the_content(); ?>
                        </div>
                    <?php
                    endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
