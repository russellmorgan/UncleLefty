<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Uncle Lefty
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page">
	<?php the_title(); ?>
	</header><!-- .entry-header -->
	
	
	
<?php if ( is_page(21) ) {  
$xcat = 6;
include (TEMPLATEPATH . '/inc/roster-list.php'); 
} elseif ( is_page(23) ) {   
$xcat = 7;
include (TEMPLATEPATH . '/inc/roster-list.php');  
} elseif ( is_page(1379) ) {   
$xcat = 9;
include (TEMPLATEPATH . '/inc/roster-list.php');   
} elseif ( is_page(1381) ) {   
$xcat = 10;
include (TEMPLATEPATH . '/inc/roster-list.php');   
} else { 
} ?>
	
	
	
	<div class="entry-content">
		<?php the_content(); ?>

		
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'uncle-lefty' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'uncle-lefty' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
