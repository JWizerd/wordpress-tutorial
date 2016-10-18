<?php
  //advanced custom fields
  $resume_title = get_field('resume_title');
?>

<section class="row resume">
    <h2 class="resume-title"><?php echo $resume_title; ?></h2>
    <p><?php the_field('resume_section') ?><!-- resume section --></p>
</section>
