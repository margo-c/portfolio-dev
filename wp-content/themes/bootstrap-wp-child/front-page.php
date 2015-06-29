<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="container">
        <div class="jumbotron">
        </div>

        <div class="col-md-10 col-md-offset-1">
      
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>
    
        <?php endwhile; endif; ?>


        </div>

      </div>

    <div class="container">
      <div class="col-md-10 col-md-offset-1">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">

          <?php if ( dynamic_sidebar( 'front-left' ) ); ?>

        </div>
        <div class="col-md-4">
          
          <?php if ( dynamic_sidebar( 'front-center' ) ); ?>

       </div>
        <div class="col-md-4">
          
          <?php if ( dynamic_sidebar( 'front-right' ) ); ?>

        </div>
        </div>
      </div>

      <div class="clearfix"></div>

<?php get_footer(); ?>