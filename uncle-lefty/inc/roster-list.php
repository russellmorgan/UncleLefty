<div class="roster-list">
<h1 class="roster-categories">EAST COAST</h1>
<ul class="cf">
<?php
$args = array( 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC', 'post_type'=>'member', 'category'=> $xcat );
$xxx = get_posts($args);
if( $xxx ) :
  foreach( $xxx as $xx ) {
  setup_postdata($xx);
	if($xx->external_link_true == 1){
		  echo '<li><a class="vid-thumb" target="_blank" href="' . $xx->external_link_only_link . '">' . $xx->post_title . '</a></li>';  
	} else {
		  echo '<li><a class="vid-thumb" href="' . get_permalink($xx->ID) . '">' . $xx->post_title . '</a></li>';  
	};


  }
endif;
 ?>
</ul>

<h1 class="roster-categories">NO RELATION</h1>
<ul class="cf">
<?php
$xcat = 11;
$args = array( 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC', 'post_type'=>'member', 'category'=> $xcat );
$xxx = get_posts($args);
if( $xxx ) :
  foreach( $xxx as $xx ) {
  setup_postdata($xx);
	if($xx->external_link_true == 1){
		  echo '<li><a class="vid-thumb" target="_blank" href="' . $xx->external_link_only_link . '">' . $xx->post_title . '</a></li>';  
	} else {
		  echo '<li><a class="vid-thumb" href="' . get_permalink($xx->ID) . '">' . $xx->post_title . '</a></li>';  
	};


  }
endif;
 ?>
</ul>


<h1 class="roster-categories">WEST COAST</h1>
<ul class="cf">
<?php
$xcat = 7;
$args = array( 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC', 'post_type'=>'member', 'category'=> $xcat );
$xxx = get_posts($args);
if( $xxx ) :
  foreach( $xxx as $xx ) {
  setup_postdata($xx);
	if($xx->external_link_true == 1){
		  echo '<li><a class="vid-thumb" target="_blank" href="' . $xx->external_link_only_link . '">' . $xx->post_title . '</a></li>';  
	} else {
		  echo '<li><a class="vid-thumb" href="' . get_permalink($xx->ID) . '">' . $xx->post_title . '</a></li>';  
	};


  }
endif;
 ?>
</ul>

</div>
