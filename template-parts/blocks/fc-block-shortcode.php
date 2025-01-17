<?php

$class_name = get_field('block_shortcode_class_name');

?>

<div class="block-shortcode <?php echo esc_attr($class_name); ?>">
    <?php echo do_shortcode(get_field('block_shortcode_shortcode')); ?>
</div>