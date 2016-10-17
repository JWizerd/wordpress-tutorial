<!-- display the post content for a single post THE MAIN WORDPRESS LOOP -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php if (is_page_template('single.php')) { ?>
    <h2><?php the_title(); ?></h2>
    <span><?php echo get_the_date(); ?></span>
    <!-- output cateogories and post tags -->
    <span><?php the_category(", "); ?></span>

    <?php the_content(); ?>
    <!-- show comment and allow users to leave comments. simply invoke this the comments template tag -->
    <?php comments_template(); ?>

  <?php } else { ?>

    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>

  <?php } ?>

<?php endwhile; ?>
<?php else: _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
