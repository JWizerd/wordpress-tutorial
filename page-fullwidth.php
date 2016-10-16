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
          <?php get_template_part( 'content', 'loop' ); ?>

        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
