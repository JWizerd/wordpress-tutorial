<?php get_header(); ?>

<main class="container-fluid content-wrapper">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="row">
        <div class="col-md-12">

        <?php get_template_part('home/bio') ?>
        <?php get_template_part('home/resume') ?>
        <?php get_template_part('home/external_links') ?>

        </div>

      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
