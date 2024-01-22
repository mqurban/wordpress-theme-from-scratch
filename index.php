<?php get_header();  ?>


<div class="fourth">
 <?php 
    
    // $events = new WP_Query( array(
    //     'post_type' => 'event',
    //     'post_per_page'=> -1,
    // ) );
  
  while(have_posts()){  
   the_post(); ?>

    <a href="<?php the_permalink(); ?>"><h3><?php   echo get_the_title();  ?></h3> </a>
    <?php  the_post_thumbnail( array(50,50) ); ?>
    <p><?php   echo get_the_excerpt(); ?>  </p> 
    <?php   echo get_the_date();  ?>
    <?php  echo  get_the_author();  ?>
    <hr>

    
 <?php }

 ?>
</div>


<?php get_footer( ); ?>