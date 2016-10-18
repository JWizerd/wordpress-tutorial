<form role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">

  <input type="text" name="s" id="s" value="<?php echo the_search_query(); ?>">

  <input type="submit" value="Search" class="btn-submit">

  <!-- <select name="search_category" class="search-categories">
    <option name="none">Select a category</option> -->

    <?php
      // $categories = get_categories();
      // foreach($categories as $cat) {
      //   $val = $cat->category_nicename;
      //   $name = $cat->cat_name;
      //   $count = $cat->category_count;
      //
      //   print("<option value='$val'>$name ($count)</option>");
      // };
    ?>

  <!-- </select> -->
</form>
