<?php
  // advanced custom fields
  $bio_image = get_field('bio_image');
  $bio_title = get_field('bio_title');
  $bio_paragraph = get_field('bio_paragraph');
?>
<section class="row bio">
    <img class="bio-image" src="<?php echo $bio_image['url']; ?>" alt="<?php echo $bio_image['alt']; ?>">
    <h2 class="bio-title"><?php echo $bio_title; ?></h2>
    <p class="bio_paragraph"><?php echo $bio_paragraph; ?></p>
</section>
