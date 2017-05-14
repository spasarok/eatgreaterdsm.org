<html class="page">

<?php get_header(); ?>

<main>
    <header>
        <div class="container">
            <div class="title">
                <?php the_title('<h1>', '</h1>'); ?>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <?php while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
                <?php edit_post_link( __( 'Edit', 'diceorg' ) ); ?>
            <?php endwhile; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>

</html>