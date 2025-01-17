<main class="site-main" id="site-main">
    <section class="single-projects-section" id="single-projects-section">
        <?php 
        
        while(have_posts()){
            the_post();
            echo '<h1 class="single-title">' . get_the_title() . '</h1>';
            the_content();
        }
        
        ?>
    </section>
</main>