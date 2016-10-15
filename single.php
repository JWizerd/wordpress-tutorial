<?php get_header(); ?>
<main class="container-fluid content-wrapper">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="row">
        <div class="col-md-9">
            <!-- display the post content for a single post THE MAIN WORDPRESS LOOP -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

               <h2><?php the_title(); ?></h2>
               <p><?php echo get_the_date(); ?></p>
               <?php the_content(); ?>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
