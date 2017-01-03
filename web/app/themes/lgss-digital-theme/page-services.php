<?php 

/* Template name: Services */

?>
<?php 
  // store up text to output later so we don't have to redo the wploop
  $lower = get_field('below_table'); 
?>


<!--<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>-->

<?php the_content(); ?>

<table>
  <thead>
    <tr>
      <th scope="col" width="40%">Service</th>
      <th scope="col" width="20%">Status</th>
      <th class="col" width="40%">Last update</th>
    </tr>
  </thead>
  <tbody>
  	<?php
 		$args = array('post_type' => 'service');
 		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			get_template_part( 'templates/content', 'service');
		endwhile;
	?>
	</tbody>
</table>

<div><?php echo $lower; ?></div>

