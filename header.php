<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php $phone_number = "(970) 391-2132"; ?>
  <?php wp_head(); ?>

</head>
<body>
  <header class="container-fluid">
    <div class="row content-wrapper">
      <div class="col-sm-10 col-sm-offset-1">

        <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-optin-monster" aria-hidden="true"></i><?php echo bloginfo('title'); ?></a></h1>

        <h2 class="phone"><?php echo $phone_number; ?></h2>
      </div>
    </div>
  </header>
  <?php get_template_part('navigation') ?>
