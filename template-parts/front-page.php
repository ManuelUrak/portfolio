<main class="site-main" id="site-main" role="main">
    <?php 
    
    while(have_posts()){
        the_post();

        //Content starts here

        the_content();
    }
    
    ?>
</main>