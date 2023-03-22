<?php
/* Template Name: about */
  get_header(); ?>

<div class="tfc-section6">
  <?php custom_about_post() ?>
   <div class="tfc_about_overlay">
     <?php dynamic_sidebar('widget-area-about')?>
  </div>
</div>
<div class="tfc-section7">
  <?php dynamic_sidebar('widget-area-about-description')?>