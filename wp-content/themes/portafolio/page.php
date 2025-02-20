<?php get_header(); ?>

<main>
    <?php
    while (have_posts()): the_post();
    ?>
        <div class="page">
            <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>)">
                <div class="container">
                    <h1 class="title">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>

            <div class="container">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
</main>
</body>

</html>