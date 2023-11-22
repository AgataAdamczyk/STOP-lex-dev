<?php
/**
 * All publications section for Publications
 *
 * @package CodeLauralian Theme
 */

codelauralian_security_check();

$publications_header = get_field('publications_header');
$publications_text = get_field('publications_text');
$publications_btn = get_field('publications_btn');
?>

<section class="section section--publications">
    <div class="container">
        <div class="row flex-md-row flex-column">
            <h2 class="h2-headline text-black-900 text-uppercase text-center mb-3">
                <?php _e('Publikacje', 'codelauralian'); ?>
            </h2>

            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $category = get_the_category();

            $the_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 6,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'paged'          => $paged,
            ]);
            if ( $the_query->have_posts()) : while ($the_query->have_posts() ) :
                $the_query->the_post(); ?>
                <div class="col-12 col-lg-6 mt-5">
                    <article class="single-post paragraph-s-normal d-flex flex-column justify-content-between">
                        <div class="single-post__thumbnail">
                            <a class="d-block overflow-hidden" href="<?php esc_url( the_permalink() ); ?>">
                                <?= get_the_post_thumbnail( $post,
                                    'blog_post_lg',
                                    [ 'class' => 'single-post__thumbnail--img' ] ); ?>
                            </a>
                            <div class="single-post__thumbnail--tags d-flex">
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
                                <a href="<?= esc_url(the_permalink()); ?>">
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
            echo codelauralian_pagination();
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
