<?php get_header(); ?>

<div class="hero-container">
    <div class="center-div">
        <div class="hero-title">
            <img class="hero-image" src="<?php echo get_theme_mod('hero_image'); ?>" alt="Custom Logo">
            <h1><?php echo get_theme_mod('hero_title', 'Main title and motto'); ?></h1>
        </div>
        <div class="hero-btn">
            <button href="">Learn More</button>
            <button>Contact Us</button>
        </div>
    </div>
</div>

<?php get_footer(); ?>