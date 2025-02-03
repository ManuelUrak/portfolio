<!-- Projects Section -->

<?php 

$post_type = get_field('block_post_loop_post_type');
$numberposts = get_field('block_post_loop_numberposts');

?>

<section class="projects-section" id="projects-section">
    <?php 
        
    $recent_posts = wp_get_recent_posts(array( 
        'post_type' => $post_type,
        'numberposts' => $numberposts
    ));
        
    ?>
    <div class="projects-section-container">
        <h2><?php echo esc_html(get_field('block_post_loop_title')); ?></h2>
        <div class="projects-content">
            <?php 
                
            foreach($recent_posts as $posts) : 
                $img = get_the_post_thumbnail($posts['ID']);
                $excerpt = esc_html(get_the_excerpt($posts['ID']));
                
            ?>
            <a href="<?php echo esc_url(get_permalink($posts['ID'])); ?>" class="no-style">
                <div class="projects-content--inner">
                    <div class="img-container img-container--contain lazy">
                        <div class="img-container__inner">
                            <?php echo $img; ?>
                        </div>
                    </div>
                    <div class="content">
                        <h3><?php echo $posts['post_title']; ?></h3>
                        <p><?php echo $excerpt; ?></p>
                        <span class="button button--primary">Zum Projekt</span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <a href="/projects" class="button button--primary">Mehr anzeigen</a>
    </div>
</section>