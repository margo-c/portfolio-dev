<?php
/*
  Template Name: Project Grid Template
*/

?>
<?php get_header(); ?>

  <div class="container">   
    <div class="row">
      
      <div class="col-md-10 col-md-offset-1">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1><?php the_title(); ?></h1>
          </div>

          <?php the_content(); ?>

        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>


      </div>      

    </div>

    <div class="col-md-10 col-md-offset-1">
    <div class="row">


      <?php
        $args = array( 
          'post_type' => 'portfolio'
        );
        $the_query = new WP_Query( $args );

      ?>

      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <div class="col-md-6 portfolio-piece">

          <?php
            $thumbnail_id = get_post_thumbnail_id(); 
            $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
          ?>

          <p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title();?> graphic" class="fade"></a></p>
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <h5><?php the_tags(' '); ?></h5>
          <h5><?php the_date('Y'); ?></h5>

      </div>

      <?php $portfolio_count = $the_query->current_post + 1; ?>
      <?php if ( $portfolio_count % 2 == 0): ?>

      </div> <!-- /end offset -->

      <div class="row">

      <?php endif; ?>


      <?php endwhile; endif; ?>
    </div>
  </div>

    <div class="clearfix"></div>



<?php get_footer(); ?>