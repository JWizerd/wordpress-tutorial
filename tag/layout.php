<main class="container-fluid content-wrapper">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="row">
        <div class="col-md-8">
        <h1>Tag Results for: <?php echo single_tag_title() ?></h1>
        <ul class="search-results">
          <?php get_template_part('category/loop'); ?>
        </ul>
      </div>
    </div>
  </div>
</main>
