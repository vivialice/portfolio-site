<?php

/*
	Template Name: Custom Home Page
*/

get_header();  ?>

<div class="main">

	<section class="landing">
		
		
	</section><!-- /.landing -->
	
	<div class="container">
		
		<div class="aboutContainer clearfix">
			<div class="aboutLeft">
				<h2>Good Morning</h2>
			</div><!-- /.aboutLeft -->

		<div class="line"></div><!-- /.line -->

			<div class="aboutRight">
				<?php echo the_field('about_copy'); ?>
				<div class="contactBtn">
					<a href="#">Say Hello</a>
				</div><!-- /.contactBtn -->
			</div><!-- /.aboutRight -->

			<!-- <h2>Selected Work</h2> -->
		</div><!-- /.aboutContainer -->

	</div> <!-- /.container -->

	<section class="portfolio">
	    <?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	      <?php the_content(); ?>

	    <?php endwhile; // end the loop?>

	    <?php // pull 6 portfolio pieces ?>
		<?php $latestPosts = new WP_Query(array(
			'post_type' => 'portfolio', 
			'posts_per_page' => 6
		)); ?>

		<?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
					<div class="portfolioSq">
						<div class="portfolioContent"><a class="box" href="<?php echo get_permalink(); ?>">
							<h2><?php the_title(); ?></h2>
							<h3><?php the_field('description'); ?></h3>
							<div class="tag">
								<?php the_terms($post->ID,'technical_skills', '', ''); ?>
							</div><!-- /.tag -->
						</div><!-- /.portfolioContent -->
							<?php the_post_thumbnail( 'homepage-thumb' ); ?>
					</a>
					</div><!-- /.portfolioSq -->

		<?php endwhile // end custom loop ?>
		<?php wp_reset_postdata(); // return end, must do on all custom queries ?>
	</section><!-- /.portfolio -->
	
	<div class="container">
		<?php echo do_shortcode( get_field('contact_form') ); ?>
	</div><!-- /.container -->

</div> <!-- /.main -->

<?php get_footer(); ?>