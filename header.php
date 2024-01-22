<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment no 1 Html Boxes with CSS</title>
    <?php   wp_head();  ?>
    <link rel="stylesheet" href="htt">
</head>
<body>
<div class="main-header">

    <div class="logo-div">
        <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id);
        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
        ?>
        
    </div>

    <div class="header-menu">
        <?php 
        wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'my_header_menu_class' ) );
        ?>
    </div>

</div>




   