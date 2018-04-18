<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Uncle Lefty
 */

get_header(); ?>
<div class="arch cf">
<ul>
<?php // get_archives('monthly', '', 'html', '', '', FALSE); ?>
</ul>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<header class="entry-header page">
	<h1>News</h1>
	</header><!-- .entry-header -->		
<div class="ind-top cf">
<div class="signup">
<strong>Sign up for our weekly newsletter</strong>
<?php echo do_shortcode('[madmimi id=2 title=true]'); ?>
<!-- <input><button type="button">Join</button> -->
</div>
<div class="contact-info fb">
<strong>Facebook</strong> 
 <a href="https://www.facebook.com/UncleLeftyInc" target="_blank">Like Us</a>
 </div>
</div><!-- top -->
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php uncle_lefty_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>