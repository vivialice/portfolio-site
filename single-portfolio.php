<?php get_header(); ?>

<div class="main">

  <div class="container">


      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <div class="theTerms">
          <?php the_terms($post->ID,'technical_skills', '', ''); ?>
        </div><!-- /.theTerms -->

        <div class="portfolio-page-thumb">
          <?php the_post_thumbnail( 'homepage-thumb' ); ?>
        </div><!-- /.portfolio-page-thumb -->
        
        <div class="descBox">
          <p><?php the_field('client_name'); ?></p>
          <p><?php the_field('description'); ?></p>
        </div><!-- /.descBox -->

        <div class="images">
        	<?php while(has_sub_field('portfolio_images')) : ?>
				<?php ?>

					<?php $image = get_sub_field('image'); ?>
					 <img src="<?php echo $image; ?>" alt="">

        	<?php endwhile; //end images loop ?>

        </div><!-- /.images -->

        <?php //the_content(); ?>

      <?php endwhile; // end of the loop. ?>



  </div> <!-- /.container -->

</div> <!-- /.main -->

<?php get_footer(); ?>