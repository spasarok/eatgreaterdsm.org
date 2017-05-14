<html class="home">

<?php get_header(); ?>

<main>
    <header>
        <div class="container">
            <div class="title">
                <h1><?php echo get_option('egdm_mission_headline'); ?></h1>
            </div>
        </div>
    </header>

    <section>
        <div class="container mission">
            <div class="row">
                <div class="col-md-4 image">
                    <img id="iowa" src="<?php echo get_template_directory_uri().'/assets/images/iowa-filled.png'; ?>">
                </div>
                <div class="col-md-8 statement">
                    <p><?php echo get_option('egdm_mission_statement'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <?php $event_args = array(
        'post_type' => 'tribe_events',
        'post_status' => 'publish',
        'tax_query' => array(
            array(
                'taxonomy' => 'tribe_events_cat',
                'field' => 'slug',
                'terms' => 'featured',
                'operator' => 'IN'
            ),
        )
    )?>
    <?php $events = new WP_Query($event_args); ?>
    <section class="events container banner">
        <?php egdm_full_srcset('carrots'); ?>
        <div class="row">
            <?php while($events->have_posts()): $events->the_post();?>
                <div class="col-md-4">
                    <div class="card border-top-green">
                        <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                        <time>
                            <?php echo tribe_get_start_date(); ?>
                            <?php if(tribe_get_end_time())
                                echo ' - '.tribe_get_end_time();
                            ?>
                        </time>
                        <?php the_excerpt(); ?>
                        <a class="events-link" href="<?php echo get_site_url(); ?>/events">see more events...</a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>

    <?php include('section/focus-areas.php'); ?>
</main>

<?php get_footer(); ?>
</html>