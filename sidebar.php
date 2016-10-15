<aside class="col-md-3">
  <!-- NOTES: It's important to note that apart from using the main wordpress loop it is a best practice to NOT reuse the same wordpress loop to output secondary queries to the posts database. This could have weird side effects. Therefore, each time new queries must be made you should create new instances of posts object and then parse the data. -->

  <h2>Recent Posts</h2>

  <?php define( 'WP_USE_THEMES', false );
        $post_params = array(
          'posts_per_page' => '10',
          'post_type' => 'post'
        );
        $queryObject = new WP_Query($post_params);
  ?>

  <!-- The Loop -->
  <?php if ($queryObject->have_posts()) { ?>
  	<?php while ($queryObject->have_posts()) {

  		$queryObject->the_post(); ?>

  		<p><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></p>

  	<?php } ?>
  <?php } ?>
</aside>
