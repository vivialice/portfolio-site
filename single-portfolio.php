<?php get_header(); ?>

<div class="main">

  <div class="container">


      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h3 class="single"><?php the_title(); ?></h3>
        <h4><?php the_field('short_description'); ?></h4>
        <div class="theTerms">
          <?php the_terms($post->ID,'technical_skills', '', ''); ?>
        </div><!-- /.theTerms -->

        <!-- next and previous buttons -->
        <div class="portNav"><?php previous_post_link('%link', 'PREV'); ?> | <?php next_post_link('%link', 'NEXT'); ?></div>

  </div> <!-- /.container -->      

        <div class="topRow">
          <?php $feature_img = get_post_thumbnail_id();
                $feature_img_url = wp_get_attachment_image_src( $feature_img, 'portfolio-large', true );
                $feature_url = $feature_img_url[0];
          ?>
          <div class="portfolio-page-thumb" style="background-image: url('<?php echo $feature_url ?>');">
            <!-- <?php the_post_thumbnail( 'homepage-thumb' ); ?> -->
          </div><!-- /.portfolio-page-thumb -->

          <div class="descBox">
            <div class="descCopy">
              <?php the_field('description'); ?>
              <a class="btnView" href="http://vivienilett.com/fortuneAPI/fortune.html">View it live</a>
            </div><!-- /.descCopy -->
          </div><!-- /.descBox -->
        </div><!-- /.topRow -->

        <div class="images">
        	<?php while(has_sub_field('portfolio_images')) : ?>
				<?php ?>

					<?php $image = get_sub_field('image'); ?>
					 <img src="<?php echo $image; ?>" alt="">

        	<?php endwhile; //end images loop ?>

        </div><!-- /.images -->

        <?php //the_content(); ?>

      <?php endwhile; // end of the loop. ?>





</div> <!-- /.main -->

<?php get_footer(); ?>