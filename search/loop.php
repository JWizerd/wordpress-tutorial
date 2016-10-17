<?php echo '<h1>Search Results:' . ' ' . get_search_query() . '</h1>'; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <li class="search-result">
    <!-- get the thumbnail for a specific post by grabbing the id and setting the size -->
    <?php echo get_the_post_thumbnail(get_the_ID(), 'large') ?>

    <p><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>

    <small><?php echo wp_trim_words( get_the_content(), 50, '...' ); ?></small>
  </li>
  <hr>

<?php endwhile; ?>
<?php else: _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
