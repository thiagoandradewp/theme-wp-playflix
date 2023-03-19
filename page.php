   
<?php get_header(); ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
        the_title();
        the_content();
		//
	} // end while
} // end if
    //the_field('nome_meta_field');
?>

<?php get_footer(); ?>