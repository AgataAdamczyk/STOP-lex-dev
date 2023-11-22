<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package CodeLauralian Theme
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php
post_class('mb-5'); ?> id="post-<?php
the_ID(); ?>">

    <header class="entry-header">

        <?php
        the_title(
            sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
            '</a></h2>'
        );

        if ('post' === get_post_type()) {
            ?>

            <div class="entry-meta">
                <?php
                codelauralian_posted_on();
                ?>
            </div>

            <?php
        }
        ?>
    </header>

    <main class="entry-content">
        <?php
        if (has_post_thumbnail()) {
            $thumbnail         = [
                'uri' => get_the_post_thumbnail_url(null, 'full'),
                'img' => get_the_post_thumbnail(),
            ];
            $thumbnail['link'] = sprintf('<a href="%s">%s</a>', esc_attr($thumbnail['uri']),
                $thumbnail['img']);
            echo "<div class='entry-content__image my-4'>";
            echo $thumbnail['link'];
            echo "</div>";
        }

        the_excerpt();
        ?>
    </main>

    <footer class="entry-footer">
        <?php
        codelauralian_entry_footer();
        ?>
    </footer>

</article>
