<?php get_header(); ?>

<main class="container-fluid content-wrapper">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="row">
        <div class="col-md-8">

          <?php get_template_part( 'loop' ); ?>

          <?php comments_template(); ?>

        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
