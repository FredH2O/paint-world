<?php get_header(); ?>

<main class="home-page">
    <section class="hero">

        <?php
        $home_page = get_page_by_path('home'); // your page slug
        if ($home_page) :

            // get feature image for hero
            $thumb_id = get_post_thumbnail_id($home_page->ID);
            $thumb_url = wp_get_attachment_url();
        ?>

            <h1 class="page-title"><?php echo esc_html($home_page->post_title); ?></h1>
            <div>
                <?php echo apply_filters('the_content', $home_page->post_content); ?>
            </div>

        <?php endif; ?>
    </section>

    <section class="featured-posts">
        <?php
        $args = array('posts_per_page' => 3);
        $home_query = new WP_Query($args);
        if ($home_query->have_posts()) :
            while ($home_query->have_posts()) : $home_query->the_post(); ?>
                <article class="post">
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </article>
        <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </section>
</main>

<?php get_footer(); ?>