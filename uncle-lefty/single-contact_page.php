<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Uncle Lefty
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
	<header class="entry-header page">
	<?php the_title(); ?>
	</header><!-- .entry-header -->
<div class="contact-top cf">
<div class="c-l">
  <?php echo get('ny_address'); ?>
  <!-- <a href="<?php echo get('ny_map_link'); ?>" target="_blank">map</a> -->
  <p class="tel"><?php echo get('ny_phone'); ?></p>
</div>
<div class="c-r">
  <?php echo get('la_address'); ?>
  <p class="tel"><?php echo get('la_phone'); ?></p>
</div>
</div><!-- contact top -->

<?php /*
<h3>Los Angeles</h3>
  <?php echo get('la_address'); ?>
  <a href="<?php echo get('la_map_link'); ?>" target="_blank">map</a>
    <p class="tel"><?php echo get('la_phone'); ?></p>
*/ ?>

<div class="contact-bottom cf">
<div class="c-l">

  <?php
$nyx = get_group('ny_contact');
foreach($nyx as $nyz){ ?>

<div class="contact-info">

<h1><?php echo $nyz['ny_contact_name'][1]?></h1>
<h2><?php echo $nyz['ny_contact_title'][1]?></h2>
<?php echo $nyz['ny_contact_details'][1]?>
</div>

  <?php  } ?>

<!-- client request to hide this -->
<div class="contact-info fb" style="display:none">
<strong>Facebook</strong>
 <a target="_blank" href="https://www.facebook.com/UncleLeftyInc">Like Us</a>
 </div>

 </div>

</div><!-- contact bottom -->

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
