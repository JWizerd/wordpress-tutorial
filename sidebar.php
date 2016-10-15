<aside class="col-md-3">
  <!-- NOTES: It's important to note that apart from using the main wordpress loop it is a best practice to NOT reuse the same wordpress loop to output secondary queries to the posts database. This could have weird side effects. Therefore, each time new queries must be made you should create new instances of posts object and then parse the data. -->

  <h2>Pages</h2>

  <?php
        $post_params = array(
          'posts_per_page' => '10',
          'post_type' => 'page',
          'orderby' => 'post_date'
        );
        $queryObject = new WP_Query($post_params);
  ?>

  <!-- The Loop -->
  <?php if ($queryObject->have_posts()) { ?>
    <?php while ($queryObject->have_posts()) {

      $queryObject->the_post(); ?>

      <dl>
        <dt><a href="<?php echo get_permalink() ?>"><?php echo the_title(); ?></a></dt>
        <dd><small><?php get_the_date(); ?></small></dd>
        <dd><?php echo wp_trim_words( get_the_content(), 5, '...' ); ?></dd>
      </dl>

    <?php } ?>
  <?php } ?>

  <h2>Recent Posts</h2>

  <?php
        $post_params = array(
          'posts_per_page' => '10',
          'orderby' => 'post_date'
        );
        $queryObject = new WP_Query($post_params);
  ?>

  <!-- The Loop -->
  <?php if ($queryObject->have_posts()) { ?>
  	<?php while ($queryObject->have_posts()) {

  		$queryObject->the_post(); ?>

      <dl>
        <dt><a href="<?php echo get_permalink() ?>"><?php echo the_title(); ?></a></dt>
        <dd><small><?php get_the_date(); ?></small></dd>
        <dd><?php echo wp_trim_words( get_the_content(), 5, '...' ); ?></dd>
      </dl>

  	<?php } ?>
  <?php } ?>

<h2>Objects</h2>
<!-- loop through custom post type OBJECTS -->
<?php
      $post_params = array(
        'posts_per_page' => '10',
        'post_type' => 'objects',
        'orderby' => 'post_date',
      );
      $queryObject = new WP_Query($post_params);
?>

<!-- The Loop -->
<?php if ($queryObject->have_posts()) { ?>
  <?php while ($queryObject->have_posts()) {

    $queryObject->the_post(); ?>

    <dl>
      <dt><a href="<?php echo get_permalink() ?>"><?php echo the_title(); ?></a></dt>
      <dd><small><?php echo get_the_date(); ?></small></dd>
      <dd><?php echo wp_trim_words( get_the_content(), 5, '...' ); ?></dd>
    </dl>

  <?php } ?>
<?php } ?>

<h2>Activites</h2>
<!-- loop through custom post type ACTIVITIES -->
<?php
      $post_params = array(
        'posts_per_page' => '10',
        'post_type' => 'activites',
        'orderby' => 'post_date'
      );
      $queryObject = new WP_Query($post_params);
?>

<!-- The Loop -->
<?php if ($queryObject->have_posts()) { ?>
  <?php while ($queryObject->have_posts()) {

    $queryObject->the_post(); ?>

    <dl>
      <dt><a href="<?php echo get_permalink() ?>"><?php echo the_title(); ?></a></dt>
      <dd><small><?php echo get_the_date(); ?></small></dd>
      <dd><?php echo wp_trim_words( get_the_content(), 5, '...' ); ?></dd>
    </dl>
  <?php } ?>
<?php } ?>

</aside>
