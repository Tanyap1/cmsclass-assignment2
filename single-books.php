<?php get_header();?>


<div class="content">
    <div class="container">
        <div clss="row">

            <div clss="col-lg-3">
            <?php if(has_post_thumbnail()):?>
             <img src="<?php the_post_thumbnail_url('post_image');?>"  class="img-fluid mb-5">
             <?php endif;?>
<h1><?php the_title();?></h1>

             <?php if(have_posts()) : while(have_posts()) : the_post();?>
             <?php the_content();?>
             <?php endwhile; else: endif;?>
             <p><?php echo get_the_date('l jS F, Y');?></p>


</div>
</div>


</div>



<div id="alice">         
       <?php get_sidebar();?>
</div>
<?php get_footer();?>