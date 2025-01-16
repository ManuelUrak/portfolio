<main class="site-main" id="site-main" role="main">
    <?php 
    
    while(have_posts()){
        the_post();
        
        //Getting the Hero

        get_template_part('template-parts/content/hero');

        //Content starts here

        the_content();
    }
    
    ?>
</main>