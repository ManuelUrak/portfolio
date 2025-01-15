<!-- About Me Section -->

<section class="about-me-section" id="about-me">
    <div class="about-me-container">
        <div class="about-me-content">
            <div class="square"></div>
            <div class="square"></div>
            <div class="about-me-content--left">
                <div class="img-container img-container--contain lazy">
                    <div class="img-container__inner">
                        <?php 
                            
                        $imgsrc = get_field('block_about_me_image');

                        printf(
                            '<img loading="lazy" %s title="%s" alt="%s" />',
                            fc_theme_responsive_image($imgsrc, 'medium', '350px'),
                            esc_attr(get_the_title($imgsrc )),
                            esc_attr(get_post_meta($imgsrc, '_wp_attachment_image_alt', true))
                        );
                            
                        ?>
                    </div>
                </div>
            </div>
            <div class="about-me-content--right">
                <h2><?php echo esc_html(get_field('block_about_me_title')); ?></h2>
                <p><?php echo wp_kses(get_field('block_about_me_text'), array('br' => array())); ?></p>
                <div class="data">
                    <div class="data-left">
                        <?php while(have_rows('block_about_me_data')) : the_row(); ?>
                        <span><?php echo esc_html(get_sub_field('label')); ?></span>
                        <?php endwhile; ?>
                    </div>
                    <div class="data-right">
                        <?php while(have_rows('block_about_me_data')) : the_row(); ?>
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
                <div class="data--mobile">
                    <?php while(have_rows('block_about_me_data')) : the_row(); ?>
                    <div class="data--mobile--content">
                        <span class="label"><?php echo esc_html(get_sub_field('label')); ?></span>
                        <span class="data">
                            <?php 
                                
                            $allowed = array( 
                                'a' => array( 
                                    'href' => array() 
                                )
                            );

                            echo wp_kses(get_sub_field('data'), $allowed);
                                
                            ?>
                        </span>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>