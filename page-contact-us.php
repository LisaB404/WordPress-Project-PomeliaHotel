<?php get_header(); ?>

<div class="page-title"><?php the_title( '<h2>', '</h2>' ); ?></div>
<div class="contact-container">
    <p>Fill out the form to get in touch with us.</p>

    <div class="form-container">
        <?php echo do_shortcode('[contact-form-7 id="f8d312a" title="Pomelia Hotel Form"]'); ?>
    </div>
</div>

<?php get_footer(); ?>