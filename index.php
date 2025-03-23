<?php get_header(); ?>

<?php
if ( is_page('home') ) {
    get_template_part('page', 'home'); // search for the file page-home.php
} elseif ( is_page('rooms') ) {
    get_template_part('page', 'rooms'); // search for the file page-rooms.php
} elseif ( is_page('contact-us') ) {
    get_template_part('page', 'contact-us'); // search for the file page-contact-us.php
} elseif ( is_page('about-us') ) {
    get_template_part('page', 'about-us'); // search for the file about-us-page.php
} else {
    ?>
    <h1>Generic Page</h1>
    <p>This is a default page.</p>
    <?php
}
?>

<?php get_footer(); ?>