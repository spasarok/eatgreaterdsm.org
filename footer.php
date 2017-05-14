<footer class="full">

    <?php if (is_active_sidebar('footer_widgets')): ?>
        <div class="widget-space" role="complementary">
            <?php dynamic_sidebar('footer_widgets'); ?>
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="footer-buttons">
            <a href="<?php echo get_site_url(); ?>/contact">Contact</a>
            <a class="donate-button" href="<?php echo get_site_url(); ?>/donate">Donate</a>
        </div>

        <div class="footer-text">
            <p><?php echo get_option('egdm_address'); ?></p>
            <p><?php echo get_option('egdm_phone'); ?></p>
            <p>&copy; Copyright <?php echo get_the_date('Y'); ?> Eat Greater Des Moines</p>
        </div>
    </div>

    <?php wp_footer(); ?>
</footer>
</body>