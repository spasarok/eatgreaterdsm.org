<head>
    <title><?php the_title(); ?></title>
    <!-- wp_head() -->
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="hero">
        <?php egdm_full_srcset('header'); ?>
    </div>
    <div class="logo-wrapper">
        <a href="<?php echo home_url(); ?>"><div class="logo"></div></a>
        <p><span class="mobile-drop-menu">Menu</span></p>
    </div>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'nav-menu' )); ?>
    </nav>
</header>