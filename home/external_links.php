<?php
  // advanced custom fields
  $links_title = get_field('links_title');
  $facebook = get_field('facebook');
  $facebook_link = get_field('facebook_link');
  $github = get_field('github');
  $github_link = get_field('github_link');
  $linkedin = get_field('linkedin');
  $linkedin_link = get_field('linkedin_link');
?>
<section class="external-links">
  <h2><?php echo $links_title; ?></h2>

  <a href="<?php echo $facebook_link; ?>"><img class="social-icon" src="<?php echo $facebook['url']; ?>" alt="<?php echo $facebook['alt']; ?>"></a>

  <a href="<?php echo $github_link; ?>"><img class="social-icon" src="<?php echo $github['url']; ?>" alt="<?php echo $github['alt']; ?>"></a>

  <a href="<?php echo $linkedin_link; ?>"><img class="social-icon" src="<?php echo $linkedin['url']; ?>" alt="<?php echo $linkedin['alt']; ?>"></a>
</section>
