<?php

if (is_archive()) {
    ?>
    <header class="header">
        <div class="container">
            <div class="breadcrumbs">
                <?php
                get_template_part('partials/breadcrumbs'); ?>
            </div>
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
        </div>
    </header>
    <?php
} elseif (is_page() || is_single()) {
    ?>
    <header class="header">
        <div class="container">
            <div class="breadcrumbs">
                <?php
                get_template_part('partials/breadcrumbs');
                ?>
            </div>
            <div class="single-container">
                <?php
                the_title('<h1 class="page-title">', '</h1>');
                ?>
                <div class="entry-meta">
                    <?php
                    codelauralian_posted_on();
                    ?>
                </div>
            </div>
        </div>
    </header>
    <?php
} elseif (is_search()) {
    ?>
    <header class="header">
        <div class="container">
            <div class="breadcrumbs">
                <?php
                get_template_part('partials/breadcrumbs');
                ?>
            </div>
            <h1 class="page-title">
                <?php
                printf(
                    esc_html__('Wyszukiwania dla: %s', 'codelauralian'),
                    '<span>' . get_search_query() . '</span>'
                );
                ?>
            </h1>
        </div>
    </header>
    <?php
}
?>
