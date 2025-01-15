<!-- Services Section -->

<section class="services-section" id="services-section">
    <div class="services-container">
        <h2><?php echo esc_html(get_field('block_services_title')); ?></h2>
        <div class="services-content">
            <?php while(have_rows('block_services')) : the_row(); ?>
            <div class="services-content--inner">
                <div class="img-container img-container--contain lazy">
                    <div class="img-container__inner">
                            <?php 
                                
                            $imgsrc = get_sub_field('icon');

                            printf(
                                '<img loading="lazy" %s title="%s" alt="%s" />',
                                fc_theme_responsive_image($imgsrc, 'small', '100px'),
                                esc_attr(get_the_title($imgsrc )),
                                esc_attr(get_post_meta($imgsrc, '_wp_attachment_image_alt', true))
                            );
                                
                            ?>
                    </div>
                </div>
                <h4><?php echo esc_html(get_sub_field('title')); ?></h4>
                <p><?php echo wp_kses(get_sub_field('text'), array('br' => array())); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>