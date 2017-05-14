<?php $focus_args = array(
    'post_parent' => 10,
    'post_type' => 'page',
    'post_status' => 'publish')
?>
<?php $focus = new WP_Query($focus_args); ?>

<section class="focus-areas">
    <div class="container">
        <div class="row">
            <?php while($focus->have_posts()): $focus->the_post();?>
                <div class="col-md-4 focus-area">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('square_300x300'); ?>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>