<?php get_header(); ?>

<div class="main">

<div class="second">
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

        </div>


    <div class="first">
            <div class="first-1">
              <h3><?php  bloginfo( 'name' ); ?></h3>
            </div>

            <div class="first-2">
                <h3><?php bloginfo( 'description' ); ?></h3>
            </div>    
        </div>


        
        <h1>Our Mission</h1>
        <div class="third">
            <div class="three-boxes">
                <h1>Learn</h1>
            <ol>
            <?php 
            while(have_posts()){
                the_post();
                ?>
            <a  href="<?php  the_permalink();    ?>"><li><p><?php the_title(); ?></p></li> </a> 
        <?php }
        the_posts_pagination();
    ?>
    </ol>
            </div>
        <!-- Pages Section -->

            <div class="three-boxes">
                <h3>My All pages</h3>
                <ol>
                <?php 

                $args = array(
                    'post_type' => 'page', 
                    'posts_per_page' => -1, 
                );
                $pages_call = new WP_Query($args);

                while ($pages_call->have_posts()) {
                        $pages_call->the_post();  ?>
                      <a href="<?php the_permalink();  ?>"> <li><p><?php the_title();?></p></li></a>
                   <?php }?>
                   <?php
                   wp_reset_postdata(); 
                the_posts_pagination();
                ?>
</ol>
        </div>
            <div class="three-boxes">
                <h1>Grow</h1>
               <ul><?php  dynamic_sidebar( 'sidebar' ); ?></ul> 
               
            </div>
        </div>
        <img src="<img src='https://source.unsplash.com/random/1000x1000' alt=''/>" alt="">
    </div>

<div class="fourth">
 <?php 
    
    $events = new WP_Query( array(
        'post_type' => 'event',
        'post_per_page'=> -1,
    ) );
  
  while($events->have_posts()){  
   $events->the_post(); ?>

    <a href="<?php the_permalink(); ?>"><h3><?php   echo get_the_title();  ?></h3> </a>
    <p><?php   echo get_the_excerpt(); ?>  </p> 
    <?php   echo get_the_date();  ?>
    <?php  echo  get_the_author();  ?>
    <hr>

    
 <?php }

 ?>
</div>

<?php get_footer();  ?>
