<?php get_header(); ?>

<div class="page-title"><?php the_title( '<h2>', '</h2>' ); ?></div>
<div class="container">
    <div class="section-top">
        <div class="image">
        <img src="<?php echo get_theme_mod('room_img_1'); ?>" alt="Custom Room">
        </div>
        <div class="text">
        <h4 class="room-title"><?php echo get_theme_mod('room_type_1', 'Type of Room'); ?></h4>
        <p><?php echo get_theme_mod('room_text_1', 'Room Description'); ?></p>
        </div>
    </div>
    
    <div class="section-bottom">
        <div class="text">
        <h4 class="room-title"><?php echo get_theme_mod('room_type_2', 'Type of Room'); ?></h4>
        <p><?php echo get_theme_mod('room_text_2', 'Room Description'); ?></p>
        </div>
        <div class="image">
            <img src="<?php echo get_theme_mod('room_img_2'); ?>" alt="Custom Room">
        </div>
    </div>
</div>

<?php get_footer(); ?>