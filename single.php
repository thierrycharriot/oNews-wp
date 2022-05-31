<?php get_header() ?>

<section class="main-section">
    <h1>Latest News</h1>
    <div class="container-article">
        <?php
        /**
         * https://codex.wordpress.org/The_Loop
         * https://developer.wordpress.org/reference/functions/have_posts/
         * have_posts()
         */

        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                //
                // Post Content here
                ?>
                <article class="article-unique">
                <?php
                    /**
                     * https://developer.wordpress.org/reference/functions/get_the_category/
                     * get_the_category( int $post_id = false )
                     */
                    $categories = get_the_category();
                    foreach ( $categories as $category ) { 
                    ?>
                        <button class="article-button green"><?= $category->name; ?></button>
                    <?php
                    }
                ?>
                <?php
                /**
                 * https://developer.wordpress.org/reference/functions/the_title/
                 * the_title( string $before = '', string $after = '', bool $echo = true )
                 */
                ?>
                <h2><?php the_title(); ?></h2>
                <div class="article-author">
                    <img src="<?= get_template_directory_uri(); ?>/oNews/img/icon-john.png" alt="" class="article-img">
                    <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" class="article-link"><?php the_author(); ?></a> 
                    <?php if(the_date()) {
                        ?> <time datetime="<?= get_the_date('Y-m-d'); ?>" class="article-time">le <?php the_date(); ?></time> <?php 
                    } 
                    ?>
                </div>
                <p>
                    <?php the_content(); ?>
                </p>
                <a href="<?= home_url(); ?>" class="article-link">Back to home</a>
                </article>
                <?php
                //
            } // end while
        } // end if
        ?>

    </div>
</section>

</div>
<!--wrapper-->

<?php get_footer() ?>