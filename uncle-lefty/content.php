<?php
/**
 * @package Uncle Lefty
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta posted-on">
			 <?php the_time('n.j.Y') ?>  
		</div><!-- .entry-meta -->
		
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<h2 class="secondary-headline"><?php  echo get('secondary_headline'); ?></h2>
		<?php if ( 'post' == get_post_type() ) : ?>

		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<div><?php the_content( __( 'Show More', 'uncle-lefty' ) ); ?></div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'uncle-lefty' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'uncle-lefty' ) );
				if ( $categories_list && uncle_lefty_categorized_blog() ) :
			?>

			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'uncle-lefty' ) );
				if ( $tags_list ) :
			?>

			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'uncle-lefty' ), __( '1 Comment', 'uncle-lefty' ), __( '% Comments', 'uncle-lefty' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'uncle-lefty' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
