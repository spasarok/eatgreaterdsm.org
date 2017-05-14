<html class="single toggle-maps-location">

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
            <div class="toggle-maps-wrapper">
                <?php if(shortcode_exists('toggle-maps')) echo do_shortcode('[toggle-maps id="' . get_the_ID() . '"]'); ?>
            </div>

            <div class="details">
                <?php if(get_field('toggle_maps_address')): ?>
                    <div><h3>Address:</h3><?php echo get_field('toggle_maps_address'); ?></div>
                <?php endif; ?>
                <?php if(get_field('toggle_maps_phone')): ?>
                    <div><h3>Phone:</h3><?php echo get_field('toggle_maps_phone'); ?></div>
                <?php endif; ?>
                <?php if(get_field('toggle_maps_website_link')): ?>
                    <div><h3>Website:</h3> <a href="<?php echo get_field('toggle_maps_website_link'); ?>"><?php the_title(); ?> Website</a></div>
                <?php endif; ?>
            </div>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>

</main>

<?php get_footer(); ?>

</html>