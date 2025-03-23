<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo( 'description' );?>">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div class="container clearfix"> <!--closed in the footer-->

      <header class="header clearfix">
        <a href="<?php echo home_url('/'); ?>" class="header__logo"><?php bloginfo('name'); ?></a>
        <a href="#" class="header__icon-bar"><span></span><span></span><span></span></a>
        
    <!--Main Navigation Menu-->
        <?php
            wp_nav_menu( array(
                'theme_location' => 'header',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'header__menu'
                )
            );
        ?>
      </header>
