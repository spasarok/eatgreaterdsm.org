<?php /* Template Name: Donate Page */ ?>

<html class="page donate">

<?php get_header(); ?>

<main>
    <header>
        <div class="container">
            <div class="title">
                <?php the_title('<h1>', '</h1>'); ?>
            </div>
        </div>
    </header>

    <section class="mission">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php echo get_field('donate_section_1'); ?>
                </div>
                <?php if(get_field('donate_section_1_quote')): ?>
                    <div class="col-md-6">
                        <div class="quote-wrapper">
                            <div class="quote"><?php echo get_field('donate_section_1_quote'); ?></div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="container banner gift">
        <?php egdm_full_srcset('sprout'); ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 card border-top-green">
                    <h2><?php echo get_field('donate_banner_box_title'); ?></h2>
                    <?php echo get_field('donate_banner_box'); ?>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <?php echo get_field('donate_section_2'); ?>
            <div class="donate-button">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="4DXKRMV7CANDY">
                    <?php /*<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">*/ ?>
                    <input type="submit" name="submit" value="Donate with PayPal">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

</html>