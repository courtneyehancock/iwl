<?php /*Template Name: Speaker Page Template*/ ?>

<?php get_header(); ?>

<div class="main-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();?>
              <?php the_content();
            }
          }
        ?>
      </div>
      <div class="col-md-3">
        <?php get_sidebar('right-sidebar'); ?>

      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
