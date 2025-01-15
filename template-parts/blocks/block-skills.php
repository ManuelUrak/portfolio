<!-- Skills Section -->

<section class="skills-section" id="skills-section">
    <div class="skills-container">
        <h2><?php echo esc_html(get_field('block_skills_title')); ?></h2>
        <div class="skills-content">
            <?php while(have_rows('block_skills')) : the_row(); ?>
            <div class="skills-content--inner">
                <h5><?php echo esc_html(get_sub_field('title')); ?></h5>
                <div class="progressbar-outer">
                    <div class="progressbar-inner p-<?php echo get_sub_field('percentage'); ?>">
                        <small><?php echo esc_html(get_sub_field('percentage')); ?>%</small>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>