<div class="col-md-3">
  <?php define( 'WP_USE_THEMES', false ); ?>

    <!-- Start the Loop. -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   <!-- Display the Title as a link to the Post's permalink. -->

   <dl>
     <dt>
       <p><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
     </dt>
     <dd>
       <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
      <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
     </dd>
   </dl>

   <!-- Stop The Loop (but note the "else:" - see next line). -->

  <?php endwhile; else : ?>


   <!-- The very first "if" tested to see if there were any Posts to -->
   <!-- display.  This "else" part tells what do if there weren't any. -->
   <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


   <!-- REALLY stop The Loop. -->
  <?php endif; ?>
</div>
