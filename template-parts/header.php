<!-- Header & Navbar -->

<div class="header-container">
    <header class="site-header" id="site-header">
        <a href="<?php echo esc_url(home_url()); ?>" class="logo-container" rel="start">
            <div class="img-container img-container--contain lazy">
                <div class="img-container__inner">
                    <?php 
                    
                    $imgsrc = get_field('logo', 'option');

                    printf(
                        '<img loading="lazy" %s title="%s" alt="%s" />',
                        fc_theme_responsive_image($imgsrc, 'medium', '240px'),
                        esc_attr(get_the_title($imgsrc )),
                        esc_attr(get_post_meta($imgsrc, '_wp_attachment_image_alt', true))
                    );
                    
                    ?>
                </div>
            </div>
        </a>
        <nav class="site-nav" role="navigation">
            <?php 
            
            wp_nav_menu(array(
                'menu' => 'main_menu',
                'menu_class' => 'main-menu'
            ));
            
            ?>
        </nav>
        <button class="navbar-toggle" role="button"></button>
    </header>
    <nav class="site-nav-mobile" role="navigation">
        <?php 
            
        wp_nav_menu(array( 
            'menu' => 'main_menu',
            'menu_class' => 'mobile-menu'
        ));
            
        ?>
    </nav>
</div>