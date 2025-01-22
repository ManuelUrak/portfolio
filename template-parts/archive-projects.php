<main class="site-main" id="site-main">
    <div class="archive-projects--title">
        <h1><?php echo pll__('Projekte'); ?></h1>
    </div>
    <section class="archive-projects--container projects-content">
        <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                get_template_part('template-parts/content/post-item', get_query_var('post_type'));
            }
        }
        ?>
    </section>
</main>
