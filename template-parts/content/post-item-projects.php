<a href="<?php the_permalink(); ?>" class="post-item-link no-style">
    <div class="post-item-container">
        <div class="post-item-container--inner">
            <div class="img-container img-container--contain lazy">
                <div class="img-container__inner">
                    <?php get_the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    </div>
</a>