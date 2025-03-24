<?php get_header(); ?>

<div class="hero-container" style="background-image: url('<?php echo get_theme_mod('hero_image'); ?>');">
    <div class="center-div">
        <div class="hero-title">
            <h1><?php echo get_theme_mod('hero_title', 'Main title and motto'); ?></h1>
        </div>
        <div class="hero-btn">
            <button href="">Learn More</button>
            <button>Contact Us</button>
        </div>
    </div>
</div>

<?php get_footer(); ?>