<?php /* Template Name: Focus Areas */ ?>

<html class="page focus-areas">

<?php get_header(); ?>

<main>
    <header>
        <div class="container">
            <div class="title">
                <?php the_title('<h1>', '</h1>'); ?>
            </div>
        </div>
    </header>

    <?php include('section/focus-areas.php'); ?>

</main>

<?php get_footer(); ?>

</html>