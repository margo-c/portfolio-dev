<?php get_header( 'portfolio' ); ?>

  <div class="container">   

    <div class="page-header">

    <div class="col-md-12 portfolio">

      <h1><?php the_title(); ?></h1>
      <h5>Made for: <?php the_field('made_for'); ?></h5>
      <h5><?php the_tags(); ?></h5>
      <h5><?php the_field('year'); ?></h5>

    </div>

    </div>

    <div class="row">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="col-md-10 col-md-offset-1 portfolio">
          <?php the_field('slideshow'); ?>
        </div>

        <div class="col-md-10 col-md-offset-1 shrink">
          <?php the_content(); ?>
          <p><a class="btn btn-large btn-primary" href="<?php the_field('link'); ?>">View Final Piece <span class="glyphicon glyphicon-arrow-right"></span></a></p>

        </div>

    </div>

  <div class="col-md-3 col-md-offset-9 prev-next">
    <?php next_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>' ); ?>
    <a href="<?php bloginfo('url'); ?>/?p=68"><span class="glyphicon glyphicon-th"></span></a>
    <?php previous_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>' ); ?>
  </div>

<!-- Most recent work -->

<hr/>

<div class="col-md-12 shrink">
  <h3 class="recentwork">Recent Work</h3>
</div>


<div class="col-md-10 col-md-offset-1">
  <div class="row">
    <?php $the_query = new WP_Query( array( 'showposts' => '2', 'post_type' => 'portfolio' )); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <div class="col-md-6 portfolio-piece">

              <?php
                $thumbnail_id = get_post_thumbnail_id(); 
                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
              ?>

              <p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title();?> graphic" class="fade"></a></p>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <h6><?php the_tags(' '); ?></h6>
              <h6><?php the_date('Y'); ?></h6>  

          </div>

    <?php endwhile;?>
  </div> <!-- End row -->
</div> <!-- End container -->

<!-- /End recent work -->     

<?php endwhile; else: ?>

<div class="col-md-10 col-md-offset-1">
  
  <div class="page-header">
    <h1>Oh no!</h1>
  </div>

  <p>No content is appearing for this page!</p>

</div>

<?php endif; ?>
  

<div class="clearfix"></div>

<?php get_footer(); ?>