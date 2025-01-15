<main class="site-main" id="site-main" role="main">
    <?php while(have_posts()) : the_post(); ?>

    <!-- Hero Section -->

    <section class="hero-section">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-content--left">
                    <div class="inner">
                        <h1><?php echo esc_html(get_field('hero_title')); ?></h1>
                        <div class="subtitle-container">
                            <span class="subtitle"></span>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/typed.js@latest/lib/typed.min.js"></script>
                        <script>
                            let typed = new Typed('.subtitle', {
                            strings: ['<?php echo esc_html(get_field('hero_subtitle')); ?>'],
                            typeSpeed: 300
                        });
                        </script>
                        <?php 
                        
                        $link = get_field('hero_link');
                        $link_title = $link['title'];
                        $link_url = $link['url'];
                        
                        ?>
                        <a href="<?php echo esc_url($link_url); ?>" class="button button--primary"><?php echo esc_html($link_title); ?></a>
                    </div>
                </div>
                <div class="hero-content--right">
                    <div class="img-container img-container--contain lazy">
                        <div class="img-container__inner">+
                            <?php 
                        
                            $imgsrc = get_field('hero_image');

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
            <div class="hero-content--mobile">
                <div class="hero-content--mobile--img-container img-container img-container--cover lazy">
                    <div class="img-container__inner">
                        <?php 
                        
                        $imgsrc = get_field('hero_image');

                        printf(
                            '<img loading="lazy" %s title="%s" alt="%s" />',
                            fc_theme_responsive_image($imgsrc, 'medium', '768px'),
                            esc_attr(get_the_title($imgsrc )),
                            esc_attr(get_post_meta($imgsrc, '_wp_attachment_image_alt', true))
                        );
                        
                        ?>
                        <div class="inner-content">
                            <div class="inner">
                                <h1><?php echo esc_html(get_field('hero_title')); ?></h1>
                                <div class="subtitle-container">
                                    <span class="subtitle"><?php echo esc_html(get_field('hero_subtitle')); ?></span>
                                </div>
                                <?php 
                                
                                $link = get_field('hero_link');
                                $link_title = $link['title'];
                                $link_url = $link['url'];
                                
                                ?>
                                <a href="<?php echo esc_url($link_url); ?>" class="button button--primary"><?php echo esc_html($link_title); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Start -->

    <?php the_content(); ?>

    <!-- Conditions Section -->

    <section class="conditions-section" id="conditions-section">
        <div class="conditions-container">
            <h2><?php echo esc_html(get_field('conditions_title')); ?></h2>
            <div class="conditions-content">
                <?php while(have_rows('conditions')) : the_row(); ?>
                <div class="conditions-content--inner">
                    <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
                    <p><?php echo wp_kses(get_sub_field('text'), array('br' => array())); ?></p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <!-- Contact-Section -->
    
    <section class="contact-section" id="contact-section">
        <div class="contact-section-container">
            <h2>Kontakt</h2>
            <div class="contact-section-container--inner">
                <?php get_template_part('template-parts/content/forms/form'); ?>
            </div>
        </div>
    </section>

    <?php endwhile; ?>
</main>