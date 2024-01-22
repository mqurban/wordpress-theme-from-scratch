

</body>
</html>
<div class="footer-menu">
<footer><p>Footer Menu</p>

    <div class="main-header">
     <!-- for menu -->
    <div class="header-menu">
        <?php 
        wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'my_footer_menu_class' ) );
        ?>
    </div>
    <!-- for logo -->
    <div class="logo-div">
         <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id);
        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';


        // <img src="<?php echo (wp_get_attachment_image_url(get_theme_mod('custom_logo'))) ?>
    </div>
    </div>
</footer>

