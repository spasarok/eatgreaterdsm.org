<html>

<?php get_header(); ?>

<main>
    <section class="locations container">
        <div class="row">
            <?php while(have_posts()): the_post();?>
                <?php if (function_exists('toggle_text')) toggle_text('title', 'content'); ?>
            <?php endwhile; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
</html>