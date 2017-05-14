<?php /* Template Name: About Page */ ?>

<html class="page about">

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
        <div class="container mission">
            <div class="first">
                <h2>Mission</h2>
                <p><?php echo get_option('egdm_mission_statement'); ?></p>
            </div>
        </div>
    </section>

    <section class="container banner who-we-serve">
        <?php egdm_full_srcset('crate'); ?>
        <div class="container full">
            <div class="row">
                <div class="col card border-top-green">
                    <h2><?php echo get_field('banner_box_title'); ?></h2>
                    <?php echo get_field('banner_box_text'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php include('section/focus-and-inits.php'); ?>
</main>

<?php get_footer(); ?>

</html>