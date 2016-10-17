<main class="container-fluid content-wrapper">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="row">
        <div class="col-sm-12 fullwidth">

          <!-- display the post content for a single post THE MAIN WORDPRESS LOOP -->
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

        </div>
      </div>
    </div>
  </div>
</main>
