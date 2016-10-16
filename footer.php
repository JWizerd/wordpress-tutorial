<?php wp_footer(); ?>

<footer class="container-fluid content-wrapper">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="col-sm-4">
        <h2>Footer</h2>
        <p>&copy; <?php echo date("Y"); ?></p>
      </div>
        <div class="col-sm-4 col-sm-offset-4">
          <h2>Page Navigation</h2>
          <ul>

            <?php
                  $post_params = array(
                    'posts_per_page' => '10',
                    'orderby'        => 'post_date',
                    'post_type'      => 'page'
                  );
                  $queryObject = new WP_Query($post_params);
            ?>

            <!-- The Loop -->
            <?php if ($queryObject->have_posts()) { ?>
              <?php while ($queryObject->have_posts()) {

                $queryObject->the_post(); ?>

                <li><a href="<?php echo get_permalink() ?>"><?php echo the_title(); ?></a></dt>

              <?php } ?>
            <?php } ?>

          </ul><!-- end footer pages navigation -->
        </div>
    </div>
  </div>
</footer>

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
