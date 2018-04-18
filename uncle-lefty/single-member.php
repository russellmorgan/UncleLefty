
<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Uncle Lefty
 */

get_header(); ?>
<script>
   $j("li.menu-item-45").addClass('active');
</script>




	<div id="primary" class="content-area">
		<main id="main" class="site-main roster-member" role="main">
		<?php while ( have_posts() ) : the_post(); ?>








<?php if ( in_category(6) ) { ?>
<script>
   $j("li.menu-item-28").addClass('active');
</script>
<?php } else { ?>

<?php } ?>


<?php if ( in_category(7) ) { ?>
<script>
   $j("li.menu-item-27").addClass('active');
</script>
<?php } else { ?>
<?php } ?>


<a class="backr" onclick="history.back(-1)">Back</a>

		<h1 class="entry-title"><?php the_title(); ?></h1>

	<a href="<?php echo get('info_website'); ?>" class="web" target="_blank"><?php echo get('info_website'); ?></a>
  <div class="talent cf">
<ul class="col1">
  <?php
$talent = get_group('talent'); 
foreach($talent as $tx){ ?>

<li>
<?php 
 
if ($tx['talent_link'][1]) {
?><a target="_blank" href="<?php  echo $tx['talent_link'][1];?>"><?php echo $tx['talent_name'][1]; ?></a>
<?php
} else {
 	echo $tx['talent_name'][1];
}
 
 


?>
</li>

  <?php  } ?>
</ul>





<ul class="col2">
  <?php
$talent2 = get_group('talent2'); 
foreach($talent2 as $tx2){ ?>

<li>
<?php 
 
if ($tx2['talent2_link'][1]) {
?><a target="_blank" href="<?php  echo $tx2['talent2_link'][1];?>"><?php echo $tx2['talent2_name'][1]; ?></a>
<?php
} else {
 	echo $tx2['talent2_name'][1];
}
 
 


?>
</li>

  <?php  } ?>
</ul>




</div>

		<div class="infoinfo"><?php echo get('info_info'); ?></div>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>