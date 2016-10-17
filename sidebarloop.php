<?php
      $post_params = array(
        'posts_per_page' => '15',
        'post_type' => array(
                            'post',
                            'objects',
                            'activites'
                       ),
        'orderby' => 'post_date'
      );
      $queryObject = new WP_Query($post_params);
?>

<?php if ($queryObject->have_posts()) { ?>
  <?php while ($queryObject->have_posts()) {

    $queryObject->the_post(); ?>

    <dl>
      <dt><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></dt>
      <dd><small><?php echo get_the_date(); ?></small></dd>
      <dd><?php echo wp_trim_words( get_the_content(), 5, '...' ); ?></dd>
    </dl>

  <?php } ?>
<?php } ?>
