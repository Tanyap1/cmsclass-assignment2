<?php get_header();?>


<img src="<?php the_post_thumbnail_url('post_image');?>" class="img-fluid mb-5">

<div class="content">
<div class="container">

             <?php if(have_posts()) : while(have_posts()) : the_post();?>

    <?php the_content();?>

    <?php endwhile; else: endif;?>
</div>


</div>


<div id="alice">            
    <?php get_sidebar();?>
</div>


<?php get_footer();?>