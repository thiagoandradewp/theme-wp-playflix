   
<?php get_header(); ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here ?>

        <h2><?= the_title(); ?></h2>

        <?php
        the_post_thumbnail();
        the_excerpt();
		//
	} // end while
} // end if
    //the_field('nome_meta_field');
?>

<?php get_footer(); ?>