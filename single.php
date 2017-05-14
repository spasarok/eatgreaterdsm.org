<html class="single">

<?php get_header(); ?>

<main>
    <header>
        <div class="container">
            <div class="title">
                <?php the_title('<h1>', '</h1>'); ?>
            </div>
        </div>
    </header>

    <div class="container">
        <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>

</main>

<?php get_footer(); ?>

</html>