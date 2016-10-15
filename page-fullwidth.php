<?php

/*

Template Name: Fullwidth

*/

?>

<?php get_header(); ?>
<main class="container-fluid content-wrapper">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="row">
        <div class="col-sm-12 fullwidth">
          <!-- display the post content for a single post THE MAIN WORDPRESS LOOP -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>

          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
