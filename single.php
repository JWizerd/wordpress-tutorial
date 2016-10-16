<?php get_header(); ?>

<main class="container-fluid content-wrapper">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="row">
        <div class="col-md-8">

          <?php get_template_part( 'content', 'loop' ); ?>

        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
