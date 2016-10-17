<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<main class="container-fluid content-wrapper">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="row">
        <div class="col-md-8">
        <ul>
          <?php echo '<h1>Search Results:' . ' ' . get_search_query() . '</h1>'; ?>

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <li class="search-result">
              <p><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
              <small><?php echo wp_trim_words( get_the_content(), 50, '...' ); ?></small>
            </li>

          <?php endwhile; ?>
          <?php else: _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
          <?php endif; ?>
        </ul>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>
