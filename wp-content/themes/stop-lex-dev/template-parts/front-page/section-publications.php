<?php
/**
 * Publications section for Front-page
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

codelauralian_security_check();

$publications_header = get_field('publications_header');
$publications_text = get_field('publications_text');
$publications_btn = get_field('publications_btn');
?>

<section class="section section--publications">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-lg-6">
                <?php
                if ( $publications_header ) : ?>
                    <h2 class="h2-headline text-black-900 text-uppercase mb-3">
                        <?= $publications_header; ?>
                    </h2>
                <?php
                endif;
                if ( $publications_text ) : ?>
                    <span class="body-text text-black-900">
                    <?= $publications_text; ?>
                </span>
                <?php
                endif; ?>
            </div>
        </div>
        <div class="row">
            <?php
            $the_top_articles = new WP_Query([
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'posts_per_page' => 4,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);

            if ( $the_top_articles ->have_posts() ) :
                while ( $the_top_articles ->have_posts() ) : $the_top_articles ->the_post(); ?>
                    <div class="col-12 col-lg-6 mt-2 mt-lg-5">
                        <article class="post paragraph-s-normal d-flex flex-column justify-content-between">
                            <div class="post__thumbnail">
                                <a class="d-block overflow-hidden" href="<?php esc_url( the_permalink() ); ?>">
                                    <?= get_the_post_thumbnail( $post,
                                        'blog_post_lg',
                                        [ 'class' => 'post__thumbnail--img' ] ); ?>
                                </a>
                                <div class="post__thumbnail--tags d-flex">
                                    <?php
                                    $category = get_the_category();
                                    if ( ! empty( $category ) ) : ?>
                                        <a class="single-tag body-text-small text-white"  href="<?= esc_url( get_category_link( $category[0]->term_id ) ); ?>">
                                            <?= $category[0]->cat_name; ?>
                                        </a>
                                    <?php
                                    endif; ?>
                                    <span class="single-tag body-text-small text-white ms-1">
                                        <?= get_the_date('d.m.Y'); ?>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <h3 class="h3-headline text-black-900 my-3">
                                    <a href="<?= esc_url( the_permalink() ); ?>">
                                        <?= the_title(); ?>
                                    </a>
                                </h3>
                                <?php
                                if ( !empty(get_the_excerpt()) ) : ?>
                                    <div class="body-text text-black-900">
                                        <?php the_excerpt(); ?>
                                    </div>
                                <?php
                                else :
                                    echo the_content();
                                endif; ?>
                            </div>
                        </article>
                    </div>
                <?php
                endwhile;
            else :
                _e('Przepraszamy, nie ma jeszcze żadnych publikacji', 'codelauralian');
            endif;
            wp_reset_postdata(); ?>

            <?php
            if ( $publications_btn ) : ?>
                <div class="d-flex justify-content-center mt-5">
                    <a class="button" href="<?= esc_url( $publications_btn['url'] ); ?>">
                        <?= $publications_btn['title']; ?>
                    </a>
                </div>
            <?php
            endif; ?>
        </div>
    </div>
</section>
