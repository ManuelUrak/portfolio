<!-- Conditions Section -->

<section class="conditions-section" id="conditions-section">
    <div class="conditions-container">
        <h2><?php echo esc_html(get_field('block_conditions_title')); ?></h2>
        <div class="conditions-content">
            <?php while(have_rows('block_conditions')) : the_row(); ?>
            <div class="conditions-content--inner">
                <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
                <p><?php echo wp_kses(get_sub_field('text'), array('br' => array())); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>