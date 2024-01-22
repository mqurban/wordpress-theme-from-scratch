<?php 
get_header();
?>
<div class="post-style">
   <h1><?php    the_title();   ?></h1>
   <?php the_post_thumbnail( array(200 , 200) );  ?>
   <p><?php     the_content();  ?></p> 
   <p><?php    echo get_the_date(); ?> </p>
</div>
<?php 
get_footer( );

?>