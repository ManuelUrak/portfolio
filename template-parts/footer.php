<footer class="footer" id="site-footer">
    <div class="footer-content">
        <div class="footer-content--top">
            <div class="footer-logo">
                <div class="img-container img-container--contain lazy">
                    <div class="img-container__inner">
                        <?php 
                        
                        $imgsrc = get_field('footer_logo', 'option');

                        printf(
                            '<img loading="lazy" %s title="%s" alt="%s" />',
                            fc_theme_responsive_image($imgsrc, 'medium', '400px'),
                            esc_attr(get_the_title($imgsrc )),
                            esc_attr(get_post_meta($imgsrc, '_wp_attachment_image_alt', true))
                        );
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content--main">
            <div class="footer-content--main--left">
                <?php 
                
                wp_nav_menu(array(
                    'menu' => 'footer_menu',
                    'menu_class' => 'footer-menu'
                ));
                
                ?>
            </div>
            <div class="footer-content--main--right">
                <div class="data-left">
                    <?php while(have_rows('footer_address_data', 'option')) : the_row(); ?>
                    <span><?php echo esc_html(get_sub_field('label')); ?></span>
                    <?php endwhile; ?>
                </div>
                <div class="data-right">
                    <?php while(have_rows('footer_address_data', 'option')) : the_row(); ?>
                    <span>
                        <?php 
                        
                        $allowed = array(
                            'a' => array(
                                'href' => array()
                            )
                        );

                        echo wp_kses(get_sub_field('data'), $allowed);
                        
                        ?>
                    </span>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <div class="footer-content--bottom">
            <span>Copyright &copy; <?php echo date('Y'); ?>. All rights reserved. <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/cat.png" alt="Fat Cat Development"></span>
        </div>
    </div>
</footer>