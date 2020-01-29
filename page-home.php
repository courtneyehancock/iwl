<?php /*Template Name: Home Page Template*/ ?>

<?php get_header(); ?>

<div class="main-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('banner-home'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();?>
              <?php the_content();
            }
          }
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
