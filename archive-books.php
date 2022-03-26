<?php get_header();?>



<div class="content">
    <div class="container">
        <div clss="row">


<div class="col-lg-9">



             <?php if(have_posts()) : while(have_posts()) : the_post();?>


             <?php if(has_post_thumbnail()):?>
             <img src="<?php the_post_thumbnail_url('post_image');?>"  class="img-fluid mb-5">
             <?php endif;?>
             <a href="<?php the_permalink();?>"><h1><?php the_title();?></h1></a>

             <?php the_excerpt();?>
             <?php endwhile; else: endif;?>

</div>
</div>


</div>

<?php
global $wp_query;
 
$big = 999999999; // need an unlikely integer 
echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 3, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
) );
?>



<div id="alice">          
      <?php get_sidebar();?>
</div>

<?php get_footer();?>