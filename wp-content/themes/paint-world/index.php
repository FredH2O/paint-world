<?php get_header(); ?>

<main class="site-content">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="post">
                <h2 class="post-title"><?php the_title(); ?></h2>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No posts found. Come back soon!!</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>