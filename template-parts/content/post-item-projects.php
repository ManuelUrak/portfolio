<a class="no-style" href="<?php echo the_permalink(); ?>">
    <div class="projects-content--inner">
        <div class="img-container img-container--contain lazy">
            <div class="img-container__inner">
                <?php the_post_thumbnail('medium'); ?>
            </div>
        </div>
        <div class="content">
            <h3><?php echo the_title(); ?></h3>
            <p><?php echo the_excerpt(); ?></p>
            <span class="button button--primary">Zum Projekt</span>
        </div>
    </div>
</a>
