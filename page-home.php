<?php /*Template Name: Home Page Template*/ ?>

<?php get_header(); ?>

<div class="main-content">
        <?php dynamic_sidebar('banner-home'); ?>
      </div>
    </div>
  </div>
  <div class="container-fluid">
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

<?php get_footer(); ?>
